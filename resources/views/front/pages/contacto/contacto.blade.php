<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business guide</title>
    @include('front.layout.partials.styles')
</head>

<body>

    @include('front.layout.partials.header')

    <main>
        <div class="contact">
            <div class="contact-titulo">
                <h2>Contacta con nosotros</h2>
            </div>
            <div class="contact-options">
                <div class="desktop-two-columns">
                    <div class="column">
                        <div class="contact-informacion">
                            <div class="contact-informacion-text">
                                <svg viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z" />
                                </svg>
                                <span>+34678900384</span>
                            </div>
                            <div class="contact-informacion-text">
                                <svg viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" />
                                </svg>
                                <span>info@hostingpro.com</span>
                            </div>
                            <div class="contact-informacion-text">
                                <svg viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z" />
                                </svg>
                                <span>HOSTING PRO</span>
                            </div>
                            <div class="contact-informacion-text">
                                <svg viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M9,10V12H7V10H9M13,10V12H11V10H13M17,10V12H15V10H17M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5C3.89,21 3,20.1 3,19V5A2,2 0 0,1 5,3H6V1H8V3H16V1H18V3H19M19,19V8H5V19H19M9,14V16H7V14H9M13,14V16H11V14H13M17,14V16H15V14H17Z" />
                                </svg>
                                <span>Abierto todos los días</span>
                            </div>
                            <div class="contact-informacion-text">
                                <svg viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12S17.5 2 12 2M7.7 15.5L7 14.2L11 11.9V7H12.5V12.8L7.7 15.5Z" />
                                </svg>
                                <span>8:00 - 14:00</span>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="contact-form">
                            <form>
                                <div class="desktop-two-columns">
                                    <div class="column">
                                        <div class="form-element">
                                            <div class="form-element-label">
                                                <label>Nombre</label>
                                            </div>
                                            <div class="form-element-input">
                                                <input name="name" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="form-element">
                                            <div class="form-element-label">
                                                <label>Apellidos</label>
                                            </div>
                                            <div class="form-element-input">
                                                <input name="surname" type="text">
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
                                                <input name="telephone" type="tel">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="form-element">
                                            <div class="form-element-label">
                                                <label>Email</label>
                                            </div>
                                            <div class="form-element-input">
                                                <input name="email" type="email">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="desktop-one-column">
                                    <div class="column">
                                        <div class="form-element">
                                            <div class="form-element-label">
                                                <label>Mensaje</label>
                                            </div>
                                            <div class="form-element-input">
                                                <textarea name="message" id=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="desktop-one-column">
                                    <div class="column">
                                        <div class="form-send-button">
                                            <button>Enviar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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






<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    
<header>

    <div class="desktop-one-column">
        <div class="contact-title">
            <h2>Contacta con nosotros</h2>
        </div>
    </div>

</header

