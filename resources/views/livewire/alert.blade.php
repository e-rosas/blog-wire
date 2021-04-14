<div>
    <div class="bg-red-600 bg-opacity-75 text-white font-semibold">
        {{ $message }}
    </div>
    <div class="bg-white rounded shadow m-3">
        <label class="font-semibold m-1" for="alert">Alert: </label>
        <input name="alert" wire:model.lazy="message" type="text" class="w-24 md:w-auto focus:outline-none focus:ring focus:border-blue-300">
    </div>
    <div class="m-5 bg-white py-12">
        <button wire:click="toggleLike()" class="py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-md focus:outline-none">Like</button>
        <i class="fa fa-heart text-red-500 {{ $liked ? 'text-opacity-25' : '' }} h4"></i>
    </div>
</div>