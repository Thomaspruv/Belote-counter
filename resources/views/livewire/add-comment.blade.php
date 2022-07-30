<div class='text-white'>
    <div class=" ml-8 mr-8 flex flex-col items-center">
        <div class=' w-fit text-2xl mb-8' >
            Add new COMMENT
         </div>
         <div class="flex flex-row place-content-center mb-8">
             <div class="h-full mr-4 mt-auto mb-auto "><span>Pseudo :</span></div>
             <div><input type="text" class="text-black" wire:model="pseudo"></input></div>
         </div>
         <div class="flex flex-col items-center w-1/2">
             <div class="mb-4">Comment :</div>
             <textarea class="w-full text-black" wire:model="comment"></textarea>
         </div>
         <div class="mt-8">
             <button class='rounded-full bg-blue-400 p-2' wire:click="add"> Add new Comment</button>
         </div>
    </div>
</div>
