<div class="mt-8">
    @if ($success)
    <div class="alert alert-success">
        Post has been created successfully
    </div>
    @endif
    <form wire:submit.prevent="create" class="shadow bg-white">
        <div class="block">
            <label class="text-gray-700" for="Post title">Post title</label>
            <input wire:model="title" type="text" name="title" id="title" lass="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Title of the post">
            @error('title') <span class="bg-red-500 text-white">{{ $message }}</span> @enderror
        </div>
        <div class="block">
            <label class="text-gray-700" for="Post body">Post Body</label>
            <textarea name="body" id="body" placeholder="Body of post here..." wire:model="body" lass="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
            @error('body') <span class="bg-red-500 text-white">{{ $message }}</span> @enderror
        </div>
        <div>
            <button class="py-2 px-4 bg-green-500 hover:bg-green-700 text-white font-semibold rounded-lg shadow-md focus:outline-none" type="submit">Publish</button>
        </div>
    </form>
</div>