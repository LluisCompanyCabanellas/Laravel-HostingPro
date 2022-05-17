<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hosting Pro</title>
    
    @include('front.layout.partials.styles')
</head>

<body>
    @include('front.layout.partials.header')

    <main>
        @if($agent->isDesktop())
            <h1>Hola</h1>
        @endif

        @if($agent->isMobile())
            <h1>Adeu</h1>
        @endif
        <div class="home">
            <div class="desktop-one-column mobile-one-column">
                <div class="column">
                    <div class="banner">
                        <div class="banner-imagen">
                            <img src="img/foto1.webp">      
                        </div>
    
                        <div class="banner-titulo">
                            <h5>Contrata ya tu host adaptado a cualquier necesidad </h5>
                        </div>
    
                        <div class="banner-boton">
                          <button>PROBAR 15 DÍAS</button>
                        </div>
                    </div>
                </div>
            </div>
               
            <div class="boxes">
                <div class="desktop-four-columns mobile-one-column">
                    <div class="column">
                        <div class="box">
                            <div class="box-image">
                                <img src="img/foto6.svg">
                            </div>
        
                            <div class="box-title">
                                <h3>HOSTING MAX</h3>
                            </div>
        
                            <div class="box-category">
                                <span>EL MÁS COMPLETO</span>
                            </div>
        
                            <div class="button-contratar">
                                <button>CONTRATAR</button>
                            </div>
        
                            <div class="box-description">
                                <ul>
                                    <li>Dominio gratis</li> 
                                    <li>Soporte 24x7</li>
                                    <li>Cuentas de correo ilimitadas</li>
                                    <li>Webs ilimitadas</li>
                                    <li>100 GB espacio SSD</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                                                
                    <div class="column">
                            
                        <div class="box">
                            <div class="box-image">
                                <img src="img/foto5.svg">
                            </div>
        
                            <div class="box-title">
                                <h3>HOSTING TOP</h3>
                            </div>
        
                            <div class="box-category">
                                <span>PARA TRIUNFAR</span>
                            </div>
        
                            <div class="button-contratar">
                                <button>CONTRATAR</button>
                            </div>
        
                            <div class="box-description">
                                <ul>
                                    <li>Dominio gratis</li>
                                    <li>Soporte 24x7</li>
                                    <li>50 cuentas de correo</li>
                                    <li>5 Webs</li>
                                    <li>75 GB espacio SSD</li>
                                </ul>
                            </div>
                        </div>
                    </div>
        
                    <div class="column">
                        <div class="box">
                            <div class="box-image">
                                <img src="img/foto4.svg">
                            </div>
            
                            <div class="box-title">
                                <h3>HOSTING PLUS</h3>
                            </div>
            
                            <div class="box-category">
                                <span>NUESTRO RECOMENDADO</span>
                            </div>
            
                            <div class="button-contratar">
                                <button>CONTRATAR </button>
                            </div>
            
                            <div class="box-description">
                                 <ul>
                                     <li>Dominio gratis</li>
                                     <li>Soporte 24x7</li>
                                     <li>20 cuentas de correo</li>
                                     <li>3 Webs</li>
                                     <li>50 GB espacio SSD</li>
                                 </ul>
                            </div>
                        </div>
                    </div>
        
                    <div class="column">
                        <div class="box">
                            <div class="box-image">
                                <img src="img/foto3.svg">
                            </div>
            
                            <div class="box-title">
                                <h3>HOSTING START</h3>
                            </div>
            
                            <div class="box-category">
                                <span>PARA COMENZAR</span>
                            </div>
            
                            <div class="button-contratar">
                                <button>CONTARTAR</button>
                            </div>
            
                            <div class="box-description">
                                 <ul>
                                     <li>Dominio gratis</li>
                                     <li>Soporte 24x7</li>
                                     <li>5 cuentas de correo</li>
                                     <li>1 Web</li>
                                     <li>25 GB espacio SSD</li>
                                 </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="info">
                <div class="desktop-two-columns">
                    <div class="column">
                        <div class="info-text">
                            <div class="info-description">
                                <h3>Comienza tu proyecto web sin costes con nuestra prueba gratuita de Hosting. Un mes para dar tus primeros pasos y comprobar todas las funcionalidades de los planes de alojamiento de Axarnet. Comienza a diseñar tu web de forma más fácil.</h3>
                            </div>
                            <div class="info-button">
                                <button>SOLICITA TU PRUEBA GRATUITA AHORA</button>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="info-image">
                            <img src="img/foto2.webp">
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








