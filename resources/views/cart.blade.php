@extends('layout')

@section('title', 'Shopping Cart')

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/algolia.css') }}">
@endsection

@section('content')

{{-- @component('components.breadcrumbs')
<a href="#">Home</a>
<i class="fa fa-chevron-right breadcrumb-separator"></i>
<span>Shopping Cart</span>
@endcomponent --}}
<div class="breadcrumbs">
    <div class="container">
        <a href="#">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>Shopping Cart</span>
    </div>
</div>

<div class="cart-section container">
    <div>
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

        <h2>3 item(s) in Shopping Cart</h2>

        <div class="cart-table">

            <div class="cart-table-row">
                <div class="cart-table-row-left">
                    <a href="#"><img src="/img/macbook-pro-laravel.png" alt="item" class="cart-table-img"></a>
                    <div class="cart-item-details">
                        <div class="cart-table-item"><a href="# }}">Laptop</a></div>
                        <div class="cart-table-description"> Details </div>
                    </div>
                </div>
                <div class="cart-table-row-right">
                    <div class="cart-table-actions">
                        <form action="" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button type="submit" class="cart-options">Remove</button>
                        </form>

                        <form action="" method="POST">
                            {{ csrf_field() }}

                            <button type="submit" class="cart-options">Save for Later</button>
                        </form>
                    </div>
                    <div>
                        <select class="quantity" data-id="" data-productQuantity="">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>

                        </select>
                    </div>
                    <div>Price</div>
                </div>
            </div>
            <div class="cart-table-row">
                <div class="cart-table-row-left">
                    <a href="#"><img src="/img/macbook-pro-laravel.png" alt="item" class="cart-table-img"></a>
                    <div class="cart-item-details">
                        <div class="cart-table-item"><a href="# }}">Laptop</a></div>
                        <div class="cart-table-description"> Details </div>
                    </div>
                </div>
                <div class="cart-table-row-right">
                    <div class="cart-table-actions">
                        <form action="" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button type="submit" class="cart-options">Remove</button>
                        </form>

                        <form action="" method="POST">
                            {{ csrf_field() }}

                            <button type="submit" class="cart-options">Save for Later</button>
                        </form>
                    </div>
                    <div>
                        <select class="quantity" data-id="" data-productQuantity="">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>

                        </select>
                    </div>
                    <div>Price</div>
                </div>
            </div>
            <div class="cart-table-row">
                <div class="cart-table-row-left">
                    <a href="#"><img src="/img/macbook-pro-laravel.png" alt="item" class="cart-table-img"></a>
                    <div class="cart-item-details">
                        <div class="cart-table-item"><a href="# }}">Laptop</a></div>
                        <div class="cart-table-description"> Details </div>
                    </div>
                </div>
                <div class="cart-table-row-right">
                    <div class="cart-table-actions">
                        <form action="" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="cart-options">Remove</button>
                        </form>

                        <form action="" method="POST">
                            {{ csrf_field() }}

                            <button type="submit" class="cart-options">Save for Later</button>
                        </form>
                    </div>
                    <div>
                        <select class="quantity" data-id="" data-productQuantity="">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>

                        </select>
                    </div>
                    <div>Price</div>
                </div>
            </div><!-- end cart-table-row -->
        </div> <!-- end cart-table -->

        <a href="#" class="have-code">Have a Code?</a>

        <div class="have-code-container">
            <form action="" method="POST">
                {{ csrf_field() }}
                <input type="text" name="coupon_code" id="coupon_code">
                <button type="submit" class="button button-plain">Apply</button>
            </form>
        </div> <!-- end have-code-container -->

        <div class="cart-totals">
            <div class="cart-totals-left">
                Shipping is free because we’re awesome like that. Also because that’s additional stuff I don’t feel like
                figuring out :).
            </div>

            <div class="cart-totals-right">
                <div>

                    <hr>
                    Subtotal <br>
                    Tax (%)<br>
                    <span class="cart-totals-total">Total</span>
                </div>
                <div class="cart-totals-subtotal">
                    <hr>
                    $5000 <br>
                    $5.00 <br>
                    <span class="cart-totals-total">$5005</span>
                </div>
            </div>
        </div> <!-- end cart-totals -->

        <div class="cart-buttons">
            <a href="{{ route('shop.index') }}" class="button">Continue Shopping</a>
            <a href="#" class="button-primary">Proceed to Checkout</a>
        </div>
    </div> <!-- end saved-for-later -->


</div>

</div> <!-- end cart-section -->

@include('partials.might-like')



{{-- @section('extra-js')
<script src="{{ asset('js/app.js') }}"></script>
<script>
    (function(){
            const classname = document.querySelectorAll('.quantity')

            Array.from(classname).forEach(function(element) {
                element.addEventListener('change', function() {
                    const id = element.getAttribute('data-id')
                    const productQuantity = element.getAttribute('data-productQuantity')

                    axios.patch(`/cart/${id}`, {
                        quantity: this.value,
                        productQuantity: productQuantity
                    })
                    .then(function (response) {
                        // console.log(response);
                        window.location.href = '{{ route('cart.index') }}'
                    })
                    .catch(function (error) {
                        // console.log(error);
                        window.location.href = '{{ route('cart.index') }}'
                    });
                })
            })
        })();
</script> --}}

<!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
<script src="{{ asset('js/algolia.js') }}"></script>
@endsection