<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - MAXIT-ECSA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background-color: #1a1a1a;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            position: relative;
            overflow: hidden;
        }
        
        /* Animated background patterns */
        body::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle at 20% 80%, rgba(255, 121, 0, 0.1) 0%, transparent 50%),
                        radial-gradient(circle at 80% 20%, rgba(255, 121, 0, 0.05) 0%, transparent 50%),
                        radial-gradient(circle at 40% 40%, rgba(255, 140, 0, 0.08) 0%, transparent 50%);
            animation: float 20s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            33% { transform: translate(-10px, -10px) rotate(1deg); }
            66% { transform: translate(10px, -5px) rotate(-1deg); }
        }
        
        .login-container {
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3),
                        0 0 120px rgba(255, 121, 0, 0.1);
            position: relative;
            z-index: 10;
            max-width: 600px;
            width: 100%;
            overflow: hidden;
        }
        
        .orange-accent {
            background: linear-gradient(135deg, #FF6B00 0%, #FF8C00 100%);
            height: 5px;
            width: 100%;
        }
        
        .logo-container {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #FF6B00 0%, #FF8C00 100%);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            box-shadow: 0 10px 30px rgba(255, 121, 0, 0.3);
            position: relative;
            overflow: hidden;
        }
        
        .logo-container::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transform: rotate(45deg);
            animation: shine 2.5s ease-in-out infinite;
        }
        
        @keyframes shine {
            0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
            100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
        }
        
        .input-group {
            position: relative;
            margin-bottom: 1rem;
        }
        
        .input-field {
            width: 100%;
            padding: 0.875rem 1rem 0.875rem 3rem;
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background-color: #f8f8f8;
        }
        
        .input-field:focus {
            outline: none;
            border-color: #FF7900;
            background-color: #ffffff;
            box-shadow: 0 0 0 4px rgba(255, 121, 0, 0.1);
        }
        
        .input-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #666;
            transition: color 0.3s ease;
        }
        
        .input-field:focus + .input-icon {
            color: #FF7900;
        }
        
        .submit-btn {
            width: 100%;
            padding: 0.875rem;
            background: linear-gradient(135deg, #FF6B00 0%, #FF8C00 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .submit-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }
        
        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(255, 121, 0, 0.3);
        }
        
        .submit-btn:hover::before {
            left: 100%;
        }
        
        .submit-btn:active {
            transform: translateY(0);
        }
        
        .link {
            color: #666;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .link:hover {
            color: #FF7900;
        }
        
        .orange-text {
            color: #FF7900;
            font-weight: 600;
        }
        
        .divider {
            display: flex;
            align-items: center;
            margin: 1rem 0;
        }
        
        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background-color: #e0e0e0;
        }
        
        .divider span {
            padding: 0 1rem;
            color: #999;
            font-size: 0.9rem;
        }
        
        /* Floating particles */
        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: #FF7900;
            border-radius: 50%;
            opacity: 0.3;
            animation: floatUp 15s linear infinite;
        }
        
        @keyframes floatUp {
            0% {
                transform: translateY(100vh) translateX(0);
                opacity: 0;
            }
            10% {
                opacity: 0.3;
            }
            90% {
                opacity: 0.3;
            }
            100% {
                transform: translateY(-100vh) translateX(100px);
                opacity: 0;
            }
        }
    </style>
</head>
<body>
    <!-- Floating particles -->
    <div class="particle" style="left: 10%; animation-delay: 0s;"></div>
    <div class="particle" style="left: 20%; animation-delay: 3s;"></div>
    <div class="particle" style="left: 35%; animation-delay: 6s;"></div>
    <div class="particle" style="left: 50%; animation-delay: 9s;"></div>
    <div class="particle" style="left: 65%; animation-delay: 12s;"></div>
    <div class="particle" style="left: 80%; animation-delay: 15s;"></div>
    <div class="particle" style="left: 90%; animation-delay: 18s;"></div>

    <div class="login-container">
        <div class="orange-accent"></div>
        
        <div class="px-12 py-8">
            <!-- Logo -->
            <div class="logo-container">
                <span class="text-white text-xl font-bold relative z-10">MAXIT</span>
            </div>

            <!-- Title -->
            <h1 class="text-2xl font-bold text-center mb-1 text-gray-800">Bienvenue</h1>
            <p class="text-center text-gray-600 mb-5">Connectez-vous à votre compte</p>

            <!-- Form -->
            <form action="/login" method="POST">
                <!-- Login field -->
                <div class="input-group">
                    <input 
                        type="text" 
                        id="login"
                        name="login"
                        class="input-field"
                        placeholder="Numéro de téléphone"
                        required
                    >
                    <svg class="input-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                </div>

                <!-- Password field -->
                <div class="input-group">
                    <input 
                        type="password" 
                        id="password"
                        name="password"
                        class="input-field"
                        placeholder="Mot de passe"
                        required
                    >
                    <svg class="input-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                    </svg>
                </div>

                <!-- Remember me & Forgot password -->
                <div class="flex justify-between items-center mb-4">
                    <label class="flex items-center cursor-pointer">
                        <input type="checkbox" class="mr-2" name="remember">
                        <span class="text-gray-600 text-sm">Se souvenir de moi</span>
                    </label>
                    <a href="/forgot-password" class="link text-sm">Mot de passe oublié?</a>
                </div>

                <!-- Submit button -->
                <button type="submit" class="submit-btn">
                    Se connecter
                </button>
            </form>

            <!-- Divider -->
            <div class="divider">
                <span>OU</span>
            </div>

            <!-- Sign up link -->
            <p class="text-center text-gray-600">
                Pas encore de compte? 
                <a href="/signup" class="orange-text hover:underline">Créer un compte</a>
            </p>
        </div>
    </div>

    
</body>
</html>