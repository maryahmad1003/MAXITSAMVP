<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Layout - MAXIT</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: #f5f5f5;
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #FF7900;
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #e56600;
        }
        
        /* Sidebar styles */
        .sidebar {
            background: #1a1a1a;
            box-shadow: 4px 0 20px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }
        
        .sidebar::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 121, 0, 0.05) 0%, transparent 70%);
            animation: pulse 4s ease-in-out infinite;
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.5; }
            50% { transform: scale(1.1); opacity: 0.8; }
        }
        
        .nav-item {
            position: relative;
            transition: all 0.3s ease;
            border-radius: 12px;
            margin-bottom: 8px;
        }
        
        .nav-item:hover {
            background-color: rgba(255, 121, 0, 0.1);
        }
        
        .nav-item.active {
            background-color: #FF7900;
        }
        
        .nav-item.active .fa-solid,
        .nav-item.active span {
            color: white !important;
        }
        
        .nav-item.active::before {
            content: '';
            position: absolute;
            left: -16px;
            top: 50%;
            transform: translateY(-50%);
            width: 4px;
            height: 70%;
            background-color: #FF7900;
            border-radius: 0 4px 4px 0;
        }
        
        /* Search bar styles */
        .search-bar {
            background: white;
            border: 2px solid #e0e0e0;
            transition: all 0.3s ease;
        }
        
        .search-bar:focus-within {
            border-color: #FF7900;
            box-shadow: 0 0 0 4px rgba(255, 121, 0, 0.1);
        }
        
        /* Button styles */
        .orange-btn {
            background: linear-gradient(135deg, #FF6B00 0%, #FF8C00 100%);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .orange-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }
        
        .orange-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(255, 121, 0, 0.3);
        }
        
        .orange-btn:hover::before {
            left: 100%;
        }
        
        /* Profile image placeholder */
        .profile-img {
            background: linear-gradient(135deg, #f0f0f0 0%, #e0e0e0 100%);
            position: relative;
            overflow: hidden;
        }
        
        .profile-img::before {
            content: '\f007';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            font-size: 1.5rem;
            color: #999;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        
        /* Notification bell animation */
        .notification-bell {
            position: relative;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .notification-bell:hover {
            transform: rotate(-15deg);
        }
        
        .notification-bell::after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 12px;
            height: 12px;
            background-color: #FF3333;
            border-radius: 50%;
            border: 2px solid white;
        }
        
        /* Logo styles */
        .logo-container {
            width: 120px;
            height: 120px;
            background: linear-gradient(135deg, #FF6B00 0%, #FF8C00 100%);
            border-radius: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 30px rgba(255, 121, 0, 0.3);
            margin: 2rem auto;
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
            animation: shine 3s ease-in-out infinite;
        }
        
        @keyframes shine {
            0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
            100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
        }
    </style>
</head>
<body>
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="sidebar w-64 flex flex-col">
            <!-- Logo -->
            <div class="logo-container">
                <span class="text-white text-3xl font-bold relative z-10">MAXIT</span>
            </div>
            
            <!-- Navigation -->
            <nav class="flex-1 px-4 pb-8">
                <a href="/dashboard" class="nav-item flex items-center px-4 py-3 text-gray-300 hover:text-white">
                    <i class="fa-solid fa-house text-xl w-8"></i>
                    <span class="ml-3 text-lg">Accueil</span>
                </a>
                
                <a href="/transactions" class="nav-item flex items-center px-4 py-3 text-gray-300 hover:text-white">
                    <i class="fa-solid fa-share-from-square text-xl w-8"></i>
                    <span class="ml-3 text-lg">Transactions</span>
                </a>
                
                <a href="/accounts" class="nav-item flex items-center px-4 py-3 text-gray-300 hover:text-white">
                    <i class="fa-solid fa-file-invoice-dollar text-xl w-8"></i>
                    <span class="ml-3 text-lg">Comptes</span>
                </a>
                
                <!-- Logout at bottom -->
                <form action="/logout" method="POST" class="mt-auto">
                    <button type="submit" class="nav-item flex items-center px-4 py-3 text-gray-300 hover:text-white w-full">
                        <i class="fa-solid fa-right-from-bracket text-xl w-8"></i>
                        <span class="ml-3 text-lg">Déconnexion</span>
                    </button>
                </form>
            </nav>
        </div>
        
        <!-- Main Content -->
        <div class="flex-1 flex flex-col bg-gray-50">
            <!-- Header -->
            <header class="bg-white shadow-sm px-8 py-4">
                <div class="flex items-center justify-between">
                    <!-- Search Bar -->
                    <div class="flex-1 max-w-xl">
                        <div class="search-bar relative rounded-full px-4 py-2 flex items-center">
                            <i class="fa-solid fa-magnifying-glass text-gray-400 text-lg"></i>
                            <input 
                                type="text" 
                                placeholder="Rechercher..."
                                class="flex-1 ml-3 outline-none bg-transparent text-gray-700 placeholder-gray-400"
                            >
                        </div>
                    </div>
                    
                    <!-- Right Section -->
                    <div class="flex items-center space-x-6 ml-8">
                        <!-- User Type Badge -->
                        <div class="orange-btn px-6 py-2 rounded-full relative">
                            <span class="text-white font-semibold relative z-10">Client</span>
                        </div>
                        
                        <!-- Notifications -->
                        <div class="notification-bell">
                            <i class="fa-solid fa-bell text-2xl text-gray-700"></i>
                        </div>
                        
                        <!-- Profile -->
                        <div class="profile-img w-12 h-12 rounded-full cursor-pointer transition-all hover:ring-4 hover:ring-orange-200"></div>
                    </div>
                </div>
            </header>
            
            <!-- Page Content -->
            <main class="flex-1 p-8 overflow-y-auto">
                <!-- PHP content will be injected here -->
                <?php echo $content; ?>
            </main>
        </div>
    </div>
    
    <script>
        // Add interactivity for layout
        document.addEventListener('DOMContentLoaded', function() {
            // Search bar focus effect
            const searchInput = document.querySelector('.search-bar input');
            if (searchInput) {
                searchInput.addEventListener('focus', function() {
                    this.parentElement.style.width = '100%';
                });
                
                searchInput.addEventListener('blur', function() {
                    if (!this.value) {
                        this.parentElement.style.width = '';
                    }
                });
            }
        });
    </script>
</body>
</html>