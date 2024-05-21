<?php

namespace App\Livewire;

use Livewire\Component;

class Todo extends Component
{
    public $todos = [], $item;

    public function render()
    {
        return view('livewire.todo');
    }

    public function addTodo(){
        $this->todos[] = $this->item;
        // $this->reset['item']; // %this->item = '';
        $this->item = '';
    }

    public function removeTodo($id){
        // $this->todos[$id] = $this->item;
        // $this->reset['item']; // %this->item = '';
        // $this->item = '';
        unset($this->todos[$id]);
        $this->todos = array_values($this->todos);
    }

}
