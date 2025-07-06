<div class="h-full flex flex-col p-4">

    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Liste des Commandes</h1>
        <button class="bg-green-500 hover:bg-green-600 text-black font-semibold px-4 py-2 rounded-lg transition-colors duration-300 text-sm transform hover:-translate-y-0.5">
            <!-- <a href="/ajouter_commande">+ Nouvelle Commande</a>   -->
            <a href="<?= APP_URL ?>/ajouter_commande" class="nav-item text-gray-300 hover:text-green-400">Nouvelle Commande</a>
        </button>
    </div>

    <div class="flex gap-3 mb-4">
        <select class="bg-white/10 backdrop-blur-sm border border-green-500/30 rounded-lg px-3 py-2 text-sm text-white focus:border-green-500 focus:outline-none">
            <option>Filter par statut</option>
            <option>Payé</option>
            <option>Impayé</option>
            <option>En cours</option>
        </select>

        <select class="bg-white/10 backdrop-blur-sm border border-green-500/30 rounded-lg px-3 py-2 text-sm text-white focus:border-green-500 focus:outline-none">
            <option>Filter par client</option>
            <option>KHOUSS NGOM</option>
            <option>ABDOULAYE DIALLO</option>
            <option>MARIAMA BOUSSO MBAYE</option>
            <option>BAKARY DIASSY</option>
            <option>ALI DIOP</option>
        </select>

        <select class="bg-white/10 backdrop-blur-sm border border-green-500/30 rounded-lg px-3 py-2 text-sm text-white focus:border-green-500 focus:outline-none">
            <option>Filter par date</option>
            <option>Aujourd'hui</option>
            <option>Cette semaine</option>
            <option>Ce mois</option>
        </select>
    </div>

    <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-lg overflow-hidden mb-4 flex-1">
        <table class="w-full text-left text-sm">
            <thead>
                <tr class="bg-green-900/50">
                    <th class="p-3 font-medium text-sm">Numéro</th>
                    <th class="p-3 font-medium text-sm">Client</th>
                    <th class="p-3 font-medium text-sm">Date</th>
                    <th class="p-3 font-medium text-sm">Statut</th>
                    <th class="p-3 font-medium text-sm">Montant</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($commandes)): ?>
                <?php foreach ($commandes as $commande): ?>
                <tr class="border-b border-green-700/30 hover:bg-green-500/10 transition-colors duration-300">
                    <td class="p-3 font-semibold text-sm">#
                        <?= htmlspecialchars($commande['numero']) ?>
                    </td>
                    <td class="p-3 text-sm">
                        <?= htmlspecialchars($commande['client']) ?>
                    </td>
                    <td class="p-3 text-gray-300 text-sm">
                        <?= date('d/m/Y', strtotime($commande['date'])) ?>
                    </td>
                    <td class="p-3 text-center">
                        <?php if ($commande['statut'] === 'Payé'): ?>
                        <span class="px-2 py-1 rounded-full text-xs font-medium bg-green-500/20 text-green-400">Payé</span>
                        <?php elseif ($commande['statut'] === 'Impayé'): ?>
                        <span class="px-2 py-1 rounded-full text-xs font-medium bg-red-500/20 text-red-400">Impayé</span>
                        <?php else: ?>
                        <span class="px-2 py-1 rounded-full text-xs font-medium bg-yellow-500/20 text-yellow-400"><?= htmlspecialchars($commande['statut']) ?></span>
                        <?php endif; ?>
                    </td>
                    <td class="p-3 text-right font-semibold text-sm">
                        <?= number_format($commande['montant'], 0, ',', ' ') ?> <span class="text-gray-400">fcfa</span></td>
                </tr>
                <?php endforeach; ?>
                <?php else: ?>
                <tr>
                    <td colspan="5" class="p-3 text-center text-gray-400">Aucune commande trouvée.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>


    <div class="flex justify-between items-center">

        <div class="flex items-center space-x-2">
            <button class="w-8 h-8 rounded-full flex items-center justify-center text-gray-400 hover:text-white hover:bg-green-500/20 transition-all duration-300 text-sm">‹</button>
            <button class="w-8 h-8 rounded-full flex items-center justify-center bg-green-500 text-black font-medium text-sm">1</button>
            <button class="w-8 h-8 rounded-full flex items-center justify-center text-gray-400 hover:text-white hover:bg-green-500/20 transition-all duration-300 text-sm">2</button>
            <button class="w-8 h-8 rounded-full flex items-center justify-center text-gray-400 hover:text-white hover:bg-green-500/20 transition-all duration-300 text-sm">3</button>
            <button class="w-8 h-8 rounded-full flex items-center justify-center text-gray-400 hover:text-white hover:bg-green-500/20 transition-all duration-300 text-sm">›</button>
        </div>


        <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-lg p-3">
            <div class="flex items-center space-x-6 text-sm">
                <div class="text-center">
                    <div class="font-bold text-green-400">7</div>
                    <div class="text-gray-300 text-xs">Total</div>
                </div>
                <div class="text-center">
                    <div class="font-bold text-green-400">4</div>
                    <div class="text-gray-300 text-xs">Payées</div>
                </div>
                <div class="text-center">
                    <div class="font-bold text-red-400">2</div>
                    <div class="text-gray-300 text-xs">Impayées</div>
                </div>
                <div class="text-center">
                    <div class="font-bold text-green-400">313k</div>
                    <div class="text-gray-300 text-xs">Total fcfa</div>
                </div>
            </div>
        </div>
    </div>
</div>