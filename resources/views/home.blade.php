
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DreamTrack | Sleep Schedule Tracker</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-950 text-white">

    <!-- NAVIGATION -->
    <nav class="border-b border-white/10 bg-slate-950">
        <div class="max-w-7xl mx-auto px-6 py-5 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold">
                🌙 Dream<span class="text-violet-400">Track</span>
            </a>

            <div class="hidden md:flex gap-7 text-gray-300">
                <a href="/" class="text-violet-400">Home</a>
                <a href="/login" class="hover:text-violet-400">Login</a>
                <a href="/dashboard" class="hover:text-violet-400">Dashboard</a>
                <a href="/sleep-records" class="hover:text-violet-400">Sleep Records</a>
            </div>

            <a href="/login"
               class="bg-violet-400 text-slate-950 font-bold px-5 py-3 rounded-xl hover:bg-violet-300">
                Get Started
            </a>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="max-w-7xl mx-auto px-6 py-20 md:py-28 grid md:grid-cols-2 gap-14 items-center">

        <div>
            <p class="inline-block bg-violet-400/10 text-violet-300 border border-violet-400/20 rounded-full px-4 py-2 text-sm mb-7">
                ✨ Your journey to better sleep
            </p>

            <h1 class="text-5xl md:text-6xl font-extrabold leading-tight">
                Sleep better.<br>
                <span class="text-violet-400">Live brighter.</span>
            </h1>

            <p class="text-gray-400 text-lg leading-8 mt-6 mb-8">
                Welcome to DreamTrack! Keep your sleep schedule organized,
                record your bedtime and wake-up time, and build healthier
                sleep habits one night at a time.
            </p>

            <div class="flex flex-wrap gap-4">
                <a href="/login"
                   class="bg-violet-400 text-slate-950 px-7 py-4 rounded-xl font-bold hover:bg-violet-300">
                    Start Tracking →
                </a>

                <a href="#features"
                   class="border border-white/20 px-7 py-4 rounded-xl hover:bg-white/10">
                    Explore Features
                </a>
            </div>

            <div class="grid grid-cols-3 gap-5 mt-12">
                <div>
                    <p class="text-2xl font-bold text-violet-400">Daily</p>
                    <p class="text-gray-500 text-sm mt-1">Sleep logs</p>
                </div>
                <div>
                    <p class="text-2xl font-bold text-violet-400">Simple</p>
                    <p class="text-gray-500 text-sm mt-1">Easy tracking</p>
                </div>
                <div>
                    <p class="text-2xl font-bold text-violet-400">Weekly</p>
                    <p class="text-gray-500 text-sm mt-1">Sleep history</p>
                </div>
            </div>
        </div>

        <!-- SLEEP PREVIEW CARD -->
        <div class="bg-gradient-to-br from-indigo-900 to-slate-900 border border-white/10 rounded-3xl p-7 md:p-9 shadow-2xl">

            <div class="flex justify-between items-center mb-8">
                <div>
                    <p class="text-gray-400 text-sm">SLEEP OVERVIEW</p>
                    <h2 class="text-2xl font-bold mt-2">Your peaceful night</h2>
                </div>
                <span class="text-4xl">🌙</span>
            </div>

            <div class="bg-white/5 rounded-2xl p-6 mb-5">
                <p class="text-gray-400">Total Sleep Duration</p>
                <p class="text-5xl font-bold mt-3">
                    8<span class="text-xl text-gray-400">h</span>
                    00<span class="text-xl text-gray-400">m</span>
                </p>
                <p class="text-green-300 text-sm mt-3">
                    ✓ Example data only
                </p>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="bg-white/5 rounded-2xl p-5">
                    <p class="text-gray-400 text-sm">Bedtime</p>
                    <p class="text-xl font-bold mt-3">10:00 PM</p>
                    <p class="text-2xl mt-3">🌜</p>
                </div>

                <div class="bg-white/5 rounded-2xl p-5">
                    <p class="text-gray-400 text-sm">Wake-up Time</p>
                    <p class="text-xl font-bold mt-3">6:00 AM</p>
                    <p class="text-2xl mt-3">🌅</p>
                </div>
            </div>

            <p class="text-gray-500 text-xs mt-5">
                Sample information — tracking will be added on the Dashboard.
            </p>
        </div>
    </section>

    <!-- FEATURES SECTION -->
    <section id="features" class="bg-slate-900 border-y border-white/5">
        <div class="max-w-7xl mx-auto px-6 py-20">

            <div class="text-center max-w-2xl mx-auto mb-12">
                <p class="text-violet-400 font-bold tracking-widest text-sm">
                    DREAMTRACK FEATURES
                </p>
                <h2 class="text-3xl md:text-4xl font-bold mt-3">
                    Make Every Night Count
                </h2>
                <p class="text-gray-400 mt-4 leading-7">
                    Everything you need to organize your sleep schedule
                    in one simple place.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">

                <div class="bg-slate-800 p-7 rounded-2xl border border-white/5 hover:border-violet-400/50 transition">
                    <div class="text-4xl mb-5">🕒</div>
                    <h3 class="text-xl font-bold mb-3">Sleep Tracking</h3>
                    <p class="text-gray-400 leading-7">
                        Record your bedtime, wake-up time, and total
                        sleep duration.
                    </p>
                </div>

                <div class="bg-slate-800 p-7 rounded-2xl border border-white/5 hover:border-violet-400/50 transition">
                    <div class="text-4xl mb-5">📊</div>
                    <h3 class="text-xl font-bold mb-3">Sleep History</h3>
                    <p class="text-gray-400 leading-7">
                        Review previous sleep records and monitor
                        your schedule over time.
                    </p>
                </div>

                <div class="bg-slate-800 p-7 rounded-2xl border border-white/5 hover:border-violet-400/50 transition">
                    <div class="text-4xl mb-5">🌿</div>
                    <h3 class="text-xl font-bold mb-3">Healthy Habits</h3>
                    <p class="text-gray-400 leading-7">
                        Use daily records to help establish a
                        consistent sleep routine.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- SLEEP TIPS -->
    <section class="max-w-7xl mx-auto px-6 py-20">
        <div class="grid md:grid-cols-2 gap-12 items-center">

            <div>
                <p class="text-violet-400 font-bold tracking-widest text-sm">
                    SLEEP SMARTER
                </p>
                <h2 class="text-3xl md:text-4xl font-bold mt-3 leading-tight">
                    Small Habits.<br>Better Rest.
                </h2>
                <p class="text-gray-400 mt-5 leading-7">
                    A consistent sleep routine can help you organize
                    your day and develop healthier habits.
                </p>
            </div>

            <div class="space-y-4">
                <div class="flex gap-4 bg-white/5 p-5 rounded-xl border border-white/10">
                    <span class="text-3xl">🌙</span>
                    <div>
                        <h3 class="font-bold">Follow a regular schedule</h3>
                        <p class="text-gray-400 text-sm mt-2">
                            Try to sleep and wake up at consistent times.
                        </p>
                    </div>
                </div>

                <div class="flex gap-4 bg-white/5 p-5 rounded-xl border border-white/10">
                    <span class="text-3xl">📵</span>
                    <div>
                        <h3 class="font-bold">Relax before bedtime</h3>
                        <p class="text-gray-400 text-sm mt-2">
                            Make time to wind down before going to sleep.
                        </p>
                    </div>
                </div>

                <div class="flex gap-4 bg-white/5 p-5 rounded-xl border border-white/10">
                    <span class="text-3xl">📝</span>
                    <div>
                        <h3 class="font-bold">Record your sleep</h3>
                        <p class="text-gray-400 text-sm mt-2">
                            Keep track of your schedule each day.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- CALL TO ACTION -->
    <section class="px-6 pb-20">
        <div class="max-w-5xl mx-auto text-center rounded-3xl bg-gradient-to-r from-violet-800 to-indigo-600 p-10 md:p-14">
            <h2 class="text-3xl md:text-4xl font-extrabold">
                Ready to Track Your Sleep?
            </h2>
            <p class="text-violet-100 mt-4 mb-8">
                Start building a better sleep routine with DreamTrack.
            </p>
            <a href="/login"
               class="inline-block bg-white text-indigo-950 px-8 py-4 rounded-xl font-bold hover:bg-gray-100">
                Get Started Today →
            </a>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="border-t border-white/10">
        <div class="max-w-7xl mx-auto px-6 py-7 flex flex-col md:flex-row justify-between gap-3 text-sm text-gray-500">
            <p>© {{ date('Y') }} DreamTrack. All rights reserved.</p>
            <p>Sleep well. Live well. 🌙</p>
        </div>
    </footer>

</body>
</html>
