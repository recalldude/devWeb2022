const lightbox = document.createElement('div');
lightbox.id = 'lightbox';
document.body.appendChild(lightbox);

const imageEl = document.querySelectorAll('.product-img img');
console.log(imageEl);
imageEl.forEach(image => {
    image.addEventListener('click', function(event){
        lightbox.classList.add('active')
        const img = document.createElement('img');
        img.src = image.src;
        console.log(img.src);
        while(lightbox.firstChild){
            lightbox.removeChild(lightbox.firstChild);
        }
        lightbox.appendChild(img);
    })
})

lightbox.addEventListener('click', function(event){
    if(event.target !== event.currentTarget)
        return;
    lightbox.classList.remove('active');
})