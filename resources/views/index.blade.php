@extends('layout.master')
@section('includecss')
<link rel="stylesheet" type="text/css" href="css/demo32.min.css">
@endsection
@section('content')


<main class="main">
    <div class="page-content overflow-hidden">
        <section class="intro-section p-relative">
            <div class="owl-carousel owl-theme row owl-nav-fade intro-slider animation-slider cols-1 gutter-no"
                data-owl-options="{
                'nav': false,
                'dots': false,
                'loop': false,
                'items': 1,
                'autoplay': false,
                'autoplayTimeout': 8000,
                'responsive': {
                    '992': {
                        'nav': true
                    }
                }
            }">
                <div class="intro-slide1 banner banner-fixed" style="background-color: #f6f6f6;">
                    <figure>
                        <img src="images/demos/demo32/slides/2.jpg" alt="intro-banner" width="1920"
                            height="1023" style="background-color: #f6f6f6;" />
                    </figure>
                    <div class="container">
                        <div class="banner-content">
                            <h4 class="banner-subtitle slide-animate"
                                data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.2s'}">
                                Amazing Scientific Results
                            </h4>
                            <h2 class="banner-title slide-animate"
                                data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">
                                Essential Skincare<br />Collection</h2>
                            <div class="banner-desc slide-animate"
                                data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1.3s'}">
                                <p><strong>01.</strong>Helps provide moisture for the skin.</p>
                                <p><strong>02.</strong>Helps remove injuery on the skin.</p>
                                <p><strong>03.</strong>Helps improve the skin by making it softer.</p>
                            </div>
                            <a href="demo32-shop.html"
                                class="btn btn-primary btn-outline btn-rounded btn-icon-right slide-animate"
                                data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1s', 'delay': '1.8s'}">Shop
                                Now<i class="d-icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="banner banner-fixed intro-slide2" style="background-color: #f6f6f6;">
                    <figure>
                        <img src="images/demos/demo32/slides/1.jpg" alt="intro-banner" width="1920"
                            height="1023" style="background-color: #f6f6f6;" />
                    </figure>
                    <div class="container">
                        <div class="banner-content">
                            <h4 class="banner-subtitle slide-animate"
                                data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.2s'}">
                                Natural Process
                            </h4>
                            <h2 class="banner-title mb-8 slide-animate"
                                data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">
                                Cosmetia Makeup<br />Professional</h2>
                            <div class="banner-desc pl-0 slide-animate font-weight-semi-bold text-dark text-uppercase"
                                data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1.3s'}">
                                <span class="ls-super">For-Women</span><br />
                                Product Identifier: DD1160
                            </div>
                            <a href="demo32-shop.html"
                                class="btn btn-primary btn-rounded btn-icon-right slide-animate"
                                data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1s', 'delay': '1.8s'}">Shop
                                Now<i class="d-icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-divider shape1">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                    <path class="elementor-shape-fill" d="M790.5,93.1c-59.3-5.3-116.8-18-192.6-50c-29.6-12.7-76.9-31-100.5-35.9c-23.6-4.9-52.6-7.8-75.5-5.3
                    c-10.2,1.1-22.6,1.4-50.1,7.4c-27.2,6.3-58.2,16.6-79.4,24.7c-41.3,15.9-94.9,21.9-134,22.6C72,58.2,0,25.8,0,25.8V100h1000V65.3
                    c0,0-51.5,19.4-106.2,25.7C839.5,97,814.1,95.2,790.5,93.1z"></path>
                </svg>
            </div>
        </section>
        <div class="divider-section1 p-relative pt-10 pb-10">
            <div class="shape-divider shape2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                    <path class="elementor-shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
                    c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
                    c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
                </svg>
            </div>
            <div class="shape-divider shape3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                    <path class="elementor-shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
                    c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
                    c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
                </svg>
            </div>
        </div>
        <div class="product-filter-section container pt-10 mt-10 pb-8">
            <div class="title-wrapper mt-1 appear-animate"
                data-animation-options="{'name': 'fadeIn', 'duration': '.3s'}">
                <h2 class="text-left title with-link">Top Categories<a href="demo32-shop.html">View All
                        Products<i class="d-icon-arrow-right"></i></a></h2>
                <span class="badge">Featured</span>
            </div>
            <div class="row">
                <div class="col-md-3 mb-6 mb-md-0">
                    <div class="nav-filters">
                        <ul class="nav-filters product-filters mr-0" data-target="#products-grid">
                            <li><a href="#" class="nav-filter active" data-filter=".body">Body</a></li>
                            <li><a href="#" class="nav-filter" data-filter=".cosmetia">CosmetiaWERA</a></li>
                            <li><a href="#" class="nav-filter" data-filter=".feeling">Feeling like Cosmetia</a>
                            </li>
                            <li><a href="#" class="nav-filter" data-filter=".fragrance">Fragrance</a></li>
                            <li><a href="#" class="nav-filter" data-filter=".makeup">Makeup</a></li>
                            <li><a href="#" class="nav-filter" data-filter=".save">Save on Sets</a></li>
                            <li><a href="#" class="nav-filter" data-filter=".skincare">Skincare</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row grid" id="products-grid" data-grid-options="{
                        'masonry': {
                            'columnWidth': ''
                        }
                    }">
                        <div class="col-md-4 col-6 grid-item body feeling makeup save">
                            <div class="product shadow-product text-center mb-2">
                                <figure class="product-media">
                                    <a href="demo32-product.html">
                                        <img src="images/demos/demo32/products/1.jpg" alt="product" width="300"
                                            height="338">
                                        <img src="images/demos/demo32/products/1-1.jpg" alt="product"
                                            width="300" height="338">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" title="Select Options">
                                            <i class="d-icon-bag"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                            title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                            View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat">
                                        <a href="demo32-product.html">body</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="demo32-product.html">Bodycare Smooth Powder</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$199.00</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:40%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo32-product.html" class="rating-reviews">( 3 reviews )</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 grid-item body feeling fragrance save">
                            <div class="product shadow-product text-center mb-2">
                                <figure class="product-media">
                                    <a href="demo32-product.html">
                                        <img src="images/demos/demo32/products/2.jpg" alt="product" width="300"
                                            height="338">
                                        <img src="images/demos/demo32/products/2-1.jpg" alt="product"
                                            width="300" height="338">
                                    </a>
                                    <div class="product-label-group">
                                        <span class="product-label label-sale">27% off</span>
                                    </div>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart">
                                            <i class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                            title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                            View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat">
                                        <a href="demo32-product.html">body</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="demo32-product.html">Bodycare Super Maker</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$999.00</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:60%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo32-product.html" class="rating-reviews">( 1 reviews )</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 grid-item body feeling makeup save skincare">
                            <div class="product shadow-product text-center mb-2">
                                <figure class="product-media">
                                    <a href="demo32-product.html">
                                        <img src="images/demos/demo32/products/3.jpg" alt="product" width="300"
                                            height="338">
                                        <img src="images/demos/demo32/products/3-1.jpg" alt="product"
                                            width="300" height="338">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart">
                                            <i class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                            title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                            View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat">
                                        <a href="demo32-product.html">body</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="demo32-product.html">France Women Mixer</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$233.00</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:20%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo32-product.html" class="rating-reviews">( 3 reviews )</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 grid-item body cosmetia fragrance save skincare">
                            <div class="product shadow-product text-center mb-2">
                                <figure class="product-media">
                                    <a href="demo32-product.html">
                                        <img src="images/demos/demo32/products/4.jpg" alt="product" width="300"
                                            height="338">
                                        <img src="images/demos/demo32/products/4-1.jpg" alt="product"
                                            width="300" height="338">
                                    </a>
                                    <div class="product-label-group">
                                        <span class="product-label label-sale">27% off</span>
                                    </div>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" title="Select Options">
                                            <i class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                            title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                            View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat">
                                        <a href="demo32-product.html">body</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="demo32-product.html">Round Cosmetia Powder</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$56.00</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:100%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo32-product.html" class="rating-reviews">( 6 reviews )</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 grid-item body feeling fragrance makeup skincare">
                            <div class="product shadow-product text-center mb-2">
                                <figure class="product-media">
                                    <a href="demo32-product.html">
                                        <img src="images/demos/demo32/products/5.jpg" alt="product" width="300"
                                            height="338">
                                        <img src="images/demos/demo32/products/5-1.jpg" alt="product"
                                            width="300" height="338">
                                    </a>
                                    <div class="product-label-group">
                                        <span class="product-label label-sale">27% off</span>
                                    </div>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" title="Select Options">
                                            <i class="d-icon-bag"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                            title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                            View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat">
                                        <a href="demo32-product.html">body</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="demo32-product.html">Best Haircare</a>
                                    </h3>
                                    <div class="product-price">
                                        <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:40%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo32-product.html" class="rating-reviews">( 3 reviews )</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 grid-item body feeling fragrance save skincare">
                            <div class="product shadow-product text-center mb-2">
                                <figure class="product-media">
                                    <a href="demo32-product.html">
                                        <img src="images/demos/demo32/products/6.jpg" alt="product" width="300"
                                            height="338">
                                        <img src="images/demos/demo32/products/6-1.jpg" alt="product"
                                            width="300" height="338">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart">
                                            <i class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist"
                                            title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                            View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat">
                                        <a href="demo32-product.html">body</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="demo32-product.html">Pretty Lady Cosmetia</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$999.00</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:60%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo32-product.html" class="rating-reviews">( 1 reviews )</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="pb-9 mt-8 pt-4 service-list-section p-relative">
            <div class="shape-divider shape4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                    <path class="elementor-shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
                c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
                c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
                </svg>
            </div>
            <div class="container">
                <div class="service-list service-list-lg appear-animate" data-animation-options="{
                'name': 'fadeInUpShorter',
                'delay': '.2s'
            }">
                    <div class="owl-carousel owl-theme owl-shadow-carousel show-shadow" data-owl-options="{
                    'margin':20,
                    'nav':false,
                    'dots':false,
                    'autoplay': true,
                    'autoplayTimeout': 4000,
                    'responsive':{
                        '992':{
                            'items':3
                        },
                        '768':{
                            'items':2
                        },
                        '576':{
                            'items':2
                        },
                        '0':{
                            'items':1
                        },
                        '1200':{
                            'items':4
                        }
                    }
                }">
                        <div class="icon-box icon-box-side flex-column">
                            <i class="icon-box-icon d-icon-truck mr-0"></i>
                            <div class="icon-box-content mb-1 text-center">
                                <h4 class="icon-box-title text-normal">Free Shipping &amp; Return</h4>
                                <p class="text-grey">Get free delivery of your orders<br />
                                    all over the world.</p>
                            </div>
                        </div>
                        <div class="icon-box icon-box-side flex-column">
                            <i class="icon-box-icon d-icon-service mr-0"></i>
                            <div class="icon-box-content mb-1 text-center">
                                <h4 class="icon-box-title text-normal">Customer Support</h4>
                                <p class="text-grey">We provide convenient support of<br />24/7 for
                                    our customers.</p>
                            </div>
                        </div>
                        <div class="icon-box icon-box-side flex-column">
                            <i class="icon-box-icon d-icon-money mr-0"></i>
                            <div class="icon-box-content mb-1 text-center">
                                <h4 class="icon-box-title text-normal">Moneyback Guarantee</h4>
                                <p class="text-grey">We fully guarantee our money<br />
                                    back policy with no doubt.</p>
                            </div>
                        </div>
                        <div class="icon-box icon-box-side flex-column">
                            <i class="icon-box-icon d-icon-card mr-0"></i>
                            <div class="icon-box-content mb-1 text-center">
                                <h4 class="icon-box-title text-normal">20% Off Your First Order</h4>
                                <p class="text-grey">Get our first gift - 20% off for your<br />
                                    first ordered product.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="brand-section pb-10">
            <div class="brand-carousel owl-carousel owl-theme owl-shadow-carousel row cols-xl-7 cols-lg-6 cols-md-4 cols-sm-3 cols-2"
                data-owl-options="{
                    'items': 7,
                    'loop': false,
                    'autoplay': true,
                    'dots': false,
                    'responsive': {
                        '0': {
                            'items': 2
                        },
                        '576': {
                            'items': 3
                        },
                        '768': {
                            'items': 4
                        },
                        '992': {
                            'items': 6
                        },
                        '1200': {
                            'items': 7
                        }
                    }
                }">
                <figure class="brand">
                    <img src="images/demos/demo32/brands/1.png" alt="brand" width="125" height="53" />
                </figure>
                <figure class="brand">
                    <img src="images/demos/demo32/brands/2.png" alt="brand" width="104" height="56" />
                </figure>
                <figure class="brand">
                    <img src="images/demos/demo32/brands/3.png" alt="brand" width="117" height="31" />
                </figure>
                <figure class="brand">
                    <img src="images/demos/demo32/brands/4.png" alt="brand" width="139" height="58" />
                </figure>
                <figure class="brand">
                    <img src="images/demos/demo32/brands/5.png" alt="brand" width="123" height="36" />
                </figure>
                <figure class="brand">
                    <img src="images/demos/demo32/brands/6.png" alt="brand" width="113" height="36" />
                </figure>
                <figure class="brand">
                    <img src="images/demos/demo32/brands/7.png" alt="brand" width="144" height="43" />
                </figure>
            </div>
        </div>
        <section class="banner-section pt-md-6 pb-8">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 appear-animate"
                        data-animation-options="{'name': 'fadeInRightShorter', 'delay': '.3s'}">
                        <div class="banner h-100">
                            <div class="banner-content pr-lg-4 y-50">
                                <h4 class="banner-subtitle text-white font-weight-bold text-uppercase">How it
                                    works?</h4>
                                <h2 class="banner-title text-white font-weight-bold mb-2">Get the Best Look
                                    Video
                                    Presentation
                                </h2>
                                <p class="text-white mb-6">Your new manicure routine in <b>3 easy steps</b></p>
                                <a href="demo32-shop.html"
                                    class="btn btn-dark btn-ellipse btn-icon-right mb-1">Shop Now <i
                                        class="d-icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 appear-animate"
                        data-animation-options="{'name': 'fadeInLeftShorter', 'delay': '.5s'}">
                        <div class="card-description overlay-zoom">
                            <figure class="p-relative">
                                <img src="images/demos/demo32/banner/1.jpg" width="550" height="410"
                                    alt="Product" class="w-100 d-block">
                                <a class="btn-play btn-iframe" href="video/memory-of-a-woman.mp4">
                                    <i class="d-icon-play-solid"></i>
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-10 pb-10 shape-divider shape5">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                    <path class="elementor-shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
                    c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
                    c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
                </svg>
            </div>
        </section>
        <section class="banner-section2 pb-4 pt-5 mt-10">
            <div class="container mt-10 pt-6 mt-md-0 pt-md-0">
                <div class="row gutter-md">
                    <div class="banner">
                        <div class="banner-content pt-lg-9 y-50">
                            <div class="title-wrapper mt-1 appear-animate"
                                data-animation-options="{'name': 'fadeIn', 'duration': '.3s'}">
                                <h2 class="text-left title">Our Amazing People</h2>
                                <span class="badge">Who We Are</span>
                            </div>
                            <p class="banner-desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing eli blandit massa im. Nullam
                                id
                                varius nunc. Vivamus bibendum mex, et faucibus lacus venena bibe...
                            </p>
                            <a class="btn btn-link btn-underline btn-dark" href="demo32-shop.html">Learn more<i
                                    class="d-icon-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="banner-image-wrapper overflow-hidden appear-animate"
                        data-animation-options="{'name': 'fadeInLeftShorter', 'duration': '.6s'}">
                        <div class="banner-carousel owl-carousel owl-theme owl-shadow-carousel"
                            data-owl-options="{
                                'items': 1,
                                'loop': true,
                                'autoplay': false,
                                'margin': 20,
                                'dots': false,
                                'responsive': {
                                    '425': {
                                        'items': 2
                                    },
                                    '768': {
                                        'items': 2
                                    },
                                    '992': {
                                        'items': 3
                                    }
                                }
                            }">
                            <div class="image-box overlay-dark">
                                <figure class="">
                                    <img src="images/demos/demo32/banner/2.jpg" alt="banner" width="240"
                                        height="320" />
                                </figure>
                                <div class="text-center y-50">
                                    <p class="mb-0">Lorem ipsum dolor
                                        sit amet, consectetur
                                        adipiscing elit.
                                        Duis nec vestibulum
                                        magna, et dapibus
                                        lacus. </p>
                                </div>
                            </div>
                            <div class="image-box overlay-dark">
                                <figure class="">
                                    <img src="images/demos/demo32/banner/3.jpg" alt="banner" width="240"
                                        height="320" />
                                </figure>
                                <div class="text-center y-50">
                                    <p class="mb-0">Lorem ipsum dolor
                                        sit amet, consectetur
                                        adipiscing elit.
                                        Duis nec vestibulum
                                        magna, et dapibus
                                        lacus. </p>
                                </div>
                            </div>
                            <div class="image-box overlay-dark">
                                <figure class="">
                                    <img src="images/demos/demo32/banner/4.jpg" alt="banner" width="240"
                                        height="320" />
                                </figure>
                                <div class="text-center y-50">
                                    <p class="mb-0">Lorem ipsum dolor
                                        sit amet, consectetur
                                        adipiscing elit.
                                        Duis nec vestibulum
                                        magna, et dapibus
                                        lacus. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container pt-10 mt-10 appear-animate"
            data-animation-options="{'name': 'fadeInUpShorter', 'delay': '.3s'}">
            <div class="title-wrapper mt-1 mb-6 appear-animate"
                data-animation-options="{'name': 'fadeIn', 'duration': '.3s'}">
                <h2 class="text-left title with-link">Beauty Inspired</h2>
                <span class="badge">Featured</span>
            </div>
            <div class="owl-carousel owl-shadow-carousel owl-theme row cols-lg-4 cols-md-3 cols-2"
                data-owl-options="{
                    'items': 4,
                    'nav': false,
                    'dots': false,
                    'margin': 20,
                    'loop': false,
                    'responsive': {
                        '0': {
                            'items': 2
                        },
                        '768': {
                            'items': 3
                        },
                        '992': {
                            'items': 4
                        }
                    }
                }">
                <div class="product shadow-product text-center mb-4">
                    <figure class="product-media">
                        <a href="demo32-product.html">
                            <img src="images/demos/demo32/products/7.jpg" alt="product" width="300"
                                height="338">
                            <img src="images/demos/demo32/products/7-1.jpg" alt="product" width="300"
                                height="338">
                        </a>
                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart" title="Select Options">
                                <i class="d-icon-bag"></i>
                            </a>
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                    class="d-icon-heart"></i></a>
                        </div>
                        <div class="product-action">
                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                View</a>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="product-cat">
                            <a href="demo32-product.html">body</a>
                        </div>
                        <h3 class="product-name">
                            <a href="demo32-product.html">Bodycare Smooth Powder</a>
                        </h3>
                        <div class="product-price">
                            <span class="price">$199.00</span>
                        </div>
                        <div class="ratings-container">
                            <div class="ratings-full">
                                <span class="ratings" style="width:40%"></span>
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <a href="demo32-product.html" class="rating-reviews">( 3 reviews )</a>
                        </div>
                    </div>
                </div>
                <div class="product shadow-product text-center mb-4">
                    <figure class="product-media">
                        <a href="demo32-product.html">
                            <img src="images/demos/demo32/products/1.jpg" alt="product" width="300"
                                height="338">
                            <img src="images/demos/demo32/products/1-1.jpg" alt="product" width="300"
                                height="338">
                        </a>
                        <div class="product-label-group">
                            <span class="product-label label-sale">27% off</span>
                        </div>
                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                data-target="#addCartModal" title="Add to cart">
                                <i class="d-icon-bag"></i></a>
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                    class="d-icon-heart"></i></a>
                        </div>
                        <div class="product-action">
                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                View</a>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="product-cat">
                            <a href="demo32-product.html">body</a>
                        </div>
                        <h3 class="product-name">
                            <a href="demo32-product.html">Bodycare Super Maker</a>
                        </h3>
                        <div class="product-price">
                            <span class="price">$999.00</span>
                        </div>
                        <div class="ratings-container">
                            <div class="ratings-full">
                                <span class="ratings" style="width:60%"></span>
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <a href="demo32-product.html" class="rating-reviews">( 1 reviews )</a>
                        </div>
                    </div>
                </div>
                <div class="product shadow-product text-center mb-4">
                    <figure class="product-media">
                        <a href="demo32-product.html">
                            <img src="images/demos/demo32/products/2.jpg" alt="product" width="300"
                                height="338">
                            <img src="images/demos/demo32/products/2-1.jpg" alt="product" width="300"
                                height="338">
                        </a>
                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                data-target="#addCartModal" title="Add to cart">
                                <i class="d-icon-bag"></i></a>
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                    class="d-icon-heart"></i></a>
                        </div>
                        <div class="product-action">
                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                View</a>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="product-cat">
                            <a href="demo32-product.html">body</a>
                        </div>
                        <h3 class="product-name">
                            <a href="demo32-product.html">France Women Mixer</a>
                        </h3>
                        <div class="product-price">
                            <span class="price">$233.00</span>
                        </div>
                        <div class="ratings-container">
                            <div class="ratings-full">
                                <span class="ratings" style="width:20%"></span>
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <a href="demo32-product.html" class="rating-reviews">( 3 reviews )</a>
                        </div>
                    </div>
                </div>
                <div class="product shadow-product text-center mb-4">
                    <figure class="product-media">
                        <a href="demo32-product.html">
                            <img src="images/demos/demo32/products/8.jpg" alt="product" width="300"
                                height="338">
                            <img src="images/demos/demo32/products/8-1.jpg" alt="product" width="300"
                                height="338">
                        </a>
                        <div class="product-label-group">
                            <span class="product-label label-sale">27% off</span>
                        </div>
                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart" title="Select Options">
                                <i class="d-icon-arrow-right"></i></a>
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                    class="d-icon-heart"></i></a>
                        </div>
                        <div class="product-action">
                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                View</a>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="product-cat">
                            <a href="demo32-product.html">body</a>
                        </div>
                        <h3 class="product-name">
                            <a href="demo32-product.html">Round Cosmetia Powder</a>
                        </h3>
                        <div class="product-price">
                            <span class="price">$0.80-$2.00</span>
                        </div>
                        <div class="ratings-container">
                            <div class="ratings-full">
                                <span class="ratings" style="width:100%"></span>
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <a href="demo32-product.html" class="rating-reviews">( 6 reviews )</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="blog-section mt-8 mb-10 bg-white"
            style="background-image: url(images/demos/demo32/banner/5.jpg);">
            <div class="container appear-animate"
                data-animation-options="{'name': 'fadeInLeftShorter', 'delay': '.3s'}">
                <div class="title-wrapper mt-1 mb-5 appear-animate"
                    data-animation-options="{'name': 'fadeIn', 'duration': '.3s'}">
                    <h2 class="text-left title with-link text-white">Our Latest Blog
                    </h2>
                    <span class="badge text-white">Who we are</span>
                </div>
                <div class="owl-carousel owl-theme owl-shadow-carousel row cols-lg-3 cols-sm-2 cols-1"
                    data-owl-options="{
                    'items': 3,
                    'margin': 20,
                    'dots': true,
                    'loop': false,
                    'nav': false,
                    'responsive': {
                        '0': {
                            'items': 1
                        },
                        '576': {
                            'items': 2
                        },
                        '992': {
                            'items': 3,
                            'dots': false
                        }
                    }
                }">
                    <div class="post post-frame overlay-zoom">
                        <figure class="post-media">
                            <a href="post-single.html">
                                <img src="images/demos/demo32/blog/1.jpg" width="340" height="206" alt="post" />
                            </a>
                            <div class="post-calendar">
                                <span class="post-day">03</span>
                                <span class="post-month">DEC</span>
                            </div>
                        </figure>
                        <div class="post-details">
                            <h4 class="post-title"><a href="#">Sed adipiscing ornare</a></h4>
                            <p class="post-content">Sed pretium, ligula sollicitudin laoreet viverra, tortor
                                libero sodales leo, eget blandit nunc tortor eu nibh. Suspendisse potenti.…</p>
                            <a href="blog-classic.html" class="btn btn-link btn-underline btn-primary">Read
                                More<i class="d-icon-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="post post-frame overlay-zoom">
                        <figure class="post-media">
                            <a href="post-single.html">
                                <img src="images/demos/demo32/blog/2.jpg" width="340" height="206" alt="post" />
                            </a>
                            <div class="post-calendar">
                                <span class="post-day">01</span>
                                <span class="post-month">DEC</span>
                            </div>
                        </figure>
                        <div class="post-details">
                            <h4 class="post-title"><a href="#">Sed pretium sollicitudin leo</a></h4>
                            <p class="post-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque,…</p>
                            <a href="blog-classic.html" class="btn btn-link btn-underline btn-primary">Read
                                More<i class="d-icon-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="post post-frame overlay-zoom">
                        <figure class="post-media">
                            <a href="post-single.html">
                                <img src="images/demos/demo32/blog/3.jpg" width="340" height="206" alt="post" />
                            </a>
                            <div class="post-calendar">
                                <span class="post-day">02</span>
                                <span class="post-month">DEC</span>
                            </div>
                        </figure>
                        <div class="post-details">
                            <h4 class="post-title"><a href="#">Ornare risus utaliquam</a></h4>
                            <p class="post-content">Sed pretium, ligula sollicitudin laoreet viverra, tortor
                                libero sodales leo, eget blandit nunc tortor eu nibh. Suspendisse potenti.…</p>
                            <a href="blog-classic.html" class="btn btn-link btn-underline btn-primary">Read
                                More<i class="d-icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="instagram-section pt-lg-10 pb-8 appear-animate" data-animation-options="{
            'delay': '.3s'
        }">
            <div class="container pb-8 pt-8">
                <div class="title-wrapper mb-5 mt-1 appear-animate"
                    data-animation-options="{'name': 'fadeIn', 'duration': '.3s'}">
                    <h2 class="text-left title with-link">Our Instagram</h2>
                    <span class="badge">Featured</span>
                </div>
                <div class="owl-carousel owl-theme row brand-carousel cols-xl-5 cols-lg-4 cols-md-3 cols-sm-2 cols-2"
                    data-owl-options="{
                            'nav': false,
                            'autoplay': true,
                            'margin': 20,
                            'loop': false,
                            'responsive': {
                                '0': {
                                    'items': 2
                                },
                                '576': {
                                    'items': 3
                                },
                                '992': {
                                    'items': 4
                                }
                            }
                        }">
                    <figure class="instagram">
                        <a href="#"><img src="images/demos/demo32/instagram/1.jpg" alt="brand" width="280"
                                height="280" /></a>
                    </figure>
                    <figure class="instagram">
                        <a href="#"><img src="images/demos/demo32/instagram/2.jpg" alt="brand" width="280"
                                height="280" /></a>
                    </figure>
                    <figure class="instagram">
                        <a href="#"><img src="images/demos/demo32/instagram/3.jpg" alt="brand" width="280"
                                height="280" /></a>
                    </figure>
                    <figure class="instagram">
                        <a href="#"><img src="images/demos/demo32/instagram/4.jpg" alt="brand" width="280"
                                height="280" /></a>
                    </figure>
                </div>
            </div>
        </section>
    </div>

</main>

@endsection
