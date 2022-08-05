<div>
    <main class="max-w-lg mx-auto pt-10 pb-12 px-4 lg:pb-16">
        <form>
            <div class="space-y-6">
            <div>
                <h1 class="text-xl leading-6 font-medium text-white">Nouvelle partie</h1>
                <p class="mt-1 text-sm text-gray-200">Entrez les noms des 4 participants</p>
            </div>

            <div>
                <label for="pseudo" class="block text-sm font-medium text-gray-200"> Equipe 1 | Joueur 1 : </label>
                <div class="mt-1">
                <input type="text" wire:model="player1" name="pseudo" id="pseudo" class="block w-full shadow-sm focus:ring-sky-500 focus:border-sky-500 sm:text-sm border-gray-300 rounded-md" placeholder="Bastien">
                </div>
            </div>

            <div>
                <label for="pseudo" class="block text-sm font-medium text-gray-200"> Equipe 1 | Joueur 2 : </label>
                <div class="mt-1">
                <input type="text" wire:model="player2" name="pseudo" id="pseudo" class="block w-full shadow-sm focus:ring-sky-500 focus:border-sky-500 sm:text-sm border-gray-300 rounded-md" placeholder="Phillippe">
                </div>
            </div>

            <div>
                <label for="pseudo" class="block text-sm font-medium text-gray-200"> Equipe 2 | Joueur 1 : </label>
                <div class="mt-1">
                <input type="text" wire:model="player3" name="pseudo" id="pseudo" class="block w-full shadow-sm focus:ring-sky-500 focus:border-sky-500 sm:text-sm border-gray-300 rounded-md" placeholder="Benji">
                </div>
            </div>

            <div>
                <label for="pseudo" class="block text-sm font-medium text-gray-200"> Equipe 2 | Joueur 2 : </label>
                <div class="mt-1">
                <input type="text" wire:model="player4" name="pseudo" id="pseudo" class="block w-full shadow-sm focus:ring-sky-500 focus:border-sky-500 sm:text-sm border-gray-300 rounded-md" placeholder="Axel">
                </div>
            </div>

            <div>
                <label for="pseudo" class="block text-sm font-medium text-gray-200"> Nombre de points </label>
                <div class="mt-1">
                <input type="number" wire:model="points" name="pseudo" id="pseudo" class="block w-full shadow-sm focus:ring-sky-500 focus:border-sky-500 sm:text-sm border-gray-300 rounded-md" placeholder="1000">
                </div>
            </div>

            <div>
                <button wire:click="create" type="button" class="inline-flex items-center px-3.5 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Lancer la partie</button>
            </div>

            
        </form>
    </main>
</div>
