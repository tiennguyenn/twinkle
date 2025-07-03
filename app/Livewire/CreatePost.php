<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
use App\Models\Post;

class CreatePost extends Component
{
    public $title;

    public $content;

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        // Create a new post
        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        // Redirect to the posts list
        return $this->redirect(route('posts.index'));
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
