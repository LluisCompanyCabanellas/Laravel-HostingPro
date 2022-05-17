export let message = () => {

    document.addEventListener("message", (event =>{


    let notification = document.querySelector(".notification");
    let message = document.querySelector(".notification-message")

    
    message.innerHTML = event.detail.text;
    notification.classList.add(event.detail.type);


    setTimeout(function(){
        notification.classList.remove(event.detail.type);
    }, 5000)

}));

}





