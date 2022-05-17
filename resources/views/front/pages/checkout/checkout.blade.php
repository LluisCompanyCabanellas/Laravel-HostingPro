<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HostingPro</title>
    @include('front.layout.partials.styles')

</head>
<body>

    @include('front.layout.partials.header')

    <main>
        <div class="checkout">
            <div class="checkout-title">
                <h2>Finalizar compra</h2>
            </div>
            <div class="desktop-two-columns">
                <div class="column">
                    <div class="checkout-info">
                        <form>
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
                                    <tr>
                                        <th colspan="2">Resumen de la compra</th>
                                    </tr>
                                    <tr>
                                        <td>IVA</td>
                                        <td>20 €</td>
                                    </tr>
                                    <tr>
                                        <td>Transporte</td>
                                        <td>0 €</td>
                                    </tr>
                                    <tr>
                                        <td class="checkout-payment-summarized-total">Total</td>

                                        <td class="checkout-payment-summarized-total">42'99 €</td>
                                    </tr>
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
                        <button>
                              <span>Pagar</span>
                        </button>
                    </div>
            </div>
        </div>


    </main>
    
   @include('front.layout.partials.footer')

   @include('front.layout.partials.js')
    
</body>
</html>