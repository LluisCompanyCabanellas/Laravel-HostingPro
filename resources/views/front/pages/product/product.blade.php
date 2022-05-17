
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
                                <h2>Si hay algo de lo que estamos totalmente convencidos es de que juntos será mucho más fácil. ¡Ven y deja tu web en las mejores manos!</h2>
    
                            </div>
                            <div class="product-description">
                                <ul>
                                    <li>Porque no buscamos ser los primeros, nuestro objetivo es ser los mejores.</li>
                                    <li>Porque, con nosotros, el hosting es lo más fácil y te puedes centrar en tu proyecto.</li>
                                    <li>Porque no te orientamos solo de palabra, sino que te dejamos probarnos gratis y con garantías.</li>
                                    <li>Porque no somos máquinas, pero tenemos las mejores para darte el servicio.</li>
                                    <li>Porque ahorramos en publicidad para poder ofrecerte el mejor precio.</li>
                                    <li>Porque no somos 200 en plantilla, pero tenemos un soporte real 24 horas y 7 días a la semana.</li>
                                    <li>Porque no tenemos todas las respuestas, tenemos la que tú necesitas.</li>
                                </ul>
                            </div>

                            <div class="tabs-contenedor">
                                <ul class="tabs">
                                    <li class="tab active" data-seccion="description">
                                        Descripción
                                    </li>
                                    <li class="tab" data-seccion="specification">
                                        Características
                                    </li>
                                    <li class="tab" data-seccion="opinions">
                                        Opinión
                                    </li>
                                </ul>
                                
                                <div class="tabs-contents">
                                    <div class="tab-content active" data-seccion="description">
                                        <p>Hola</p>
                                    </div>

                                    <div class="tab-content" data-seccion="specification">
                                        <p>Adios</p>
                                    </div>

                                    <div class="tab-content" data-seccion="opinions"> 
                                        <p>Cualquier cosa</p>
                                    </div>
                                </div>
                            </div>
                          
                        
                            <div class="product-quantity">

                                <div class="product-button-text">
                                    <h3>Cantidad de días</h3>
                                </div>

                                <div class="plus-minus-button">
                                    <button class="minus">-</button>
                                    <input class="plus-minus-input" type="number" value="1">
                                    <button class="plus">+</button>
                                </div>
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
        </main>
    </body>

    @include('front.layout.partials.footer')
    
     
    @include('front.layout.partials.js')
    
</html>

























