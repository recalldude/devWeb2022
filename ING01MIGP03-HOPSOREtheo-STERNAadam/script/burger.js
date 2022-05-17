let burgerEl = document.querySelector('.sidebar-label');
let test = document.getElementById('test')
let checkEl = document.getElementById('sidebar-burger');
console.log(checkEl)
console.log(burgerEl.innerHTML);

checkEl.addEventListener("change", function(){
    if(!this.checked) {
        burgerEl.innerHTML = ("<i class='bx bx-menu-alt-left' id='sidebar-btn'></i>");
       
    } else {
      burgerEl.innerHTML = ("<i class='bx bx-menu'  id='sidebar-btn'></i>");
        
    }
})