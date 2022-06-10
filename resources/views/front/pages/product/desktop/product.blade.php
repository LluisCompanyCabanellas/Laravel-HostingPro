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
                    <h2>{{ $product->price }} €</h2>

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
                        <h3>Cantidad de días</h3>
                    </div>

                    @include('front.component.desktop.plusminus')
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