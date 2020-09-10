<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ShopApp</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

</head>

<body>
    <header>
        <div class="top-nav container">
            <div class="logo">EasyShop</div>
            <ul>
                <li><a href="{{route('shop.index')}}">Shop</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="{{route('cart.index')}}">Cart <span class="cart-count"></span> <span>3</span> </a></li>

            </ul>
        </div> <!-- End of the top nav--->
        <div class="hero container">
            <div class="hero-copy">
                <h1>Shopping made Easy</h1>
                <p>Unlimited options and joy of choice</p>
                <div class="hero-buttons">
                    <a href="" class="button button-white">Demo</a>
                    <a href="" class="button button-white">Order Now</a>
                </div>
            </div>
            {{-- Hero copy ends --}}

            <div class="hero-image">
                <img src="img/macbook-pro-laravel.png" alt="">
            </div>
        </div>
        {{-- End of hero section --}}
    </header>
    {{-- End of Header section --}}

    <div class="featured-section">
        <div class="container">
            <h1 class="text-center">Our Products</h1>
            <p class="section-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate praesentium, laudantium laborum
                vel eum commodi iste sequi rerum qui nobis illo velit ea quisquam, aut fuga. Inventore, error
                doloremque! Eligendi.
            </p>
            <div class="text-center button-container">
                <a href="#" class="button">Featured</a>
                <a href="#" class="button">On sale</a>
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

                {{-- End of products --}}
            </div>
            <div class="text-center button-container">
                <a href="{{route('shop.index')}}" class="button">View more products</a>
            </div>
        </div>
        {{-- End of container --}}
    </div>
    {{-- End of Featured-section --}}
    </div>
    <div class="blog-section">
        <div class="container">
            <h1 class="text-center">Find More</h1>

            <p class="section-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, ratione. Maxime dignissimos alias
                animi,
                culpa illum saepe minima totam! Facere dignissimos voluptatum nulla quo iusto magni repellendus
                necessitatibus? Ad, autem?
            </p>
            <div class="blog-posts">
                <div class="blog-post" id="blog1">
                    <a href="#"><img src="img/blog1.png" alt="blog image"></a>
                    <a href="#">
                        <h2 class="blog-title">Blog post Title 1</h2>
                    </a>
                    <div class="blog-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet
                        eos
                        ipsum, officia voluptas reprehenderit sapiente nam voluptate sequi, quod in fugit dolorem
                        adipisci natus quae ipsam obcaecati. Eos, eaque illum?</div>
                </div>
                <div class="blog-post" id="blog2">
                    <a href="#"><img src="img/blog2.png" alt="blog image"></a>
                    <a href="#">
                        <h2 class="blog-title">Blog post Title 1</h2>
                    </a>
                    <div class="blog-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet
                        eos
                        ipsum, officia voluptas reprehenderit sapiente nam voluptate sequi, quod in fugit dolorem
                        adipisci natus quae ipsam obcaecati. Eos, eaque illum?</div>
                </div>
                <div class="blog-post" id="blog3>
                    <a href=" #"><img src="img/blog3.png" alt="blog image"></a>
                    <a href="#">
                        <h2 class="blog-title">Blog post Title 1</h2>
                    </a>
                    <div class="blog-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet
                        eos
                        ipsum, officia voluptas reprehenderit sapiente nam voluptate sequi, quod in fugit dolorem
                        adipisci natus quae ipsam obcaecati. Eos, eaque illum?</div>
                </div>
            </div>
            {{-- End Blog posts --}}
        </div>
        {{-- End The container --}}
    </div>
    {{-- End blog section --}}

    <footer>
        <div class="footer-content container">
            <div class="made-with">Made with <i class="fa fa-heart"> By Pax</i> </div>
            <ul>
                <li>Follow Me:</li>
                <li><a href="#" class="fa fa-globe"></a></li>
                <li><a href="#" class="fa fa-github"></a></li>
                <li><a href="#" class="fa fa-youtube"></a></li>
                <li><a href="#" class="fa fa-twitter"></a></li>
                <li><a href="#" class="fa fa-instagram"></a></li>
            </ul>

            {{-- End of footer content --}}
        </div>
        {{-- End of footer --}}
    </footer>
</body>

</html>