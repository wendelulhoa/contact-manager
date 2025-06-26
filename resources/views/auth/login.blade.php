
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#22C55E',
                        secondary: '#86EFAC'
                    },
                    borderRadius: {
                        'none': '0px',
                        'sm': '4px',
                        DEFAULT: '8px',
                        'md': '12px',
                        'lg': '16px',
                        'xl': '20px',
                        '2xl': '24px',
                        '3xl': '32px',
                        'full': '9999px',
                        'button': '8px'
                    }
                }
            }
        }
    </script>
    <style>
        :where([class^="ri-"])::before {
            content: "\f3c2";
        }

        .form-input:focus {
            box-shadow: 0 0 0 2px rgba(79, 70, 229, 0.2);
            border-color: #4F46E5;
        }

        .form-input:focus+.input-icon {
            color: #4F46E5;
        }

        /* Remove arrows from number input */
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-green-50 to-emerald-50 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <div class="bg-white/80 backdrop-blur-sm rounded-lg shadow-lg p-8 border border-green-100">
            <!-- Logo -->
            <div class="text-center mb-8">
                <h1 class="font-['Pacifico'] text-3xl text-primary">alfasoft</h1>
            </div>
            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">E-mail</label>
                    <div class="relative">
                        <input type="email" id="email" name="email"
                            class=" w-full py-3 px-4 pl-11 border border-gray-300 rounded focus:outline-none transition-all duration-200"
                            placeholder="e-mail" required>
                        <div
                            class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 w-5 h-5 flex items-center justify-center">
                            <i class="ri-mail-line"></i>
                        </div>
                    </div>
                    @error('email')
                        <p id="emailError" class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <div class="flex justify-between mb-1">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    </div>
                    <div class="relative">
                        <input type="password" id="password" name="password"
                            class="form-input w-full py-3 px-4 pl-11 border border-gray-300 rounded focus:outline-none transition-all duration-200"
                            placeholder="Password" required>
                        <div
                            class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 w-5 h-5 flex items-center justify-center">
                            <i class="ri-lock-line"></i>
                        </div>
                        <button type="button" id="togglePassword"
                            class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600 w-5 h-5 flex items-center justify-center !rounded-button whitespace-nowrap">
                            <i class="ri-eye-line"></i>
                        </button>
                    </div>
                    <div id="passwordStrength" class="mt-1 h-1 rounded-full overflow-hidden hidden">
                        <div id="passwordStrengthBar" class="h-full w-0 transition-all duration-300"></div>
                    </div>
                    @error('password')
                        <p id="passwordError" class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit"
                    class="w-full bg-primary hover:bg-primary/90 text-white py-3 px-4 rounded !rounded-button transition-all duration-200 font-medium whitespace-nowrap">
                    LOG IN
                </button>
            </form>

            <div class="mt-8 pt-6 border-t border-gray-100 text-center">
                <p class="text-gray-600 text-sm"> Don't have an account? <a href="{{ route('register') }}" class="text-primary font-medium hover:text-primary/80">register</a></p>
            </div>
        </div>
        <div class="mt-8 text-center text-sm text-gray-500">
            <p>© 2025 alfasoft. all rights reserved.</p>
        </div>
    </div>
</body>

</html>
