<div class="carrito">

    <div class="carrito-items">
        <table class="-table">
            <tr>
                <th></th>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
            </tr>
                @if(isset($carts))
                    @foreach($carts as $cart)
                        <tr>
                            <td>imaginación</td>
                            <td>{{$cart->price->product->title}}</td>
                            <td>{{$cart->price->base_price}}</td>
                            <td>
                                <div class="plus-minus-button">
                                    <button class="minus" data-url="{{route('front_minus_carrito', ['fingerprint'->])}}">-</button>
                                    <input class="plus-minus-input" type="number" value="{{$cart->quantity}}">
                                    <button class="plus" data-url="{{route('front_plus_carrito')}}">+</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
        </table>
    </div>

    <div class="carrito-resume">
        <table>
            <tr>
                <th colspan="2">Resumen de la compra</th>
            </tr>
            <tr>
                <td>IVA</td>
                <td>10 €</td>
            </tr>
            <tr>
                <td>Servicio</td>
                <td>32'99 €</td>
            </tr>
            <tr>
                <td class="carrito-resume-total">Total</td>
                <td class="carrito-resume-total">42'99 €</td>
            </tr>
        </table>

        <div class="carrito-resume-buttons">
            <div class="desktop-two-columns">
                <div class="column">
                    <button>
                        <div class="svg-wrapper-1">

                        </div>
                        <span>Volver</span>
                    </button>
                </div>
                <div class="column">
                    <button>

                        <span>Comprar</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>













<!--


<div class="cart">
    <div class="cart-main-table">
        <table>
            <caption>Carrito de la compra</caption>
            <tr>
                <th></th>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
            </tr>
            <tr>
                @if(isset($carts))
                    @foreach($carts as $cart)
                        <td>
                            <img class="desktop-only" src="img/machine-gun.webp" alt="">
                        </td>
                        <td>MK46 SPORTS LINE LIGHT MACHINE GUN REPLICA [ST]</td>
                        <td>{{$cart->price_id}}</td>
                        <td>
                            <div class="amount-button">
                                <div class="minus">
                                    <button>-</button>
                                </div>
                                <div class="amount-style">
                                    <input class="amount" name="amount" type="number"  value="{{$cart->amount}}">
                                </div>
                                <div class="plus">
                                    <button>+</button>
                                </div>
                            </div>
                        </td>
                    @endforeach
                @endif
            </tr>
            <tr>
                <td>
                    <img class="desktop-only" src="img/machine-gun.webp" alt="">
                </td>
                <td>MK46 SPORTS LINE LIGHT MACHINE GUN REPLICA [ST]</td>
                <td>234.89€</td>
                <td>
                    <div class="amount-button">
                        <div class="minus">
                            <button>-</button>
                        </div>
                        <div class="amount-style">
                            <input class="amount" type="number"  value="1">
                        </div>
                        <div class="plus">
                            <button>+</button>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="cart-resume-table">
        <table>
            <caption>Resumen de la compra</caption>
            <tr>
                <th>IVA</th>
                <td>106.34€</td>
            </tr>
            <tr>
                <th>Transporte</th>
                <td>0€</td>
            </tr>
            <tr>
                <th>Total</th>
                <td>612.72 €</td>
            </tr>
        </table>
        <div class="cart-buttons">
            <div class="purchase-button">
                <button>Atrás</button>
            </div>
            <div class="cancel-button">
                <button>Comprar</button>
            </div>
        </div>
    </div>
</div>-->