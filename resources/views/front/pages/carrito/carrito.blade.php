<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('front.layout.partials.styles')
</head>

@include('front.layout.partials.header')

<body>
    <main>
        <div class="carrito">
            <div class="carrito-title">
                <h2>Carrito de la compra</h2>
            </div>

        <div class="carrito-items">
            <table class="-table">
                    <tr>
                        <th></th>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                    </tr>
                    <tr>
                        <td>imaginación</td>
                        <td>WP Senior</td>
                        <td>14'99 €</td>
                        <td> 
                            <div class="plus-minus-button">
                                <button class="minus">-</button>
                                <input class="amount" type="number" value="1">
                                <button class="plus">+</button>
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>imaginación </td>
                        <td>WP Master</td>
                        <td>32'99 €</td>
                        
                        <td>
                            <div class="plus-minus-button">
                                <button class="minus">-</button>
                                <input class="amount" type="number" value="1">
                                <button class="plus">+</button>
                            </div>
                        </td>
                    </tr>
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

    </main>

    @include('front.layout.partials.footer')

    @include('front.layout.partials.js')


</body>
</html>