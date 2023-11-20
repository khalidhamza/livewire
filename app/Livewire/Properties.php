<?php

namespace App\Livewire;

use Livewire\Component;

class Properties extends Component
{
    public string $todo;
    
    public $todos = array(
        'item 1',
        'item 2',
        'item 3',
        'item 4',
    );
    
    public function render()
    {
        return view('livewire.properties');
    }

    public function add()
    {
        if (!empty($this->todo)){
            $this->todos[] = $this->todo;
        }
        $this->reset('todo');
    }
}
