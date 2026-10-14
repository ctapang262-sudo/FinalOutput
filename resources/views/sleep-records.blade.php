
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DreamTrack | Sleep Records</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-slate-950 text-white">

    <nav class="border-b border-white/10 bg-slate-900">
        <div class="mx-auto flex max-w-7xl flex-wrap items-center justify-between gap-4 px-6 py-5">
            <a href="/" class="text-2xl font-bold text-violet-400">🌙 DreamTrack</a>

            <div class="flex flex-wrap items-center gap-5 text-sm">
                <a href="/" class="text-gray-300 hover:text-white">Home</a>
                <a href="/dashboard" class="text-gray-300 hover:text-white">Dashboard</a>
                <a href="/sleep-records" class="text-violet-400">Sleep Records</a>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="rounded-lg bg-red-600 px-4 py-2 font-semibold hover:bg-red-500">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <main class="mx-auto max-w-7xl px-6 py-10">

        <header class="mb-8">
            <p class="text-sm uppercase tracking-widest text-violet-400">Your Sleep History</p>
            <h1 class="mt-3 text-3xl font-bold sm:text-4xl">Sleep Records</h1>
            <p class="mt-3 text-gray-400">Record and manage your sleeping schedule.</p>
        </header>

        @if (session('success'))
            <div class="mb-6 rounded-xl border border-green-500/30 bg-green-500/10 p-4 text-green-300">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-6 rounded-xl border border-red-500/30 bg-red-500/10 p-4 text-red-300">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <div class="grid items-start gap-8 lg:grid-cols-3">

            <!-- Add Sleep Record -->
            <section class="rounded-2xl border border-white/10 bg-slate-900 p-6">
                <h2 class="text-xl font-bold">Add Sleep Record</h2>

                <form action="/sleep-records" method="POST" class="mt-6 space-y-5">
                    @csrf

                    <div>
                        <label for="sleep_date" class="mb-2 block text-sm text-gray-300">
                            Sleep Date
                        </label>
                        <input type="date" id="sleep_date" name="sleep_date"
                            value="{{ old('sleep_date', date('Y-m-d')) }}" required
                            class="w-full rounded-xl border border-white/10 bg-slate-950 p-3 text-white">
                    </div>

                    <div>
                        <label for="bedtime" class="mb-2 block text-sm text-gray-300">
                            Bedtime
                        </label>
                        <input type="time" id="bedtime" name="bedtime"
                            value="{{ old('bedtime') }}" required
                            class="w-full rounded-xl border border-white/10 bg-slate-950 p-3 text-white">
                    </div>

                    <div>
                        <label for="wake_time" class="mb-2 block text-sm text-gray-300">
                            Wake-up Time
                        </label>
                        <input type="time" id="wake_time" name="wake_time"
                            value="{{ old('wake_time') }}" required
                            class="w-full rounded-xl border border-white/10 bg-slate-950 p-3 text-white">
                    </div>

                    <div>
                        <label for="notes" class="mb-2 block text-sm text-gray-300">
                            Notes (Optional)
                        </label>
                        <textarea id="notes" name="notes" rows="3"
                            placeholder="How did you sleep?"
                            class="w-full rounded-xl border border-white/10 bg-slate-950 p-3 text-white">{{ old('notes') }}</textarea>
                    </div>

                    <button type="submit"
                        class="w-full rounded-xl bg-violet-600 px-5 py-3 font-semibold hover:bg-violet-500">
                        Save Sleep Record
                    </button>
                </form>
            </section>

            <!-- Saved Records -->
            <section class="rounded-2xl border border-white/10 bg-slate-900 p-6 lg:col-span-2">
                <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
                    <h2 class="text-xl font-bold">Your Records</h2>

                    <span class="rounded-full bg-violet-500/15 px-3 py-1 text-sm text-violet-300">
                        {{ $records->count() }} records
                    </span>
                </div>

                @forelse ($records as $record)
                    <article class="mb-4 rounded-xl border border-white/10 bg-slate-950 p-5">
                        <div class="flex flex-wrap items-start justify-between gap-4">
                            <div>
                                <h3 class="font-semibold">
                                    {{ $record->sleep_date->format('F d, Y') }}
                                </h3>

                                <p class="mt-3 text-sm text-gray-300">
                                    🌙 Bedtime:
                                    {{ \Illuminate\Support\Carbon::parse($record->bedtime)->format('h:i A') }}
                                </p>

                                <p class="mt-2 text-sm text-gray-300">
                                    ☀️ Wake-up:
                                    {{ \Illuminate\Support\Carbon::parse($record->wake_time)->format('h:i A') }}
                                </p>

                                @if ($record->notes)
                                    <p class="mt-3 whitespace-pre-line text-sm text-gray-400">
                                        {{ $record->notes }}
                                    </p>
                                @endif
                            </div>

                            <form action="/sleep-records/{{ $record->id }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this record?')">
                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                    class="rounded-lg border border-red-500/30 px-4 py-2 text-sm text-red-300 hover:bg-red-500/10">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </article>
                @empty
                    <div class="flex min-h-56 flex-col items-center justify-center rounded-xl border border-dashed border-white/15 p-6 text-center">
                        <p class="text-5xl">🌌</p>
                        <h3 class="mt-4 font-semibold">No records yet</h3>
                        <p class="mt-2 text-sm text-gray-400">
                            Add your first sleep record using the form.
                        </p>
                    </div>
                @endforelse
            </section>

        </div>

        <footer class="mt-12 border-t border-white/10 py-6 text-center text-sm text-gray-500">
            © {{ date('Y') }} DreamTrack
        </footer>

    </main>

</body>
</html>
