
  
<div class="checkout">
    
    <div class="desktop-two-columns">
        <div class="column">
            <div class="checkout-info">
                <form>
    <form class="front-form" action="{{route('front_checkout_store')}}">


        <input type="hidden" name="fingerprint" value="{{$fingerprint}}">

        <div class="desktop-two-columns">
            <div class="column">
                <div class="checkout-info">
                    <div class="desktop-two-columns">
                        <div class="column">
                            <div class="form-element">
                                <div class="form-element-label">
                                    <label>Nombre</label>
                                </div>
                                <div class="form-element-input">
                                    <input type="text" name="name">
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="form-element">
                                <div class="form-element-label">
                                    <label>Apellidos</label>
                                </div>
                                <div class="form-element-input">
                                    <input type="text" name="surnames">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="desktop-two-columns">
                        <div class="column">
                            <div class="form-element">
                                <div class="form-element-label">
                                    <label>Email</label>
                                </div>
                                <div class="form-element-input">
                                    <input type="email" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="form-element">
                                <div class="form-element-label">
                                    <label>Telephone</label>
                                </div>
                                <div class="form-element-input">
                                    <input type="tel" name="telephone">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="desktop-two-columns">
                        <div class="column">
                            <div class="form-element">
                                <div class="form-element-label">
                                    <label>País</label>
                                </div>
                                <div class="form-element-input">
                                    <input type="text" name="country">
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="form-element">
                                <div class="form-element-label">
                                    <label>Código postal</label>
                                </div>
                                <div class="form-element-input">
                                    <input type="text" name="postal_code">
                                </div>
                            <div class="form-element">
                                <div class="form-element-label">
                                    <label>Provincia</label>
                                </div>
                                <div class="form-element-input">
                                    <input type="text" name="province">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="desktop-one-column">
                        <div class="column">
                            <div class="form-element">
                                <div class="form-element-label">
                                    <label>Provincia</label>
                                </div>
                                <div class="form-element-input">
                                    <input type="text" name="address">

                                    <input type="text" name="province">
                                </div>
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
                                    <input type="text" name="address">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="column">
                    <div class="checkout-payment">
                        <div class="checkout-payment-summarized">
                            <table>
                                <th colspan="4">Resumen de la compra</th>

                            <tr>                
                                <th colspan="4">Resumen de la compra</th>
                            
                            <tr>
                            
                                <th>IVA</th>
                                <th>Precio base total</th>
                                <th>Total</th>
                            </tr>

                            @if(isset($carts))
                                @foreach($carts as $cart)
                                    <tr>               
                                        <td>{{$tax_total}}€</td>
                                        <td>{{$base_total}}€</td>
                                        <td>{{$total}}€</td>
                                    </tr>
                                @endforeach
                            @endif

                        </table>
                    </div>

                </div>

                        
                        </table>
                    </div>
                </div>
                <div class="checkout-ways">
                    <div class="checkout-ways-payment">
                        <input type="radio" name="payment" value="1">
                        <label>Transferencia Bancaria</label>
                    </div>
                    <div class="checkout-ways-payment">
                        <input type="radio" name="payment" value="2">
                        <label>Paypal</label>
                    </div>
                    <div class="checkout-ways-payment" >
                        <input type="radio" name="payment" value="3">
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

    </form>

</div>
</div>
