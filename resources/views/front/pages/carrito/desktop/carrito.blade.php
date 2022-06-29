<div class="carrito">
    <div class="carrito-items">
        <table class="-table">
            <tr>
                <th></th>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
            </tr>
    
            @foreach($carts as $cart)
                <tr>
                    <td>➡️Imagen</td>
                    <td>{{$cart->price->product->title}}</td>
                    <td>{{$cart->price->base_price}}</td>
                    <td>
                        <div class="plus-minus-button">
                            <button class="plus-minus-button" data-url="{{route('front_cart_remove', ['fingerprint' => $fingerprint, 'price_id' => $cart->price_id])}}">-</button>
                            <input class="plus-minus-input" type="number" value="{{$cart->quantity}}">
                            <button class="plus-minus-button" data-url="{{route('front_cart_add', ['fingerprint' => $fingerprint, 'price_id' => $cart->price_id])}}">+</button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="carrito-resume">
        <table>
            
                <th colspan="4">Resumen de la compra</th>
            
            <tr>
                <th>IVA</th>
                <th>Precio base total</th>
                <th>Total</th>
            </tr>
                
            <td>{{$tax_total}}€</td>
            <td>{{$base_total}}€</td>
            <td>{{$total}}€</td>
        </table>
        <div class="carrito-resume-buttons">
            <div class="desktop-two-columns">
                <div class="column">
                    <button>
                        <span>Volver atrás</span>
                    </button>
                </div>
                <div class="column">
                    <button class="checkout-button" data-url="{{route('front_checkout', ['fingerprint' => $fingerprint])}}">
                        <span>Continuar</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
