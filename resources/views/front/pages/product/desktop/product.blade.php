<div class="page-section" id="product">
   <div class="product">
        <div class="desktop-two-columns">
            <div class="column">
                <div class="product-image">
                    <img src="img/fotoproduct.svg">
                </div>
                <div class="product-mini-image-tidy">
                    <div class="desktop-five-columns">
                        <div class="column">
                            <div class="product-mini-image">
                                <img src="img/fotoproduct2.svg">
                            </div>
                        </div>

                        <div class="column">
                            <div class="product-mini-image">
                                <img src="img/fotoproduct2.svg">
                            </div>
                        </div>

                        <div class="column">
                            <div class="product-mini-image">
                                <img src="img/fotoproduct2.svg">
                            </div>
                        </div>

                        <div class="column">
                            <div class="product-mini-image">
                                <img src="img/fotoproduct2.svg">
                            </div>
                        </div>

                        <div class="column">
                            <div class="product-mini-image">
                                <img src="img/fotoproduct2.svg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="product-content">
                    <div class="product-title">
                        <h2>{{ $product->title }}</h2>

                    </div>

                    <div class="product-price">
                        <h2>{{ $product->prices->first()->base_price }} €</h2>

                    </div>

                    <div class="product-category">
                        <h2>{{ $product->category->title }}</h2>

                    </div>
                    <div class="product-description">
                        <ul>
                            <li>{{ $product->description }}</li>

                        </ul>


                    </div>

                    @include('front.component.desktop.tabs')

                    <div class="product-quantity">

                        <div class="product-button-text">
                            <h3>Cantidad de productos</h3>
                        </div>

                        <form class="add-to-cart" action="{{route("front_add_carrito")}}">

                            <input id="price_id" type="hidden" name="price_id" value="{{$product->prices->first()->id}}">

                            <div class="plus-minus-button">
                                <button class="minus">-</button>
                                <input class="plus-minus-input" type="number" value="1" name="quantity">
                                <button class="plus">+</button>
                            </div>
                        </form>

                    </div>


                    <div class="product-button-two">
                        <div class="notification">
                            <p class="notification-message"></p>
                        </div>


                        <button class="pay">COMPRAR</button>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>