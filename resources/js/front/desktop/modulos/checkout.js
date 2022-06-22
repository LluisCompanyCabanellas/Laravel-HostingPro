export let renderCheckout = () => {

    let mainContainer = document.querySelector("main");  
    let payconfirmation = document.querySelector("pay-confirmation")

    document.addEventListener("renderProductModules",( event =>{
        renderCheckout();
    }), {once: true});


    if(payconfirmation) {
                
        payconfirmation.addEventListener('click', (event) => {

            event.preventDefault();

            let url = payconfirmation.dataset.url;
    
            let sendShowRequest = async () => {
    
                let response = await fetch(url, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                    },
                    method: 'GET', 
                })
                .then(response => {
    
                    if (!response.ok) throw response;
    
                    return response.json();
                })
                .then(json => {
    
                    mainContainer.innerHTML = json.content;
                
                    document.dispatchEvent(new CustomEvent('renderProductModules'));
                })
                .catch(error =>  {
    
                    if(error.status == '500'){
                        console.log(error);
                    }
                });
            };
    
            sendShowRequest();
     
        
        });
    }    

    
}  

