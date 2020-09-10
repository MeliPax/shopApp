{{-- <header>
    <div class="top-nav container">
      <div class="top-nav-left">
          <div class="logo"><a href="/">Ecommerce</a></div>
          @if (! (request()->is('checkout') || request()->is('guestCheckout')))
          {{ menu('main', 'partials.menus.main') }}
@endif
</div>
<div class="top-nav-right">
    @if (! (request()->is('checkout') || request()->is('guestCheckout')))
    @include('partials.menus.main-right')
    @endif
</div>
</div> <!-- end top-nav -->
</header> --}}

<header>
    <div class="top-nav container">

        <div class="logo"><a href="/">EasyShop</a></div>
        @if (! (request()->is('checkout')))
        <ul>
            <li><a href="{{route('shop.index')}}">Shop</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">blog</a></li>
            <li><a href="{{route('cart.index')}}">Cart<span class="cart-count"></span> <span>3</span></a></li>
        </ul>
        @endif
    </div>
    </div> <!-- end top-nav -->
</header>