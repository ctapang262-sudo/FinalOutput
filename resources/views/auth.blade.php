
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register | DreamTrack</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-slate-950 text-white">

    <nav class="border-b border-white/10 px-6 py-5">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="/" class="text-2xl font-bold">
                🌙 Dream<span class="text-violet-400">Track</span>
            </a>
            <a href="/" class="text-gray-400 hover:text-violet-400">
                ← Home
            </a>
        </div>
    </nav>

    <main class="min-h-[85vh] flex items-center justify-center px-5 py-12">
        <div class="w-full max-w-5xl grid md:grid-cols-2 rounded-3xl overflow-hidden border border-white/10 bg-slate-900 shadow-2xl">

            <!-- LEFT SIDE -->
            <div class="hidden md:flex flex-col justify-between p-12 bg-gradient-to-br from-indigo-950 via-slate-900 to-violet-950">
                <div>
                    <p class="text-violet-300 text-sm font-bold tracking-widest">
                        YOUR SLEEP JOURNEY
                    </p>

                    <h1 class="text-4xl font-extrabold leading-tight mt-6">
                        Better nights.<br>
                        <span class="text-violet-400">Brighter days.</span>
                    </h1>

                    <p class="text-gray-400 leading-7 mt-5">
                        Keep your sleep schedule organized.
                        Record your bedtime, monitor your sleep duration,
                        and build healthier habits with DreamTrack.
                    </p>
                </div>

                <div class="mt-12 bg-white/5 border border-white/10 rounded-2xl p-6">
                    <p class="text-5xl mb-4">🌙 💤</p>
                    <h2 class="font-bold text-xl">Rest easy, every night.</h2>
                    <p class="text-gray-400 text-sm mt-2">
                        Your sleep records, all in one place.
                    </p>
                </div>
            </div>

            <!-- RIGHT SIDE -->
            <div class="p-7 sm:p-10 md:p-12">

                <!-- SWITCH BUTTONS -->
                <div class="flex rounded-xl bg-slate-800 p-1 mb-8">
                    <button type="button" id="loginTab"
                        onclick="showForm('login')"
                        class="w-1/2 py-3 rounded-lg bg-violet-500 text-white font-bold">
                        Login
                    </button>

                    <button type="button" id="registerTab"
                        onclick="showForm('register')"
                        class="w-1/2 py-3 rounded-lg text-gray-400 font-bold">
                        Register
                    </button>
                </div>

                @if ($errors->any())
                    <div class="mb-5 p-4 rounded-xl bg-red-500/10 border border-red-400/30 text-red-300 text-sm">
                        <ul class="list-disc pl-5 space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <p class="mb-5 text-green-300">
                        {{ session('success') }}
                    </p>
                @endif

                <!-- LOGIN FORM -->
                <div id="loginForm">
                    <h2 class="text-3xl font-extrabold">Welcome back!</h2>
                    <p class="text-gray-400 mt-2 mb-7">
                        Sign in to continue tracking your sleep.
                    </p>

                    <form action="{{ route('login.submit') }}" method="POST" class="space-y-5">
                        @csrf

                        <div>
                            <label for="loginEmail" class="block text-sm text-gray-300 mb-2">
                                Email Address
                            </label>
                            <input id="loginEmail" type="email" name="email"
                                value="{{ old('email') }}"
                                autocomplete="email" required
                                placeholder="you@example.com"
                                class="w-full rounded-xl bg-slate-800 border border-white/10 px-4 py-3.5 outline-none focus:border-violet-400">
                        </div>

                        <div>
                            <label for="loginPassword" class="block text-sm text-gray-300 mb-2">
                                Password
                            </label>
                            <input id="loginPassword" type="password" name="password"
                                autocomplete="current-password" required
                                placeholder="Enter your password"
                                class="w-full rounded-xl bg-slate-800 border border-white/10 px-4 py-3.5 outline-none focus:border-violet-400">
                        </div>

                        <button type="submit"
                            class="w-full rounded-xl bg-violet-500 py-3.5 font-bold hover:bg-violet-400 transition">
                            Login to DreamTrack →
                        </button>
                    </form>

                    <p class="text-center text-gray-400 text-sm mt-7">
                        Don't have an account?
                        <button type="button" onclick="showForm('register')"
                            class="text-violet-400 font-bold hover:text-violet-300">
                            Register
                        </button>
                    </p>
                </div>

                <!-- REGISTER FORM -->
                <div id="registerForm" class="hidden">
                    <h2 class="text-3xl font-extrabold">Create account</h2>
                    <p class="text-gray-400 mt-2 mb-7">
                        Start your journey to better sleep.
                    </p>

                    <form action="{{ route('register.submit') }}" method="POST" class="space-y-4">
                        @csrf

                        <div>
                            <label for="registerName" class="block text-sm text-gray-300 mb-2">
                                Full Name
                            </label>
                            <input id="registerName" type="text" name="name"
                                value="{{ old('name') }}"
                                autocomplete="name" required
                                placeholder="Enter your name"
                                class="w-full rounded-xl bg-slate-800 border border-white/10 px-4 py-3.5 outline-none focus:border-violet-400">
                        </div>

                        <div>
                            <label for="registerEmail" class="block text-sm text-gray-300 mb-2">
                                Email Address
                            </label>
                            <input id="registerEmail" type="email" name="email"
                                value="{{ old('email') }}"
                                autocomplete="email" required
                                placeholder="you@example.com"
                                class="w-full rounded-xl bg-slate-800 border border-white/10 px-4 py-3.5 outline-none focus:border-violet-400">
                        </div>

                        <div>
                            <label for="registerPassword" class="block text-sm text-gray-300 mb-2">
                                Password (minimum 8 characters)
                            </label>
                            <input id="registerPassword" type="password" name="password"
                                autocomplete="new-password" minlength="8" required
                                placeholder="Create a password"
                                class="w-full rounded-xl bg-slate-800 border border-white/10 px-4 py-3.5 outline-none focus:border-violet-400">
                        </div>

                        <div>
                            <label for="confirmPassword" class="block text-sm text-gray-300 mb-2">
                                Confirm Password
                            </label>
                            <input id="confirmPassword" type="password"
                                name="password_confirmation"
                                autocomplete="new-password" minlength="8" required
                                placeholder="Repeat your password"
                                class="w-full rounded-xl bg-slate-800 border border-white/10 px-4 py-3.5 outline-none focus:border-violet-400">
                        </div>

                        <button type="submit"
                            class="w-full rounded-xl bg-violet-500 py-3.5 font-bold hover:bg-violet-400 transition">
                            Create My Account →
                        </button>
                    </form>

                    <p class="text-center text-gray-400 text-sm mt-6">
                        Already have an account?
                        <button type="button" onclick="showForm('login')"
                            class="text-violet-400 font-bold hover:text-violet-300">
                            Login
                        </button>
                    </p>
                </div>

                <p class="text-center text-gray-600 text-xs mt-8">
                    © {{ date('Y') }} DreamTrack
                </p>
            </div>
        </div>
    </main>

    <script>
        function showForm(form) {
            const loginForm = document.getElementById('loginForm');
            const registerForm = document.getElementById('registerForm');
            const loginTab = document.getElementById('loginTab');
            const registerTab = document.getElementById('registerTab');

            loginForm.classList.toggle('hidden', form !== 'login');
            registerForm.classList.toggle('hidden', form !== 'register');

            loginTab.className = form === 'login'
                ? 'w-1/2 py-3 rounded-lg bg-violet-500 text-white font-bold'
                : 'w-1/2 py-3 rounded-lg text-gray-400 font-bold';

            registerTab.className = form === 'register'
                ? 'w-1/2 py-3 rounded-lg bg-violet-500 text-white font-bold'
                : 'w-1/2 py-3 rounded-lg text-gray-400 font-bold';
        }

        @if ($errors->has('name') || $errors->has('password_confirmation'))
            showForm('register');
        @endif
    </script>

</body>
</html>
