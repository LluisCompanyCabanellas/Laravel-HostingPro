
export let renderProducts = () => {

    let mainContainer = document.querySelector("main");
    let viewButtons = document.querySelectorAll('.view-product');
    let pays = document.querySelector(".pay");
    let amount = document.querySelector(".plus-minus-input")
    
    viewButtons.forEach(viewCategory => {
 
        viewCategory.addEventListener('click', () => {
 
            let url = viewCategory.dataset.url;
 
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
    });

    if(pays) {

        pays.addEventListener("click", () => {

            if(amount.value > 0) {
                
                document.dispatchEvent(new CustomEvent('message', {
                    detail: {
                        text: 'Has añadido el producto con exito',
                        type: 'success'
                    }
                }));
            }   else {
                document.dispatchEvent(new CustomEvent('message', {
                    detail: {
                        text:'Has añadido el producto con exito',
                        type:'error'
                    }
                }));
            }
        });
    }



    viewCategory.forEach(viewCategory => {
 
        viewCategory.addEventListener('click', () => {
 
            let url = viewCategory.dataset.url;
 
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
    });

}
