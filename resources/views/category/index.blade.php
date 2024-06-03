@extends('layouts.dashboard')
@section('content')
<div class="row g-4">
    <div class="col-xxl-9 col-md-9">

        @livewire('category.listing')
    </div>
    <div class="col-xxl-3 col-md-3">
        @livewire('category.create')
    </div>
</div>
@endsection