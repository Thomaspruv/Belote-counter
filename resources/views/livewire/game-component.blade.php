<div >
    <div class="w-full flex flex-row text-white">
        <div class="w-1/2  grid place-items-center">
            <span class="text-xl">{{ucfirst($game[0]->player1)}} </span>
            <span class="text-xl"> {{ucfirst($game[0]->player2)}}</span>
            @foreach($donnes as $i => $donne)
                <span>{{$donne->equipe1}}</span>
            @endforeach
            <span class="text-lg border-t border-grey-darkest border-solid w-full grid place-items-center " >{{$team1sum}}</span>
        </div>
        <div class="w-1/2  grid place-items-center ">
            <span class="text-xl">{{ucfirst($game[0]->player3)}} </span>
            <span class="text-xl"> {{ucfirst($game[0]->player4)}}</span>
            @foreach($donnes as $i => $donne)
                <span>{{$donne->equipe2}}</span>
            @endforeach
            <span class="text-lg border-t border-grey-darkest border-solid w-full grid place-items-center " >{{$team2sum}}</span>
        </div>
    </div>

    <div class="w-full flex flex-row text-white mt-8">
        <div class="w-1/2  grid place-items-center grid-cols-1 gap-4">
            <div class="w-full grid place-items-center">
                <input type="number" name="email" wire:keyup="calcul(1)" id="score" wire:model="team1NewDonne" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-1/2 sm:text-sm border-gray-300 rounded-md text-black" placeholder="127">
            </div>
            <div class="flex items-center">
                <input id="default-checkbox" type="checkbox" wire:click="prise(1)" wire:model="team1prise" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-checkbox" class="ml-2 text-sm font-medium dark:text-gray-300">Equipe preneuse</label>
            </div>
            <div class="flex items-center">
                <input id="default-checkbox" type="checkbox" wire:click="beloteetre(1)" wire:model="team1Belote" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-checkbox" class="ml-2 text-sm font-medium dark:text-gray-300">Belote et ReBelote</label>
            </div>
            <div class="flex items-center">
                <input id="default-checkbox" type="checkbox" wire:click="capot(1)" wire:model="team1capot" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-checkbox" class="ml-2 text-sm font-medium dark:text-gray-300">Capot</label>
            </div>
        </div>
        <div class="w-1/2  grid place-items-center grid-cols-1 gap-4">
            <div class="w-full grid place-items-center">
                <input type="number" name="email" wire:keyup="calcul(2)" id="score" wire:model="team2NewDonne" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-1/2 sm:text-sm border-gray-300 rounded-md text-black" placeholder="35">
            </div>
            <div class="flex items-center">
                <input id="default-checkbox" type="checkbox" wire:click="prise(2)" wire:model="team2prise" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-checkbox" class="ml-2 text-sm font-medium dark:text-gray-300">Equipe preneuse</label>
            </div>
            <div class="flex items-center">
                <input id="default-checkbox" type="checkbox" wire:click="beloteetre(2)"  wire:model="team2Belote" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-checkbox" class="ml-2 text-sm font-medium dark:text-gray-300">Belote et ReBelote</label>
            </div>
            <div class="flex items-center">
                <input id="default-checkbox" type="checkbox" wire:click="capot(2)" wire:model="team2capot" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-checkbox" class="ml-2 text-sm font-medium dark:text-gray-300">Capot</label>
            </div>
        </div>
    </div>
    <div class="w-full grid place-items-center mt-8">
            <button wire:click="nouvelleDonne" type="button" class="inline-flex items-center px-3.5 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Nouvelle donne</button>
    </div> 
    <div  class="flex felx-col">
        <div class="w-full grid place-items-center mt-8">
            <button wire:click="deleteLast" type="button" class="inline-flex items-center px-3.5 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Supprimer dernière</button>
        </div> 
        <div class="w-full grid place-items-center mt-8">
            <button wire:click="newGame" type="button" class="inline-flex items-center px-3.5 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Nouvelle game</button>
        </div>
    </div>
</div>
