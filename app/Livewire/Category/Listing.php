<?php

namespace App\Livewire\Category;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class Listing extends Component
{
    use WithPagination;
    protected $listeners = ['category-created' => 'render'];

    public $count = 0;
    public $perPage = 10;
    public $page = 1;
    public $maxPageNumber;
    public $pageNumber = 1;

    public $search = '';

    public function render()
    {
        $this->count = Category::count();
        $this->maxPageNumber = ceil($this->count / $this->perPage);
        return view(
            'livewire.category.listing',
            [
                'datas' => Category::where('name', 'like', '%' . $this->search . '%')
                    ->latest()
                    ->withCount('products')
                    ->paginate($this->perPage, ['*'], 'category', $this->pageNumber),
                'totalData' => Category::where('name', 'like', '%' . $this->search . '%')
                    ->latest()
                    ->withCount('products')->count()
            ]
        );
    }

    public function resetPage(): void
    {
        $this->page = 1;
        $this->pageNumber = 1;
    }
    public function next($maxPageNumber): void
    {
        if ($this->pageNumber < $maxPageNumber / $this->perPage) {
            $this->pageNumber++;
            $this->page += $this->perPage;
        }
    }
    public function previous()
    {
        if ($this->pageNumber > 1) {
            $this->pageNumber--;
            $this->page -= $this->perPage;
        }
    }

    public function show()
    {
        flash()->option('position', 'bottom-right')
            ->success('tes');
    }

    public function edit($id)
    {

        $category = Category::find($id);
        if (!$category) {
            flash()->option('position', 'bottom-right')
                ->error("Category Not Found");
        }
    }

    public function delete($id)
    {
        $category = Category::find($id);
        if (!$category) {
            flash()->options([
                'position' => 'bottom-right',
                'timeout' => 1000,
            ])->error("Category Not Found");
        }

        if ($category->delete()) {
            flash()->option('position', 'bottom-right')
                ->option('timeout', 1000)
                ->success("Deleted success");
        } else {
            flash()->option('position', 'bottom-right')
                ->error("Delete failed");
        }
    }
}
