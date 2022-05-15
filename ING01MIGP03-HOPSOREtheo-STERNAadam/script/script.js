let page = location.href;

let showStockButton = document.getElementById("stock-btn");
let stockContainner = document.querySelectorAll(".stock-containner");

let incremmentButton = document.querySelectorAll(".increment");
let decremmentButton = document.querySelectorAll(".decrement");


let stockEl = document.querySelectorAll(".stock");
let inputEl = document.querySelectorAll(".input-qty");





/*Permet d'activer la fonction showStock() en cliquant sur le boutton de classe '.stock-btn' */
showStockButton.addEventListener("click", showStock);


/*Permet de ne pas dépasser le stock même à l'écrit*/
for (let i=0; i < stockEl.length; i++){
   inputEl[i].addEventListener('change', function(event) {
       if (event.target.value > parseInt(stockEl[i].innerHTML)) {
           event.target.value = parseInt(stockEl[i].innerHTML);
       } else if(event.target.value < 0) {
            event.target.value = 0;
       }
   });
};

/*Pour incrémenter la qte*/
for(let i=0; i < incremmentButton.length; i++){
    incremmentButton[i].addEventListener('click', function(event) {
        let input = event.target.parentElement.children[1];
        console.log(input);
        console.log(parseInt(stockEl[i]))
        if (parseInt(input.value) + 1 == parseInt(stockEl[i].innerHTML)) {
            input.value++;
            event.target.style.opacity = "0.3";
            event.target.style.cursor = "default";  
        } else if(input.value < parseInt(stockEl[i].innerHTML)){
            input.value++;
        };
        console.log(input.value);

        if(decremmentButton[i].style.opacity != "1")
        {
            decremmentButton[i].style.opacity = "1";
            decremmentButton[i].style.cursor = "pointer"; 
        }
    });
};


/*Pour diminuer la qte*/
for(let i=0; i < decremmentButton.length; i++){
    decremmentButton[i].addEventListener('click', function(event) {
        let input = event.target.parentElement.children[1];
        if (input.value -1 == 0) {
            input.value --;
            event.target.style.opacity = "0.3";
            event.target.style.cursor = "default";
        } else if(input.value - 1 < 0) {
            event.target.style.opacity = "0.3";
            event.target.style.cursor = "default";
        }else if(input.value > 0) {
            input.value--;
        };
        

        if(incremmentButton[i].style.opacity != "1")
        {
            incremmentButton[i].style.opacity = "1";
            incremmentButton[i].style.cursor = "pointer"; 
        }
    });
};







/*permet d'afficher ou de cacher la div '.stock-containner' qui affiche le stock*/
function showStock(){
    if (stockContainner[0].style.visibility === "hidden") {
        showStockButton.innerHTML = "Hide Stock"
        for (let i=0; i < stockContainner.length; i++) {
            stockContainner[i].style.visibility = "visible";
        }
    } else {
        showStockButton.innerHTML = "Show Stock"
        for (let i=0; i < stockContainner.length; i++) {
            stockContainner[i].style.visibility = "hidden";
        }
    }   
};

