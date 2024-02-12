<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use Illuminate\Support\Str;
use App\Models\Task;

class TasksForm extends Form
{
    
    #[Validate('required|min:3')]
    public $title;
    #[Validate('required')]
    public $slug;
    #[Validate('required')]
    public $description;
    #[Validate('required')]
    public $status;
    #[Validate('required')]
    public $priority;
    #[Validate('required')]
    public $deadline;
    #[Validate('required|integer|exists:\App\Models\User,id')]
    public $user_id;

    public function mount(){
        $this->user_id = auth()->user()->id;
    }

    public function updatedTitle($title)
    {
        $this->slug = Str::slug($title);
    }

    public function createTask()
    {
        Task::create($this->all());
    }

}
