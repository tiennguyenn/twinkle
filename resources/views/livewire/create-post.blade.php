<div>
<form wire:submit.prevent="store" class="space-y-4">
    <div>
        <label for="title">Title</label>
        <input type="text" id="title" wire:model="title" class="form-input">
        @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>

    <div>
        <label for="content">Content</label>
        <textarea id="content" wire:model="content" class="form-textarea"></textarea>
        <small>Words: <span x-text="$wire.content.split(' ').length"></span></small>
        @error('content') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>

    <button type="submit" class="btn btn-primary mt-2">Create Post</button>
</form>