<div class='text-white '>
    <div class=" ml-8 mr-8 flex flex-col items-center	h-full ">
         <div class=' flex flex-row mb-8' >
            <div>
               <input type="text" wire:model.defer="searchValue" name="email" id="email" class="text-black shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Faker">
            </div>
            <div class="ml-4">
               <button wire:click="search" type="button" class="inline-flex items-center px-3.5 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Search</button>
            </div>
        
         </div>
         <div class="w-full flex flex-col items-center h-full gap-y-1">
            @foreach($comments as $i => $comment)
                <livewire:comment :comment="(array) $comment" :key="$comment->id" :index="$i"></livewire:comment>
            @endforeach
         </div>
    </div>
</div>
