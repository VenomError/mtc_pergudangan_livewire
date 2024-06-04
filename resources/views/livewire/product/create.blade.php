<div class="row g-4">
    {{-- @dd($categories) --}}
    <div class="col-xxl-9 col-lg-8">
        <div class="panel mb-25">
            <div class="panel-body product-title-input">
                <div class="form-goup mb-3 ">
                    <label class="form-label">Product Name
                        @error('name')
                        <code class="text-danger">*{{$message }}</code>
                        @enderror
                    </label>
                    <input type="text" class="form-control" placeholder="Product Name" wire:model='name'>
                </div>
                <div class="form-goup ">

                    <label class="form-label">Product Brand
                        @error('brand')
                        <code class="text-danger">*{{$message }}</code>
                        @enderror
                    </label>
                    <input type="text" class="form-control" placeholder="Product Brand" wire:model='brand'>
                </div>
            </div>
        </div>
        {{-- <div class="panel mb-25">
            <div class="panel-header">
                <h5>Product Description</h5>
                <div class="btn-box d-flex gap-2">
                    <button class="btn btn-sm btn-icon btn-outline-primary"><i
                            class="fa-light fa-arrows-rotate"></i></button>
                    <button class="btn btn-sm btn-icon btn-outline-primary panel-close"><i
                            class="fa-light fa-angle-up"></i></button>
                </div>
            </div>
            <div class="panel-body">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                        style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Description</label>
                </div>
            </div>
        </div> --}}
        <div class="panel mb-25">
            <div class="panel-header">
                <h5>Product Data</h5>
                <div class="panel-header-right">
                    {{-- <div class="form-check d-flex gap-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="generalProductData">
                            <label class="form-check-label" for="generalProductData">
                                General
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="DownloadableProductData">
                            <label class="form-check-label" for="DownloadableProductData">
                                Downloadable
                            </label>
                        </div>
                    </div> --}}
                </div>
                <div class="btn-box d-flex gap-2">
                    <button class="btn btn-sm btn-icon btn-outline-primary"><i
                            class="fa-light fa-arrows-rotate"></i></button>
                    <button class="btn btn-sm btn-icon btn-outline-primary panel-close"><i
                            class="fa-light fa-angle-up"></i></button>
                </div>
            </div>
            <div class="panel-body">
                <nav>
                    <div class="btn-box d-flex flex-wrap gap-1 mb-25" id="nav-tab" role="tablist">
                        <button class="btn btn-sm btn-outline-primary active" id="nav-price-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-price" type="button" role="tab" aria-controls="nav-price"
                            aria-selected="true">Price</button>
                    </div>
                </nav>
                <div class="tab-content product-data-tab" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-price" role="tabpanel"
                        aria-labelledby="nav-price-tab" tabindex="0">
                        <form>
                            <div class="row g-3 mb-3">
                                <label for="regularPrice" class="col-md-2 col-form-label col-form-label-sm">Regular
                                    Price

                                </label>
                                <div class="col-md-10">
                                    @error('price')
                                    <code class="text-danger">*{{ $message }}</code>
                                    @enderror
                                    <input type="number" class="form-control form-control-sm" id="regularPrice"
                                        wire:model='price'>
                                </div>
                            </div>
                            <div class="row g-3 mb-3">
                                <label for="salePrice" class="col-md-2 col-form-label col-form-label-sm">Stok
                                </label>
                                <div class="col-md-10">
                                    @error('stok')
                                    <code class="text-danger">*{{$message }}</code>
                                    @enderror
                                    <input type="number" class="form-control form-control-sm" id="salePrice"
                                        wire:model='stok'>
                                </div>
                            </div>
                            <div class="row g-3 mb-3">
                                <label for="salePrice"
                                    class="col-md-2 col-form-label col-form-label-sm">Category</label>
                                <div class="col-md-10">
                                    @if ($selectedCategory != '')

                                    <button disabled class="btn btn-sm btn-outline-info">{{
                                        Str::upper($selectedCategory)}}</button>
                                    @else
                                    @error('category_id')
                                    <code class="text-danger"> *{{$message }}</code>
                                    @enderror
                                    <p>Not Selected</p>
                                    @endif
                                </div>
                            </div>


                            {{-- <div class="row g-3 mb-3">
                                <label for="salePrice" class="col-md-2 col-form-label col-form-label-sm">Discount
                                    ($)</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control form-control-sm" id="salePrice">
                                </div>
                                <div class="col-md-2">
                                    <div class="form-control-sm p-0">
                                        <select class="form-control form-control-sm">
                                            <option value="1">Flat</option>
                                            <option value="2">Discount</option>
                                        </select>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="row g-3">
                                <label for="PriceDateStart" class="col-md-2 col-form-label col-form-label-sm">Sale price
                                    dates</label>
                                <div class="col-md-5">
                                    <input type="text" class="form-control form-control-sm dateRangePicker"
                                        id="PriceDateStart" placeholder="DD MMMM YYYY - HH:MM">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control form-control-sm dateRangePicker"
                                        id="PriceDateEnd" placeholder="DD MMMM YYYY - HH:MM">
                                </div>
                            </div> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-lg-4 add-product-sidebar">

        {{-- <div class="panel mb-25">
            <div class="panel-header">
                <h5>Published</h5>
                <div class="btn-box d-flex gap-2">
                    <button class="btn btn-sm btn-icon btn-outline-primary"><i
                            class="fa-light fa-arrows-rotate"></i></button>
                    <button class="btn btn-sm btn-icon btn-outline-primary panel-close"><i
                            class="fa-light fa-angle-up"></i></button>
                </div>
            </div>
            <div class="panel-body">
                <div class="row g-3">
                    <div class="col-6">
                        <label class="form-label">Status</label>
                        <select class="form-control form-control-sm">
                            <option value="0">Published</option>
                            <option value="1">Draft</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label class="form-label">Visibility</label>
                        <select class="form-control form-control-sm">
                            <option value="0">Public</option>
                            <option value="1">Pass. Protected</option>
                            <option value="2">Private</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <div class="publish-date">
                            <label>Published on: </label>
                            <input class="input-flush" type="text" id="publishDate">
                            <label for="publishDate" class="cursor-pointer text-primary"><i
                                    class="fa-light fa-pen-to-square"></i></label>
                        </div>
                        <div class="btn-box d-flex justify-content-end gap-2">
                            <button class="btn btn-sm btn-outline-primary">Save</button>
                            <button class="btn btn-sm btn-primary">Publish</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="panel mb-25">
            <div class="panel-header">
                <h5>Category</h5>
                <div class="btn-box d-flex gap-2">
                    <small>Total : {{ $categories->total() }}</small>
                </div>
            </div>
            <div class="panel-body">
                <form class="input-group-with-icon mb-20">
                    <span class="input-icon"><i class="fa-light fa-magnifying-glass"></i></span>
                    <input type="search" placeholder="Search category" wire:model.live.debounce='search'
                        wire:input.prevent='resetVar()'>
                </form>
                <div class="product-categories">
                    <div class="row g-3">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name </th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category )

                                        <tr>
                                            <td class="text-center">
                                                <label class="form-check-label" for="category_{{ $category->id }}">
                                                    {{ $category['name'] }}
                                                </label>
                                            </td>
                                            <td>
                                                <div class="btn-box">
                                                    @if ($category->id == $category_id )
                                                    <div class="btn-box">
                                                        <input class="form-check-input" type="radio" name="category"
                                                            id="category_{{ $category->id }}"
                                                            wire:click="setCategory_id({{ $category->id }})" checked>
                                                    </div>
                                                    @else
                                                    <div class="btn-box">
                                                        <input class="form-check-input" type="radio" name="category"
                                                            id="category_{{ $category->id }}"
                                                            wire:click="setCategory_id({{ $category->id }})">
                                                    </div>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    @if ($categories->lastPage()>1) <tfoot>
                                        <tr>

                                            <td class="btn-group mt-2 gap-2  ">
                                                <button class="btn btn-sm btn-outline-info" wire:click='previous()'><i
                                                        class="fas fa-angle-left"></i></button>
                                                <button class="btn btn-sm btn-outline-info">{{ $pageNumber }}</button>
                                                <button class="btn btn-sm btn-outline-info">of</button>
                                                <button class="btn btn-sm btn-outline-info">{{ $categories->lastPage()
                                                    }}</button>
                                                <button class="btn btn-sm btn-outline-info"
                                                    wire:click="next({{  $categories->lastPage()}})"><i
                                                        class="fas fa-angle-right"></i></button>

                                            </td>

                                        </tr>
                                    </tfoot>
                                    @endif
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-top"></div>
        </div>

        {{-- TAGS --}}
        {{-- <div class="panel">
            <div class="panel-header">
                <h5>Products Tags</h5>
                <div class="btn-box d-flex gap-2">
                    <button class="btn btn-sm btn-icon btn-outline-primary"><i
                            class="fa-light fa-arrows-rotate"></i></button>
                    <button class="btn btn-sm btn-icon btn-outline-primary panel-close"><i
                            class="fa-light fa-angle-up"></i></button>
                </div>
            </div>
            <div class="panel-body">
                <div class="product-tag-area">
                    <div class="row g-3">
                        <div class="col-9">
                            <input type="text" class="input-flush" id="productTags">
                        </div>
                        <div class="col-3">
                            <button class="btn btn-sm btn-primary w-100" id="addTags">Add</button>
                        </div>
                    </div>
                    <span class="input-txt">Use commas to separate tags</span>
                    <div class="all-tags" id="allTags"></div>
                    <div class="tag-history">
                        <span class="choose-used-tag input-txt">Choose from most use tags</span>
                        <div class="all-tags used-tags active">
                            <div class="item d-inline-block" data-value="mobile">mobile<span class="close-tag"><i
                                        class="fa-regular fa-xmark"></i></span></div>
                            <div class="item d-inline-block" data-value="tab">tab<span class="close-tag"><i
                                        class="fa-regular fa-xmark"></i></span></div>
                            <div class="item d-inline-block" data-value="watch">watch<span class="close-tag"><i
                                        class="fa-regular fa-xmark"></i></span></div>
                            <div class="item d-inline-block" data-value="t-shirt">t-shirt<span class="close-tag"><i
                                        class="fa-regular fa-xmark"></i></span></div>
                            <div class="item d-inline-block" data-value="shirt">shirt<span class="close-tag"><i
                                        class="fa-regular fa-xmark"></i></span></div>
                            <div class="item d-inline-block" data-value="book">book<span class="close-tag"><i
                                        class="fa-regular fa-xmark"></i></span></div>
                            <div class="item d-inline-block" data-value="monitor">monitor<span class="close-tag"><i
                                        class="fa-regular fa-xmark"></i></span></div>
                            <div class="item d-inline-block" data-value="cloth">cloth<span class="close-tag"><i
                                        class="fa-regular fa-xmark"></i></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="mb-25 ">
            <button class="btn btn-primary d-block w-100" wire:loading.attr='disabled'
                wire:click='createProduct()'><span wire:loading.class='d-none'>Create</span><span class="d-none"
                    wire:loading.class.remove='d-none'>Loading...</span></button>
        </div>
    </div>
</div>