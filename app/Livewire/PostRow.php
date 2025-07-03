<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostRow extends Component
{
    public $post;

    public function archive(Post $post)
    {
        $post->archived();
    }

    public function render()
    {
        return view('livewire.post-row');
    }
}
