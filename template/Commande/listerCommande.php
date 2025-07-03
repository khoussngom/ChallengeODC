<!-- <!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Liste des Commandes</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .nav-item {
            transition: all 0.3s ease;
        }
        
        .nav-item:hover {
            transform: translateY(-2px);
        }
        
        .table-row {
            transition: all 0.3s ease;
        }
        
        .table-row:hover {
            background: rgba(34, 197, 94, 0.1);
        }
        
        .status-badge {
            padding: 0.125rem 0.5rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 500;
        }
        
        .status-paye {
            background: rgba(34, 197, 94, 0.2);
            color: #22c55e;
        }
        
        .status-impaye {
            background: rgba(239, 68, 68, 0.2);
            color: #ef4444;
        }
        
        .status-en-cours {
            background: rgba(251, 191, 36, 0.2);
            color: #fbbf24;
        }
        
        .filter-select {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(34, 197, 94, 0.3);
            color: white;
        }
        
        .filter-select:focus {
            border-color: #22c55e;
            outline: none;
        }
        
        .voir-btn {
            background: #22c55e;
            color: #000;
            padding: 0.25rem 0.75rem;
            border-radius: 0.375rem;
            font-weight: 600;
            font-size: 0.875rem;
            transition: all 0.3s ease;
        }
        
        .voir-btn:hover {
            background: #16a34a;
            transform: translateY(-1px);
        }
        
        .pagination-btn {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            font-size: 0.875rem;
        }
        
        .pagination-btn:hover {
            background: rgba(34, 197, 94, 0.2);
        }
        
        .pagination-active {
            background: #22c55e;
            color: #000;
        }
    </style>
</head>

<body class="h-screen bg-green-900 text-white overflow-hidden"> -->



<div class="h-full flex flex-col p-4">
    <!-- Header -->
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Liste des Commandes</h1>
        <button class="bg-green-500 hover:bg-green-600 text-black font-semibold px-4 py-2 rounded-lg transition-colors text-sm">
                <a href="/ajouter_commande">+ Nouvelle Commande</a>  
            </button>
    </div>

    <!-- Filtres -->
    <div class="flex gap-3 mb-4">
        <select class="filter-select rounded-lg px-3 py-2 text-sm">
                <option>Filter par statut</option>
                <option>Payé</option>
                <option>Impayé</option>
                <option>En cours</option>
            </select>

        <select class="filter-select rounded-lg px-3 py-2 text-sm">
                <option>Filter par client</option>
                <option>KHOUSS NGOM</option>
                <option>ABDOULAYE DIALLO</option>
                <option>MARIAMA BOUSSO MBAYE</option>
                <option>BAKARY DIASSY</option>
                <option>ALI DIOP</option>
            </select>

        <select class="filter-select rounded-lg px-3 py-2 text-sm">
                <option>Filter par date</option>
                <option>Aujourd'hui</option>
                <option>Cette semaine</option>
                <option>Ce mois</option>
            </select>
    </div>

    <!-- Tableau des commandes -->
    <div class="glass-effect rounded-lg overflow-hidden mb-4 flex-1">
        <table class="w-full h-full">
            <thead class="bg-green-900/50">
                <tr>
                    <th class="text-left p-3 font-medium text-sm">Numéro</th>
                    <th class="text-left p-3 font-medium text-sm">Client</th>
                    <th class="text-left p-3 font-medium text-sm">Date</th>
                    <th class="text-center p-3 font-medium text-sm">Statut</th>
                    <th class="text-right p-3 font-medium text-sm">Montant</th>
                    <th class="text-center p-3 font-medium text-sm">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- <tr class="table-row border-b border-green-700/30">
                        <td class="p-3 font-semibold text-sm">#1</td>
                        <td class="p-3 text-sm">Khouss Ngom</td>
                        <td class="p-3 text-gray-300 text-sm">03/07/2025</td>
                        <td class="p-3 text-center">
                            <span class="status-badge status-paye">Payé</span>
                        </td>
                        <td class="p-3 text-right font-semibold text-sm">45 000 <span class="text-gray-400">fcfa</span></td>
                        <td class="p-3 text-center">
                            <button class="voir-btn">Voir</button>
                        </td>
                    </tr> -->
                <!-- <tr class="table-row border-b border-green-700/30">
                        <td class="p-3 font-semibold text-sm">#COM_002</td>
                        <td class="p-3 text-sm">ANONYME</td>
                        <td class="p-3 text-gray-300 text-sm">02/07/2025</td>
                        <td class="p-3 text-center">
                            <span class="status-badge status-impaye">Impayé</span>
                        </td>
                        <td class="p-3 text-right font-semibold text-sm">32 500 <span class="text-gray-400">fcfa</span></td>
                        <td class="p-3 text-center">
                            <button class="voir-btn">Voir</button>
                        </td>
                    </tr> -->
                <!-- <tr class="table-row border-b  border-green-700/30">
                        <td class="p-3 font-semibold text-sm">#COM_003</td>
                        <td class="p-3 text-sm">ALI DIOP</td>
                        <td class="p-3 text-gray-300 text-sm">02/07/2025</td>
                        <td class="p-3 text-center">
                            <span class="status-badge status-paye">Payé</span>
                        </td>
                        <td class="p-3 text-right font-semibold text-sm">61 200 <span class="text-gray-400">fcfa</span></td>
                        <td class="p-3 text-center">
                            <button class="voir-btn">Voir</button>
                        </td>
                    </tr>
                    <tr class="table-row border-b  border-green-700/30">
                        <td class="p-3 font-semibold text-sm">#COM_004</td>
                        <td class="p-3 text-sm">KHOUSS NGOM</td>
                        <td class="p-3 text-gray-300 text-sm">01/07/2025</td>
                        <td class="p-3 text-center">
                            <span class="status-badge status-en-cours">En cours</span>
                        </td>
                        <td class="p-3 text-right font-semibold text-sm">28 750 <span class="text-gray-400">fcfa</span></td>
                        <td class="p-3 text-center">
                            <button class="voir-btn">Voir</button>
                        </td>
                    </tr> -->
            </tbody>
        </table>
    </div>

    <!-- Bottom section -->
    <div class="flex justify-between items-center">
        <!-- Pagination -->
        <div class="flex items-center space-x-2">
            <button class="pagination-btn text-gray-400 hover:text-white">‹</button>
            <button class="pagination-btn pagination-active">1</button>
            <button class="pagination-btn text-gray-400 hover:text-white">2</button>
            <button class="pagination-btn text-gray-400 hover:text-white">3</button>
            <button class="pagination-btn text-gray-400 hover:text-white">›</button>
        </div>

        <!-- Résumé compact -->
        <div class="glass-effect rounded-lg p-3">
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
<!-- </body>

</html> -->