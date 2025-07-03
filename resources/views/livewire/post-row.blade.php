<tr @class(['bbb', 'aaa' => $post->is_archived])>
    <td>{{ $post->id }}</td>
    <td>{{ $post->title }}</td>
    <td>{{ str($post->content)->words(2) }}</td>
    <td>
        <button wire:click="archive({{ $post->id }})" class="px-2 py-1 bg-yellow-500 rounded hover:bg-yellow-600">
            Archive
        </button>
        <button wire:click="$parent.delete({{ $post->id }})" wire:confirm="Are you sure?" class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600">
            Delete
        </button>
    </td>
</tr>