<div class='text-white'>
    <div class=" ml-8 mr-8 flex flex-col items-center">
        <div class="flex flex-col items-center w-1/2 h-1/4">
             <div class="mb-4">Copy and paste list of players :</div>
             <textarea wire:model.defer="searchMultipleValue" class="w-full h-36 rounded text-black resize-none" raw='5' placeholder='ROX Smeb joined the room.
rtreutel joined the room.
ROX Kuro joined the room.
ROX PraY joined the room.
ROX GorillA joined the room.' ></textarea>
        </div>
            
        <div class="mt-8">
        <button wire:click="search" type="button" class="inline-flex items-center px-3.5 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Search Comment</button>

        </div>
    </div>
    <div class="mt-8">
        <div class=" ml-8 mr-8 flex flex-col items-center	h-full ">
            <div class="w-full flex flex-col items-center h-full">
            @foreach($comments as $i => $comment)
                <livewire:comment :comment="(array) $comment" :key="$comment->id" :index="$i"></livewire:comment>
            @endforeach
            </div>
        </div>
    </div>
</div>
