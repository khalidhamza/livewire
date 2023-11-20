<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Livewire\Component;

class Actions extends Component
{
    public int $counter = 1;
    
    public function render()
    {
        return view('livewire.actions');
    }

    public function increment()
    {
        $this->counter++;
    }

    public function decrement()
    {
        $this->counter--;
    }
    
    // Form
    public string $message;
    
    #[Rule('required|email')]
    public string $title;
    
    public string $content;
    
    public function save()
    {
        $this->validate();
        if(!empty($this->title) && !empty($this->content))
        {
            $this->message = "The title {$this->title} and the content {$this->content}";
        }
    }

    // get data from return
    public function getTestData()
    {
        return 'Khalid';
    }
    
}
