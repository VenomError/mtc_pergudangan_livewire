<?php

namespace App\Livewire\Product;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Category;
use App\Models\Product;

class Create extends Component
{

    #[Validate('required|min:3')]
    public $name;

    #[Validate('required')]
    public $brand;

    #[Validate('required|numeric')]
    public $price;
    public $stok = 0;

    #[Validate('required', message: 'Select Category')]
    public $category_id = null;
    public $selectedCategory = '';
    public $search = '';

    public $perPage = 5;
    public $pageNumber = 1;


    public function render()
    {
        return view(
            'livewire.product.create',
            [
                'categories' => Category::where('name', 'like', '%' . $this->search . '%')
                    ->latest()
                    ->withCount('products')
                    ->paginate($this->perPage, page: $this->pageNumber),
            ]
        );
    }

    public function resetVar()
    {
        $this->pageNumber = 1;
    }


    public function setCategory_id($id): void
    {
        $this->category_id = $id;
        $category = Category::find($id);
        $this->selectedCategory = $category->name;
    }

    public function next($maxPageNumber)
    {
        if ($this->pageNumber < $maxPageNumber) {
            $this->pageNumber++;
        }
    }
    public function previous()
    {
        if ($this->pageNumber > 1) {
            $this->pageNumber--;
        }
    }

    public function createProduct()
    {
        $this->validate();
        $data = [
            'name' => $this->name,
            'price' => $this->price,
            'brand' => $this->brand,
            'stok' => $this->stok,
            'category_id' => $this->category_id
        ];

        if (Product::create($data)) {
            flash()->option('position', 'bottom-right')
                ->option('timeout', 1000)
                ->success("Create success");
            $this->name = '';
            $this->price = ' ';
            $this->brand = '';
            $this->stok = '';
        } else {
            flash()->option('position', 'bottom-right')
                ->option('timeout', 3000)
                ->error("Create Failed");
        }
    }
}
