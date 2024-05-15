<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="w-full max-w-xs">
        <h1 class="text-2xl font-bold mb-4">Login</h1>

        @if(session('error'))
            <p class="text-red-500 mb-4">{{ session('error') }}</p>
        @endif

        <form action="{{ route('login') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username:</label>
                <input type="text" id="username" name="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
                <div class="relative">
                    <input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                    <span class="absolute inset-y-0 right-0 flex items-center pr-3">
                        <svg id="password-toggle" class="h-6 w-6 text-gray-700 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path id="eye-open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.68 8c-.59 0-1.17.23-1.59.64l-1.69 1.7-1.69-1.7A2.25 2.25 0 0 0 8.32 8a2.25 2.25 0 0 0-1.69.77 2.25 2.25 0 0 0 0 3.18c.42.42 1 .64 1.59.64s1.17-.22 1.59-.64l1.69-1.7 1.69 1.7c.42.42 1 .64 1.59.64s1.17-.22 1.59-.64a2.25 2.25 0 0 0 0-3.18A2.25 2.25 0 0 0 15.68 8zm-3.37 4c-.39 0-.78-.15-1.06-.44a1.5 1.5 0 0 1 0-2.12c.28-.29.67-.44 1.06-.44s.78.15 1.06.44a1.5 1.5 0 0 1 0 2.12c-.28.29-.67.44-1.06.44z"></path>
                            <path id="eye-closed" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.868 9.117A4.963 4.963 0 0 0 9 8c0-.345.034-.683.1-1.012m1.818-.902A6.007 6.007 0 0 1 12 8c0 .541-.07 1.065-.195 1.566m1.872 1.413A7.982 7.982 0 0 0 15 8c0-.226-.03-.447-.086-.663m-1.763-.799l.003-.003m-.003.003l-3.535 3.536m0 0A9.979 9.979 0 0 0 8 17c1.667 0 3.21-.405 4.547-1.103m-7.074-1.82L6 12l1.464-1.464M9 12a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
                        </svg>
                    </span>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Login</button>
            </div>
        </form>
    </div>
    <script>
        const passwordInput = document.getElementById('password');
        const passwordToggle = document.getElementById('password-toggle');
        const eyeOpen = document.getElementById('eye-open');
        const eyeClosed = document.getElementById('eye-closed');

        passwordToggle.addEventListener('click', () => {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeOpen.style.display = 'none';
                eyeClosed.style.display = 'block';
            } else {
                passwordInput.type = 'password';
                eyeOpen.style.display = 'block';
                eyeClosed.style.display = 'none';
            }
        });
    </script>
</body>
</html>
