<div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <livewire:post-row :key="$post->id" :post="$post" />
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('posts.create') }}" wire:click.prevent="create" class="mt-4 inline-block px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
        Create New Post
    </a>
</div>