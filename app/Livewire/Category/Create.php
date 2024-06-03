<?php

namespace App\Livewire\Category;

use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Validate;

class Create extends Component
{
    #[Validate('required|min:3')]
    public $name;

    public $description;
    public function render()
    {
        return view('livewire.category.create');
    }

    public function create()
    {
        $this->validate();
        $data = [
            'name' => $this->name,
            'description' => $this->description
        ];
        if (!Category::create($data)) {
            flash()->option('position', 'bottom-right')->error('Failed new Category');
        }
        flash()->option('position', 'bottom-right')->success('Created Success');

        $this->name = '';
        $this->description = '';
        $this->dispatch('category-created');
    }
}
