@extends('layout')

@section('title', 'Products')

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/algolia.css') }}">
@endsection

@section('content')
<div class="breadcrumbs">
    <div class="container">
        <a href="/">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>Shop</span>

    </div>
</div>

{{-- <div class="container">
    @if (session()->has('success_message'))
    <div class="alert alert-success">
        {{ session()->get('success_message') }}
</div>
@endif

@if(count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
</div> --}}

<div class="products-section container">
    <div class="sidebar">
        <h3>By Category</h3>
        <ul>
            {{-- @foreach ($categories as $category) --}}
            {{-- <li class="{{ setActiveCategory($category->slug) }}"><a
                href="{{ route('shop.index', ['category' => $category->slug]) }}">{{ $category->name }}</a></li> --}}
            {{-- @endforeach --}}


            <li><a href="#">Laptop</a></li>
            <li><a href="#">Desktop</a></li>
            <li><a href="#">Mobile Phones</a></li>
            <li><a href="#">Tablets</a></li>
            <li><a href="#">TVs</a></li>
            <li><a href="#">Digital Cameras</a></li>
        </ul>

        <h3>By Price</h3>
        <ul>
            <li><a href="#">$0 - $700</a></li>
            <li><a href="#">$700 - $1000</a></li>
            <li><a href="#">$1000 - $1500</a></li>
        </ul>
    </div> <!-- end sidebar -->
    <div>
        <div class="products-header">
            <h1 class="stylish-heading">Laptops</h1>
        </div>

        <div class="products text-center">
            @foreach ($products as $product)
            <div class="product">
                <a href="{{route('shop.show', $product->slug)}}"><img
                        src="{{asset('img/products/'.$product->slug.'.jpg')}}" alt="product"></a>
                <a href="{{route('shop.show', $product->slug)}}">
                    <div class="product-name">{{$product->name}}</div>
                </a>
                <div class="product-price">{{$product->presentPrice()}}</div>
            </div>
            @endforeach

        </div> <!-- end products -->

        <div class="spacer"></div>
        {{-- {{ $products->appends(request()->input())->links() }} --}}
    </div>
</div>

@endsection

@section('extra-js')
<!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
<script src="{{ asset('js/algolia.js') }}"></script>
@endsection