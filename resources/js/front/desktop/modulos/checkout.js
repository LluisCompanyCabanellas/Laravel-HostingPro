export let renderCheckout = () => {

    let mainContainer = document.querySelector("main");  
    let payConfirmation = document.querySelector(".pay-confirmation");
    let forms = document.querySelectorAll(".front-form");

    document.addEventListener("checkout",( event =>{
        
        renderCheckout();
        
    }), {once: true});
  
    if(payConfirmation) {
                
        payConfirmation.addEventListener('click', (event) => {

            event.preventDefault();

            forms.forEach(form => { 

                let data = new FormData(form); 
                let url = form.action;

                let sendOrderRequest = async () => {
                        
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
                                                    
                        document.dispatchEvent(new CustomEvent('renderProductModules'));
                    })
                    .catch ( error => {

                        if(error.status == '500'){
                            console.log(error);

                        }

                    });
                }

                sendOrderRequest();
            });

        });
    }    
}  

