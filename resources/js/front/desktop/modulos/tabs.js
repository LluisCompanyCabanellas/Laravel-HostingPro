export let tabs = () => {

    let tabs = document.querySelectorAll(".tab");
    let tabContents = document.querySelectorAll(".tab-content");

    tabs.forEach(tab =>{

        tab.addEventListener("click", () => {

            tabs.forEach(tab =>{
                tab.classList.remove("active");
            });

            tab.classList.add("active");

            tabContents.forEach(tabContent => {
            
                if(tab.dataset.seccion == tabContent.dataset.seccion) {
                    tabContent.classList.add("active");
                }
                else{
                    tabContent.classList.remove("active");
                    
                }            
            });
        });
    });

}

