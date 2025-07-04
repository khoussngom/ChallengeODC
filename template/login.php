<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen bg-gradient-to-br from-orange-100 via-yellow-50 to-orange-200 flex items-center justify-center p-4">


    <div class="w-full  h-full max-w-6xl bg-white rounded-3xl shadow-2xl overflow-hidden">
        <div class="flex min-h-[650px]">
            
            <div class="flex-1 bg-gradient-to-br from-orange-200 via-yellow-100 to-orange-300 flex items-center justify-center p-8 relative">
                
                <img src="/static/login.png" class="" alt="login">
            
            </div>
            
            <div class="flex-1 p-12 flex flex-col justify-center">
                <div class="max-w-md mx-auto w-full">
                    
                    <h1 class="text-4xl font-bold text-gray-800 mb-8">Login</h1>
                    
                    <?php if (!empty($error)): ?>
                        <div class="mb-4 text-red-600 text-center font-semibold">
                            <?= htmlspecialchars($error) ?>
                        </div>
                    <?php endif; ?>
                    
                    <form class="space-y-6" method="POST" action="/login">
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-2">Login</label>
                            <input
                                type="text"
                                name="login"
                                class="w-full px-4 py-3 text-black border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-gray-50"
                                placeholder="Votre login"
                            
                            >
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-2">Password</label>
                            <input 
                                type="password" 
                                name="password"
                                class="w-full  text-black  px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-gray-50"
                                placeholder="Mot de passe"
                            
                            >
                        </div>
                        
                        <div class="text-right">
                            <a href="#" class="text-sm text-blue-600 hover:text-blue-800 transition-colors duration-200">
                                Forgot Password?
                            </a>
                        </div>
                        
                        <button
                            type="submit"
                            class="w-full bg-slate-600 hover:bg-slate-700 text-white font-semibold py-3 px-6 rounded-xl transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl"
                        >
                            Se Connecter
                        </button>
                        
                        <div class="text-center pt-4">
                            <p class="text-sm text-gray-600">
                                Don't have an account yet?
                                <a href="#" class="text-blue-600 hover:text-blue-800 font-medium transition-colors duration-200">
                                    Register for free
                                </a>
                            </p>
                        </div>
                        
                    </form>
                    
                </div>
            </div>
            
        </div>
    </div>

</body>



</html>