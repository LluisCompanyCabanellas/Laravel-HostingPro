
export let botonSumarRestar = () => {

 
    let pluses = document.querySelectorAll(".plus");
    let minuses = document.querySelectorAll(".minus");

    pluses.forEach(plus => {
        plus.addEventListener("click", () => {
    
            console.log(plus.parentNode.querySelector('.plus-minus-input'));

            let input = plus.parentNode.querySelector('.plus-minus-input')
            input.value = parseInt(input.value) + 1;
            
        });
    });
        
    minuses.forEach(minus=> {

        minus.addEventListener("click", () => {

            let input = minus.parentNode.querySelector('.plus-minus-input')

             if(input.value > 1){
                input.value = (parseInt(input.value)) - 1;
             }
        });
    });
}


