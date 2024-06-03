<div class="col-12">
    <div class="card">
        <div class="card-header ">
            <div class="row">
                <div class="col-4">
                    <select class="form-control form-control-sm" wire:model.live='perPage' wire:change='resetPage()'>
                        <option value="10">10 </option>
                        <option value="25">25 </option>
                        <option value="50">50 </option>
                        <option value="100">100 </option>
                    </select>
                </div>
                <div class="col-8 ">
                    <input type="text" class="form-control form-control-sm " placeholder="search"
                        wire:model.live.debounce='search' wire:input.debounce='resetPage()'>

                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row g-3">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Total Product</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $n = $page - 1 ;
                                @endphp
                                @foreach ($datas as $category )

                                <tr>
                                    @php
                                    $n++ ;
                                    @endphp
                                    <td>{{ $n }}</td>
                                    <td class="text-start">
                                        {{ $category['name'] }}
                                    </td>
                                    <td class="text-start text-wrap "
                                        style="max-width: 250px; overflow: hidden; text-overflow: ellipsis;">{{
                                        $category['description'] }}</td>
                                    <td>{{ $category['products_count'] }}</td>
                                    <td>
                                        <div class="btn-box">

                                            <button class="btn btn-sm btn-outline-info" title="Details"
                                                wire:click='show()'><i class="fa-light fa-eye"></i></button>

                                            <button class="btn btn-sm btn-outline-warning" title="Edit"
                                                wire:click="edit('{{ $category->id }}')"><i
                                                    class="fa-light fa-pen"></i></button>

                                            <button class="btn btn-sm btn-outline-danger" title="Remove"
                                                wire:click="delete({{ $category->id }})"><i
                                                    class="fa-light fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer row">
            <div class="col-6">

                <small>Showing {{ $page }} to {{ $page + $perPage - 1 }} of {{ $totalData}} results</small>
            </div>
            <div class="col-6 ">
                <div class="float-end">
                    <button class="btn btn-sm btn-outline-primary" wire:click='previous()'><i
                            class="fas fa-angle-left"></i></button>
                    <button class="btn btn-sm btn-outline-primary">{{ $pageNumber }}</button>
                    <button class="btn btn-sm btn-outline-primary" wire:click='next({{ $totalData }})'><i
                            class="fas fa-angle-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>