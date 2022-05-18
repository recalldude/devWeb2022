let surnameEl = document.getElementById("surname");
let nameEl = document.getElementById("name");
let mailEl = document.getElementById("email");
let messageEl = document.getElementById("message");
let selectEl = document.getElementById("categorie-select");
let radioEl = document.querySelectorAll(".radio")
let form = document.querySelector("form");




form.addEventListener("submit", function(event){
    

    let validName = checkName(nameEl);
    let validSurname = checkName(surnameEl);
    let validMail = checkMail();
    let validMessage = checkMessage();
    let validSelect = checkSelect();
    let validRadio = checkRadio();

    let validForm = validName && validSurname && validMail && validMessage && validSelect && validRadio;
    
    if(validForm) {

    }else {
        event.preventDefault();
    }
});

/* Check si au moins un des genres est selectionné */
function isChecked(radio){
    if ((radio[0].checked == false) && (radio[1].checked == false))
        return false;
    else 
        return true;
}

console.log(isChecked(radioEl))

/*Check si la valeur est vide ou non, envoie false si elle est vide et true si remplie*/
function isRequired(value){
    if (value === '')
        return false;
    else    
        return true;
}

/*Check si le mail rempli les conditions grâce à une expression régulière*/
function isMailValid(mail) {
    const reMail = /([\w-\.]+@[\w\.]+\.{1}[\w]+)/;
    return reMail.test(mail);
}

/* verifie que le nom/prénom est bien composé uniquement de lettres*/
function isNameValid(name) {
    const reName = new RegExp('[a-zA-Z]');
    return reName.test(name);
}

function isSelectValid(){
    if(selectEl.value == "")
        return false;
    else
        return true;
}


/*affiche un message d'erreur en fonction de l'input problèmatique*/ 
function error(input, message){
 let formField = input.parentElement;
 let errorText = formField.querySelector('small');
    /*ajoute la classe error (supp success) au css de la div form-field pour afficher les contours en rouge*/
 formField.classList.remove('success');
 formField.classList.add('error');
 errorText.textContent = message;

}



function success(input){
    let formField = input.parentElement;
    formField.classList.remove('error');
    formField.classList.add('success');

    let errorText = formField.querySelector('small');
    errorText.textContent = '';
}

function checkName(input) {
    let check = false;
    let name = input.value;
    if (!isRequired(name)){
        error(input, 'Please enter your name');
    } else if (!isNameValid(name)){
        error(input, 'Please enter a valid name');
    } else {
        success(input);
        check = true;
    }
    return check;
}

function checkMail(){
    let check = false;
    let mail = mailEl.value;
    if (!isRequired(mail)){
        error(mailEl, 'Please enter a mail');
    } else if (!isMailValid(mail)){
        error(mailEl, 'Please enter a valid mail');
    } else {
        success(mailEl);
        check = true;
    }
    return check;
}

function checkMessage(){
    let check = false;
    let message = messageEl.value;
    if(!isRequired(message)){
        error(messageEl, 'Please enter a message');
    } else {
        success(messageEl);
        check = true;
    }
    return check;
}

function checkSelect(){
    let check = false;
    if(!isSelectValid()){
        error(selectEl, 'Please select a message');
    } else {
        success(selectEl);
        check = true;
    }
    return check;
}

function checkRadio(){
    let check = false;
    if(!isChecked(radioEl)){
        error(radioEl[0], 'Please select a gender');
    } else {
        check = true;
        success(radioEl[0])
    }
    return check;
}