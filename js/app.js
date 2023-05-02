(function(){
    const listElements = document.querySelectorAll('.menu_item--show');
    const list = document.querySelector('.menu_links');
    const menu = document.querySelector('.menu_hamburguer')

    const addClick = ()=>{
        listElements.forEach(element =>{
            element.addEventListener('click', ()=>{


                let subMenu = element.children[1];
                let height = 0;
                element.classList.toggle('menu_item--active');


                if(subMenu.clientHeight === 0){
                    height = subMenu.scrollHeight;
                }

                subMenu.style.height = `${height}px`; 
            
            });
        });
    
    }

    const deleteStyleHeight = ()=>{
        listElements.forEach(element=>{

            if(element.children[1].getAttribute('style')){
                element.children[1].removeAttribute('style');
                element.classList.remove('menu_item--active');
            }

        });
    }

    window.addEventListener('resize',()=>{
        if(window.innerWidth <= 800){
            deleteStyleHeight();
            if(list.classList.contains('menu_links--show'))
                  list.classList.remove('menu_links--show');
               

        }else{
            addClick();
        }
    
    });

    if(window.innerWidth <= 800){
        addClick();
    }

    menu.addEventListener('click',()=> list.classList.toggle('menu_links--show'));


})();



//Buscador de contenido


//Declarando variables
bars_search =       document.getElementById("ctn-bars-search");
cover_ctn_search =  document.getElementById("cover-ctn-search");
inputSearch =       document.getElementById("inputSearch");
box_search =        document.getElementById("box-search");


//Creando filtrado de busqueda

document.getElementById("inputSearch").addEventListener("keyup", buscador_interno);

function buscador_interno(){


    filter = inputSearch.value.toUpperCase();
    li = box_search.getElementsByTagName("li");

    //Recorriendo elementos a filtrar mediante los "li"
    for (i = 0; i < li.length; i++){

        a = li[i].getElementsByTagName("a")[0];
        textValue = a.textContent || a.innerText;

        if(textValue.toUpperCase().indexOf(filter) > -1){

            li[i].style.display = "";
            box_search.style.display = "block";

            if (inputSearch.value === ""){
                box_search.style.display = "none";
            }

        }else{
            li[i].style.display = "none";
        }

    }



}