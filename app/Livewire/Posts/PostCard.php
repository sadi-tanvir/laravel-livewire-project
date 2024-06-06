<?php

namespace App\Livewire\Posts;

use Livewire\Component;

class PostCard extends Component
{
    public $id;
    public $title;
    public $description;

    public function render()
    {
        return view('livewire.posts.post-card');
    }
}
