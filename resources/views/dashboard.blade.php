
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DreamTrack | Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-slate-950 text-white">

    <nav class="border-b border-white/10 bg-slate-900">
        <div class="mx-auto flex max-w-7xl flex-wrap items-center justify-between gap-4 px-6 py-5">
            <a href="/" class="text-2xl font-bold text-violet-400">🌙 DreamTrack</a>

            <div class="flex flex-wrap items-center gap-5 text-sm">
                <a href="/" class="text-gray-300 hover:text-white">Home</a>
                <a href="/dashboard" class="text-violet-400">Dashboard</a>
                <a href="/sleep-records" class="text-gray-300 hover:text-white">Sleep Records</a>

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

        <section class="mb-10">
            <p class="text-sm uppercase tracking-widest text-violet-400">
                Your Personal Sleep Tracker
            </p>

            <h1 class="mt-3 text-3xl font-bold sm:text-4xl">
                Welcome, {{ auth()->user()->name }}!
            </h1>

            <p class="mt-3 text-gray-400">
                Monitor your sleeping schedule and build healthy habits.
            </p>
        </section>

        <section class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">

            <div class="rounded-2xl border border-white/10 bg-slate-900 p-6">
                <p class="text-3xl">🌙</p>
                <p class="mt-4 text-gray-400">Sleep Records</p>
                <h2 class="mt-2 text-3xl font-bold">
                    {{ \App\Models\SleepRecord::where('user_id', auth()->id())->count() }}
                </h2>
                <p class="mt-2 text-sm text-gray-500">Records saved to your account</p>
            </div>

            <div class="rounded-2xl border border-white/10 bg-slate-900 p-6">
                <p class="text-3xl">✨</p>
                <p class="mt-4 text-gray-400">Sleep Goal</p>
                <h2 class="mt-2 text-3xl font-bold">8 Hours</h2>
                <p class="mt-2 text-sm text-gray-500">A general sleep target</p>
            </div>

            <div class="rounded-2xl border border-white/10 bg-slate-900 p-6">
                <p class="text-3xl">📅</p>
                <p class="mt-4 text-gray-400">Today's Date</p>
                <h2 class="mt-2 text-2xl font-bold">{{ now()->format('M d, Y') }}</h2>
                <p class="mt-2 text-sm text-gray-500">Keep your sleep routine consistent</p>
            </div>

        </section>

        <section class="mt-8 rounded-2xl border border-white/10 bg-slate-900 p-8">
            <h2 class="text-2xl font-bold">Your Sleep Journey</h2>

            <p class="mt-3 leading-7 text-gray-400">
                Every night is an opportunity to improve your routine.
                Record your bedtime and wake-up time to keep track of your sleep.
            </p>

            <a href="/sleep-records"
                class="mt-6 inline-block rounded-xl bg-violet-600 px-6 py-3 font-semibold hover:bg-violet-500">
                + Manage Sleep Records
            </a>
        </section>

        <footer class="mt-12 border-t border-white/10 py-6 text-center text-sm text-gray-500">
            © {{ date('Y') }} DreamTrack
        </footer>

    </main>

</body>
</html>
