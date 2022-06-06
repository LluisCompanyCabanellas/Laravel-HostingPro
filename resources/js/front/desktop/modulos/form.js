export let renderForm = () => {

    let mainContainer = document.querySelector("main");  
    let storeButton = document.querySelector('.guardado');
    let forms = document.querySelectorAll('.front-form');

    document.addEventListener("renderFormModules",( event =>{
        renderForm();
    }), {once: true});
    

    if(storeButton){

        storeButton.addEventListener("click", (event) => {

            event.preventDefault();
    
            forms.forEach(form => { 

                /*
                    En las siguientes líneas se obtiene el valor del formulario a través de un objeto FormData
                    y se captura la url que usaremos para enviar los datos al servidor.
                */
                
                let data = new FormData(form); // FormData es un objeto que nos permite capturar los datos del formulario.
                let url = form.action;

                for (var pair of data.entries()) {
                    console.log(pair[0]+ ', ' + pair[1]); 
                }

                /*	
                    En el siguiente valor estamos capturando los datos del ckeditor y se los añadimos a los datos
                    del formData. 
                */
    
                if( ckeditors != 'null'){
    
                    Object.entries(ckeditors).forEach(([key, value]) => {
                        data.append(key, value.getData());
                    });
                }

                /*
                    A continuación vamos a hacer una llamada de tipo POST mediante fetch, esta vez vamos a 
                    añadir en los headers el token que nos ha dado Laravel el cual va a prevenir que se puedan 
                    hacer ataques de tipos cross-site scripting.
                */
               
    
                let sendPostRequest = async () => {
    
                    // document.dispatchEvent(new CustomEvent('startWait'));
                    
                    let response = await fetch(url, {
                        headers: {
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
                        },
                        method: 'POST',
                        body: data
                    })
                    .then(response => {
                    
                        if (!response.ok) throw response;

                        return response.json();
                    })
                    .then(json => {

                        mainContainer.innerHTML = json.content;

                        document.dispatchEvent(new CustomEvent('renderFormModules'));
                    })
                    .catch ( error =>  {
    
                        // document.dispatchEvent(new CustomEvent('stopWait'));
    
                        if(error.status == '422'){
        
                            error.json().then(jsonError => {

                                let errors = jsonError.errors;      
                                let errorMessage = '';
            
                                Object.keys(errors).forEach(function(key) {
                                    errorMessage += '<li>' + errors[key] + '</li>';
                                })
                
                                document.dispatchEvent(new CustomEvent('message', { 
                                    detail: {  
                                        message: errorMessage,  
                                        type: 'error'
                                    }
                                }));
                            })   
                        }
    
                        if(error.status == '500'){
                            console.log(error);
                        };
                    });
                };
        
                sendPostRequest();
            });
        });
    }

}



