<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - MAXIT-ECSA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(135deg, #FFF5F0 0%, #FFEBE0 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }
        .orange-gradient {
            background: linear-gradient(135deg, #FC7700 0%, #FF8C00 100%);
        }
        .input-field:focus {
            border-color: #FF7900;
            box-shadow: 0 0 0 3px rgba(255, 121, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="max-w-4xl w-full mx-auto bg-white rounded-2xl shadow-2xl p-8 relative">
        <!-- Orange decorative elements -->
        <div class="absolute top-0 right-0 w-32 h-32 opacity-10">
            <svg viewBox="0 0 200 200" class="w-full h-full">
                <circle cx="150" cy="50" r="40" fill="#FF7900"/>
                <circle cx="170" cy="70" r="30" fill="#FF8C00"/>
            </svg>
        </div>
        <div class="absolute bottom-0 left-0 w-24 h-24 opacity-10">
            <svg viewBox="0 0 100 100" class="w-full h-full">
                <rect x="10" y="10" width="30" height="30" fill="#FF7900" transform="rotate(45 25 25)"/>
                <rect x="40" y="40" width="20" height="20" fill="#FF8C00" transform="rotate(45 50 50)"/>
            </svg>
        </div>

        <div class="flex flex-col items-center">
            <!-- Logo -->
            <div class="h-[150px] w-[150px] rounded-3xl mb-8 overflow-hidden shadow-lg">
                <div class="h-full w-full orange-gradient flex items-center justify-center">
                    <span class="text-white text-2xl font-bold">MAXIT</span>
                </div>
            </div>

            <!-- Title -->
            <div class="text-4xl font-bold text-gray-800 mb-10">
                Connexion
            </div>

            <!-- Form -->
            <div class="w-full max-w-2xl">
                <form action="/login" method="POST" class="flex flex-col">
                    <!-- Login field -->
                    <div class="mb-6">
                        <label for="login" class="text-xl text-gray-700 font-semibold block mb-3">Login</label>
                        <input 
                            type="text" 
                            id="login"
                            name="login"
                            class="input-field p-5 h-[60px] w-full bg-[#E8F0F5] rounded-xl outline-none text-gray-700 placeholder-gray-400 transition-all duration-200 hover:bg-gray-100"
                            placeholder="Entrer votre numero de telephone"
                        >
                    </div>

                    <!-- Password field -->
                    <div class="mb-8">
                        <label for="password" class="text-xl text-gray-700 font-semibold block mb-3">Password</label>
                        <input 
                            type="password" 
                            id="password"
                            name="password"
                            class="input-field p-5 h-[60px] w-full bg-[#E8F0F5] rounded-xl outline-none text-gray-700 placeholder-gray-400 transition-all duration-200 hover:bg-gray-100"
                            placeholder="Entrer votre mot de passe"
                        >
                    </div>

                    <!-- Submit button -->
                    <button 
                        type="submit"
                        class="bg-[#FF7900] cursor-pointer p-4 w-[250px] rounded-2xl mx-auto text-xl text-white font-bold transition-all duration-300 hover:bg-[#e56600] hover:shadow-lg transform hover:scale-105 active:scale-95 focus:outline-none focus:ring-4 focus:ring-orange-300"
                    >
                        Se connecter
                    </button>
                </form>

                <!-- Links -->
                <div class="flex flex-col sm:flex-row justify-between mt-8 text-center sm:text-left">
                    <a href="/signup" class="text-lg text-gray-600 hover:text-gray-800 mb-2 sm:mb-0">
                        Vous n'avez pas de compte ? 
                        <span class="text-[#FF7900] font-bold hover:underline">Créer</span>
                    </a>
                    <a href="/forgot-password" class="text-lg text-gray-600 hover:text-gray-800 hover:underline">
                        Mot de passe oublié ?
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Form validation
        document.querySelector('form').addEventListener('submit', function(e) {
            const login = document.getElementById('login').value;
            const password = document.getElementById('password').value;
            
            if (!login || !password) {
                e.preventDefault();
                alert('Veuillez remplir tous les champs');
            }
        });

        // Add visual feedback on input focus
        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('focus', function() {
                this.style.backgroundColor = '#ffffff';
            });
            
            input.addEventListener('blur', function() {
                if (!this.value) {
                    this.style.backgroundColor = '#E8F0F5';
                }
            });
        });
    </script>
</body>
</html>