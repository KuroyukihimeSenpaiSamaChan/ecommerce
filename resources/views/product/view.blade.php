@extends('layouts.app')

@section('content')
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">{{ $product->name }}</h1>
        <p class="lead text-muted">{{ $product->description }}</p>
        <add-to-cart :product_id="{{ $product->id }}"></add-to-cart>
    </div>
</section>
<div class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <img src="{{ Storage::url('squalane-beauty-products.jpg') }}" />
            </div>
        </div>
    </div>
</div>
@endsection