<main>
    <div class="desktop-two-columns">
        <div class="column">
            <div class="contact-list-icon">
               <ul>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="477.156px" height="477.156px" viewBox="0 0 477.156 477.156" style="enable-background:new 0 0 477.156 477.156;" xml:space="preserve">
                            <path d="M475.009,380.316l-2.375-7.156c-5.625-16.719-24.062-34.156-41-38.75l-62.688-17.125c-17-4.625-41.25,1.594-53.688,14.031   l-22.688,22.688c-82.453-22.28-147.109-86.938-169.359-169.375L145.9,161.94c12.438-12.438,18.656-36.656,14.031-53.656   l-17.094-62.719c-4.625-16.969-22.094-35.406-38.781-40.969L96.9,2.19c-16.719-5.563-40.563,0.063-53,12.5L9.962,48.659   C3.899,54.69,0.024,71.94,0.024,72.003c-1.187,107.75,41.063,211.562,117.281,287.781   c76.031,76.031,179.454,118.219,286.891,117.313c0.562,0,18.312-3.813,24.375-9.845l33.938-33.938   C474.946,420.878,480.571,397.035,475.009,380.316z"/>
                        </svg>
                    </li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 64 64" version="1.1" viewBox="0 0 64 64" xml:space="preserve"><g id="Glyph_copy_2"><path d="M63.125,9.977c-0.902-1.321-2.419-2.194-4.131-2.194H5.006c-1.676,0-3.158,0.842-4.067,2.117l31.16,25.982L63.125,9.977z"/><path d="M0.006,14.328v36.889c0,2.75,2.25,5,5,5h53.988c2.75,0,5-2.25,5-5V14.461L32.099,41.09L0.006,14.328z"/></g>
                       </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="128px" height="128px" viewBox="0 0 128 128" enable-background="new 0 0 128 128" xml:space="preserve">
                         <path d="M64,0C39.699,0,20,19.699,20,44s44,84,44,84s44-59.699,44-84S88.301,0,64,0z M28,44C28,24.148,44.148,8,64,8    s36,16.148,36,36c0,13.828-20.008,47.211-36,70.238C48.008,91.211,28,57.828,28,44z M64,24c-11.047,0-20,8.953-20,20    s8.953,20,20,20s20-8.953,20-20S75.047,24,64,24z M64,56c-6.617,0-12-5.383-12-12s5.383-12,12-12s12,5.383,12,12S70.617,56,64,56z"/>
                        </svg>
                       
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <path d="M160,256H96v-64h64V256z M288,192h-64v64h64V192z M416,192h-64v64h64V192z M160,288H96v64h64V288z M288,288h-64v64h64V288z    M416,288h-64v64h64V288z M160,384H96v64h64V384z M288,384h-64v64h64V384z M128,96c17.672,0,32-14.313,32-32V32   c0-17.688-14.328-32-32-32S96,14.313,96,32v32C96,81.688,110.328,96,128,96z M512,64v448H0V64h80c0,26.469,21.531,48,48,48   c26.469,0,48-21.531,48-48h160c0,26.469,21.531,48,48,48s48-21.531,48-48H512z M480,160H32v320h448V160z M384,96   c17.688,0,32-14.313,32-32V32c0-17.688-14.312-32-32-32s-32,14.313-32,32v32C352,81.688,366.312,96,384,96z"/>
                            </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="510px" height="510px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
                                <g id="access-time">
                                    <path style="fill-opacity:0.9;" d="M255,0C114.75,0,0,114.75,0,255s114.75,255,255,255s255-114.75,255-255S395.25,0,255,0z     M255,459c-112.2,0-204-91.8-204-204S142.8,51,255,51s204,91.8,204,204S367.2,459,255,459z"/>
                                    <polygon style="fill-opacity:0.9;" points="267.75,127.5 229.5,127.5 229.5,280.5 362.1,362.1 382.5,328.95 267.75,260.1   "/>
                        </svg>
                    </li>
                </ul>

            </div>
            <div class="contact-list">
                <ul>
                    <li>+34678900384</li>
                    <li>info@alizeboats.com</li>
                    <li>Club Marítimo Sant Antonio de la Playa</li>
                    <li>Abierto todos los días</li>
                    <li>8:00 - 14:00</li>
                </ul>
            </div>

        </div>
        <div class="column">
            <div class="desktop-two-columns">
                <div class="column">
                    <form method="get" action="">

                        Nombre: <input type="text" name="nombre" /><br />
                        
                        Teléfono: <input type="text" name="apellidos" /><br />
                    
                    </form>

                </div>
                <div class="column">
                    <form method="get" action="accion.html">

                        Apellidos: <input type="text" name="nombre" /><br />
                        
                        Email: <input type="text" name="apellidos" /><br />
                
                    </form>

                </div>
                <div class="desktop-one-column">
                    <div class="column">
                        Mensaje<textarea name="texto" rows="4" cols="20"></textarea>
                    </div>
                    <div class="contact-button">
                        <button>Enviar</button>
                    </div>
                </div>



                </div>
            </div>





        </div>
    </div>





</main>


















</body>
</html>-->