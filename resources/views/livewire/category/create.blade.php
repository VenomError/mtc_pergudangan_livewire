<div class="panel">
    <div class="panel-header">
        <h5>Add New Category </h5>
        <div class="clearfix" wire:loading>
            <div class="spinner-border spinner-grow-sm float-end " role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <div class="row g-3">
            <div class="col-12">
                <label class="form-label">Category Name
                    <span class="text-danger">*
                        @error('name')
                        {{ $message }}
                        @enderror
                    </span>
                </label>
                <input type="text" class="form-control form-control-sm" wire:model='name'>
            </div>
            <div class="col-12">
                <label class="form-label">Description</label>
                <textarea rows="5" class="form-control form-control-sm" wire:model='description'></textarea>
            </div>
            <div class="col-12 d-flex justify-content-end">
                <div class="btn-box">
                    <button class="btn btn-sm btn-primary" wire:click='create()' wire:loading.attr='disabled'>Save
                        Category</button>
                </div>
            </div>
        </div>
    </div>
</div>