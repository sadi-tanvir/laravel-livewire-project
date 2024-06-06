<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Posts extends Component
{
    public $postsData = [
        [
            'id' => 1,
            'title' => 'Javascript',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta cum neque voluptate',
        ],
        [
            'id' => 2,
            'title' => 'PHP',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta cum neque voluptate',
        ],
        [
            'id' => 3,
            'title' => 'Laravel',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta cum neque voluptate',
        ],
    ];

    #[Title("Posts Page")]
    public function render()
    {
        return view('livewire.posts');
    }
}
