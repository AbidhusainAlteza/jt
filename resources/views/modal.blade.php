{{-- login modal --}}
<div class="dropdown cart-dropdown off-canvas type3 ml-2 ">
    {{-- opened --}}
    <div class="canvas-overlay"></div>
    <!-- End Cart Toggle -->
    <div class="dropdown-box">
        <div class="canvas-header">
            <h4 class="canvas-title">Shopping Cart</h4>
            <a href="#" class="btn btn-dark btn-link btn-icon-right btn-close">close<i
                    class="d-icon-arrow-right"></i><span class="sr-only">Cart</span></a>
        </div>
        <div class="products scrollable">
            <div class="product product-cart">
                <div class="row">

                </div>

            </div>
            <!-- End of Cart Product -->
            <div class="product product-cart">
                <figure class="product-media">
                    <a href="product.html">
                        <img src="images/cart/product-2.jpg" alt="product" width="80"
                            height="88" />
                    </a>
                    <button class="btn btn-link btn-close">
                        <i class="fas fa-times"></i><span class="sr-only">Close</span>
                    </button>
                </figure>
                <div class="product-detail">
                    <a href="product.html" class="product-name">Dark Blue Women’s
                        Leomora Hat</a>
                    <div class="price-box">
                        <span class="product-quantity">1</span>
                        <span class="product-price">$118.00</span>
                    </div>
                </div>
            </div>
            <!-- End of Cart Product -->
        </div>
        <!-- End of Products  -->
        <!-- End of Cart Total -->
        <div class="cart-action">
            <a href="{{url('cart')}}" class="btn btn-dark btn-link">View Cart</a>
            <a href="checkout.html" class="btn btn-dark"><span>Go To Checkout</span></a>
        </div>
        <!-- End of Cart Action -->
    </div>
    <!-- End Dropdown Box -->
</div>
{{-- end login modal --}}


<!-- Modal -->

