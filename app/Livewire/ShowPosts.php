<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class ShowPosts extends Component
{
    public function create()
    {
        // Redirect to the create post page
        return $this->redirect(route('posts.create'), ['navigate' => true]);
    }

    public function delete(Post $post)
    {
        $post->delete();
    }

    public function render()
    {
        return view('livewire.show-posts', [
            'posts' => Post::all()
        ]);
    }
}
