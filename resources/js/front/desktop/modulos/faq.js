
export let faq = () => {
  

  let preguntas = document.querySelectorAll(".faq");


  document.addEventListener("faqs",( event =>{
          
      faq();
      
  }), {once: true});

  preguntas.forEach((event) => {

    event.addEventListener("click", () => {

      if (event.classList.contains("active"))  {
        event.classList.remove("active");
      } else {

        event.classList.add("active");
      }


    });

  });

}
