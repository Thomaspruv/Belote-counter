<div class="flex justify-center items-center flex-col gap-y-1">
   
    <div>
        <button wire:click='load' type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Load</button> 
        <button wire:click='save' type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button> 
    </div>
    <div class='bg-red-400 w-3/4 rounded pt-2 pl-2 pr-2'>
    @foreach($players as $i => $player)
        @if($i < 5)
            <livewire:player-line :player="(array) $player" :key="$player->puuid" :index="$i" :color="$red" :gameId="$this->match->info->gameId" :userId="$player->puuid"/>
        @endif
    @endforeach
    </div>

    <div class='bg-blue-400 w-3/4 rounded pt-2 pl-2 pr-2'>
    @foreach($players as $i => $player)
        @if($i > 4)
            <livewire:player-line :player="(array) $player" :key="$player->puuid" :index="$i" :color="$blue" :gameId="$this->match->info->gameId" :userId="$player->puuid" />
        @endif
    @endforeach
    </div>
</div>
