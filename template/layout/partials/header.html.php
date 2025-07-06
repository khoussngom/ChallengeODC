<nav class="glass-effect border-b border-green-700/50 px-6 py-4">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-2">
                <div class="w-6 h-6 bg-green-500 rounded"></div>
                <span class="text-xl font-semibold">KHOUSS ABLAYE</span>
            </div>
            <div class="flex items-center space-x-8">

                <?php if ($role == 'vendeur'): ?>
                    <a href="#" class="nav-item text-gray-300 hover:text-green-400">Dashboard</a>
                    <a href="#" class="nav-item text-gray-300 hover:text-green-400">Clients</a>
                    <a href="#" class="nav-item text-gray-300 hover:text-green-400">Produits</a>
                <?php elseif ($role == 'client'): ?>
                    <a href="#" class="nav-item text-gray-300 hover:text-green-400">Mes Commandes</a>
                <?php endif; ?>

                <a href="<?= APP_URL ?>/lister_commande" class="nav-item text-gray-300 hover:text-green-400">Commandes</a>
                <a href="<?= APP_URL ?>/deconnexion" class="nav-item text-gray-300 hover:text-green-400">Deconnexion</a>

                <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                    <span class="text-black text-sm">KN</span>
                </div>
        </div>
    </nav>