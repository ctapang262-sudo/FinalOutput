<?php

namespace App\Http\Controllers;

use App\Models\SleepRecord;
use Illuminate\Http\Request;

class SleepRecordController extends Controller
{
    public function index()
    {
        $records = SleepRecord::query()
            ->when(auth()->check(), function ($query) {
                $query->where('user_id', auth()->id());
            }, function ($query) {
                $query->whereNull('user_id');
            })
            ->latest('sleep_date')
            ->get();

        return view('sleep-records', compact('records'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'sleep_date' => ['required', 'date'],
            'bedtime' => ['required', 'date_format:H:i'],
            'wake_time' => ['required', 'date_format:H:i'],
            'notes' => ['nullable', 'string', 'max:1000'],
        ]);

        $validated['user_id'] = auth()->id();

        SleepRecord::create($validated);

        return redirect('/sleep-records')
            ->with('success', 'Sleep record saved successfully!');
    }

    public function destroy(SleepRecord $sleepRecord)
    {
        if ($sleepRecord->user_id !== auth()->id()) {
            abort(403);
        }

        $sleepRecord->delete();

        return redirect('/sleep-records')
            ->with('success', 'Sleep record deleted.');
    }
}
