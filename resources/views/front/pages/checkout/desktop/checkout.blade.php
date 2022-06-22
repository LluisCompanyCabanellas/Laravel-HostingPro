<div class="checkout">
    
    <div class="desktop-two-columns">
        <div class="column">
            <div class="checkout-info">
                <form class="front-form" action="{{route('front_checkout_store')}}">
                    <div class="desktop-two-columns">
                        <div class="column">
                            <div class="form-element">
                                <div class="form-element-label">
                                    <label>Nombre</label>
                                </div>
                                <div class="form-element-input">
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="form-element">
                                <div class="form-element-label">
                                    <label>Apellidos</label>
                                </div>
                                <div class="form-element-input">
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="desktop-two-columns">
                        <div class="column">
                            <div class="form-element">
                                <div class="form-element-label">
                                    <label>Teléfono</label>
                                </div>
                                <div class="form-element-input">
                                    <input type="tel">
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="form-element">
                                <div class="form-element-label">
                                    <label>Email</label>
                                </div>
                                <div class="form-element-input">
                                    <input type="email">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="desktop-two-columns">
                        <div class="column">
                            <div class="form-element">
                                <div class="form-element-label">
                                    <label>Ciudad</label>
                                </div>
                                <div class="form-element-input">
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="form-element">
                                <div class="form-element-label">
                                    <label>Código postal</label>
                                </div>
                                <div class="form-element-input">
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="desktop-one-column">
                        <div class="column">
                            <div class="form-element">
                                <div class="form-element-label">
                                    <label>Dirección</label>
                                </div>
                                <div class="form-element-input">
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
        <div class="column">
                <div class="checkout-payment">
                    <div class="checkout-payment-summarized">
                        <table>
            
                            <th colspan="4">Resumen de la compra</th>
                        
                        <tr>
                          
                            <th>IVA</th>
                            <th>Precio base total</th>
                            <th>Total</th>
                        </tr>
            
                        @if(isset($carts))
                            @foreach($carts as $cart)
                                <tr>
                                    <td>{{$cart->price->tax->type * $cart->quantity}}%</td>
                                    <td>{{$cart->price->base_price *  $cart->quantity}}💲</td>
                                    <td>{{$cart->price->base_price *  $cart->quantity * $cart->price->tax->multiplicator}}💲</td>
                                </tr>
                            @endforeach
                        @endif
                     
                    </table>
                </div>
            </div>
            <div class="checkout-ways">
                <div class="checkout-ways-payment">
                    <input type="radio" name="payment" value="Transferencia Bancaria">
                    <label>Transferencia Bancaria</label>
                </div>
                <div class="checkout-ways-payment">
                    <input type="radio" name="payment" value="Paypal">
                    <label>Paypal</label>
                </div>
                <div class="checkout-ways-payment" >
                    <input type="radio" name="payment" value="Tarjeta de crédito">
                    <label>Tarjeta de crédito</label>
                </div>
            </div>
            <div class="checkout-button">
                <button class="pay-confirmation">
                    <span>Pagar</span>
                </button>
                
            </div>
    </div>
</div>
