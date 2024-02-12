<?php

namespace App\Livewire\Tasks;
use App\Models\Task;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;

#[Layout('layouts.app')]
class TasksIndex extends Component
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
    

    public function mount()
    {
        $this->user_id = auth()->user()->id;
    }

    public function updatedTitle($title)
    {
        $this->slug = Str::slug($title);
    }

    public function save()
    {
        $validated = $this->validate();

        Task::create($validated);
        $this->reset(); 
        session()->flash('success', 'Dados registrado.');
    }

    

    public function render()
    {
        return view('livewire.tasks.tasks-index');
    }
}
