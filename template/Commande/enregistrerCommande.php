
    <div id="nouveau-commande" class="container mx-auto px-6 py-4">
        <h1 class="text-3xl font-bold mb-8">Nouveau Commande</h1>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-3">
            <div>
                <label class="block text-sm font-medium mb-1">Client</label>
                <select class="w-full input-field rounded-lg text-gray-300 bg-white px-4 py-3 text-white focus:outline-none">
                    <option>Sélectionner client</option>
                    <option>kHOUSS NGOM</option>
                    <option>ABDOULAYE DIALLO</option>
                    <option>MARIAMA BOUSSO MBAYE</option>
                </select>
            </div>
            
            <div>
                <label class="block text-sm font-medium mb-1">Paiement</label>
                <input type="text" placeholder="Entrer le montant" class="w-full input-field rounded-lg px-4 py-3 text-white focus:outline-none">
            </div>
        </div>
        
        <div class="mb-8">
            <h2 class="text-xl font-semibold mb-2">Ajouter Produit</h2>
            <div class="flex gap-4 mb-6">
                <select class="input-field rounded-lg bg-white text-gray-400 px-4 py-3 text-white focus:outline-none">
                    <option>Sélectionner un produit</option>
                    <option>riz</option>
                    <option>Sucre</option>
                    <option>Lait</option>
                </select>
                <input type="text" placeholder="Saisir le montant" class="input-field rounded-lg px-4 py-3 text-white focus:outline-none">
                <button class="bg-green-500 hover:bg-green-600 text-black font-semibold px-6 py-3 rounded-lg transition-colors green-glow">
                    Ajouter
                </button>
            </div>
        </div>
        
        <div class="glass-effect rounded-lg overflow-hidden mb-6">
            <table class="w-full">
                <thead class="bg-green-900/30">
                    <tr>
                        <th class="text-left p-4 font-medium">Produits</th>
                        <th class="text-center p-4 font-medium">Quantité</th>
                        <th class="text-right p-4 font-medium">Prix</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-row border-b border-green-700/30">
                        <td class="p-4">Sac de riz</td>
                        <td class="p-4 text-center">2</td>
                        <td class="p-4 text-right">40.000 <span class="text-gray-400">fcfa</span></td>
                    </tr>
                    <tr class="table-row border-b border-green-700/30">
                        <td class="p-4">Sucre</td>
                        <td class="p-4 text-center">5</td>
                        <td class="p-4 text-right">200000 <span class="text-gray-400">fcfa</span></td>
                    </tr>
                    <tr class="table-row">
                        <td class="p-4">Lait</td>
                        <td class="p-4 text-center">10</td>
                        <td class="p-4 text-right">1200 <span class="text-gray-400">fcfa</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="flex justify-center  space-x-8 mb-8">
            <button class="pagination-btn text-gray-400 hover:text-white">‹</button>
            <button class="bg-green-600 w-[40px] h-[40px] rounded-full">1</button>
            <button class="pagination-btn text-gray-400 hover:text-white">2</button>
            <button class="pagination-btn text-gray-400 hover:text-white">3</button>
            <button class="pagination-btn text-gray-400 hover:text-white">›</button>
        </div>
        
        <div class="flex justify-between items-center">
            <div class="text-xl font-semibold">
                Total: <span class="text-green-400">61 200 fcfa</span>
            </div>
            <a href="/valider_commande"><button class="bg-green-500 hover:bg-green-600 text-black font-semibold px-8 py-3 rounded-lg transition-colors green-glow">
                Valider commande
            </button></a> 
        </div>
    </div>

