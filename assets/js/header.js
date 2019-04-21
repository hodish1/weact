function openCloseMenu(){
    var menu = document.querySelector('.menu');
    var shadow = document.querySelector('.shadow');
    menu.classList.toggle('menu-open');
    shadow.classList.toggle('shadow-open');
    shadow.classList.toggle('shadow-close');
}

function openCloseCat(e){

    e.stopPropagation();

    var arrows = document.querySelectorAll('.arrow-cat');
    arrows.forEach(function(arrow){
        arrow.classList.remove('arrow-cat-open');
    });
    var cats = document.querySelectorAll('.cat');
    cats.forEach(function(cat){
        cat.classList.remove('cat-open');
    });
    //open specific category
    var cat = e.target.parentNode;
    cat.classList.toggle('cat-open');
    cat.children[0].classList.toggle('arrow-cat-open');
    console.log(cat.children[0])
    
}

(function(){

    document.querySelectorAll('.cat').forEach(function(ele){
        ele.style.maxHeight = document.querySelector('.cat-name').offsetHeight + 5;
    });

    var cats = document.querySelectorAll('.cat-name');
    cats.forEach(function(cat){
        cat.addEventListener('click',function(e){
            openCloseCat(e);
        });
    })

})();

document.addEventListener('click',function(e){
    var eleId = e.target.id;
    if(eleId === "shadow" ){
        openCloseMenu();
    }
})