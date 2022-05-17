<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ DESPLEGABLE Y RESPONSIVE</title>
      
    @include('front.layout.partials.styles')
    
</head>
<body>

    @include('front.layout.partials.header')

    <main>
        <h2>Preguntas más frequente</h2>
          <div class="faq-main">
            <div class="faq">
              <div class="faq-question">
                <p>¿Cada cuánto tiempo se actualizan los datos?</p>
               <div class="faq-stick" >
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M14,20H10V11L6.5,14.5L4.08,12.08L12,4.16L19.92,12.08L17.5,14.5L14,11V20Z"/></svg>
               </div> 
              </div>
              <div class="faq-answer">
                <p>La información estadística en internet está permanentemente actualizada, ya que internet es el medio prioritario utilizado para la difusión de los resultados estadísticos.</p>
              </div>
            </div>
          
            <div class="faq">
              <div class="faq-question">
                <p>¿Cuál es la forma más cómoda para calcular una pensión de jubilación?</p>
                <div class="faq-stick">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M14,20H10V11L6.5,14.5L4.08,12.08L12,4.16L19.92,12.08L17.5,14.5L14,11V20Z"/></svg>
                   </div> 
              </div>
          
              <div class="faq-answer">
                <p>
                    En la página web de la Seguridad Social, en el apartado Oficina Virtual hay un apartado denominado Usted mismo: programa de autocálculo de pensión de jubilación que le permitirá realizar los cálculos. 
                </p>
              </div>
            </div>
            <div class="faq">
                <div class="faq-question">
                  <p>¿Se pueden conseguir datos más detallados que los publicados en la página web?</p>
                  <div class="faq-stick">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M14,20H10V11L6.5,14.5L4.08,12.08L12,4.16L19.92,12.08L17.5,14.5L14,11V20Z"/></svg>
               </div> 
            
                </div>
                <div class="faq-answer">
                  <p>La información estadística en internet está permanentemente actualizada, ya que internet es el medio prioritario utilizado para la difusión de los resultados estadísticos.</p>
                  
                </div>
              </div>
              

          </div>
      
       

    </main>

    @include('front.layout.partials.footer')

    @include('front.layout.partials.js')
 
    
</body>
</html>















