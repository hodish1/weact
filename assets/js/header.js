
(function(){

    function openCloseMenu(){
        var menu = document.querySelector('.menu');
        var shadow = document.querySelector('.shadow');
        menu.classList.toggle('menu-open');
        shadow.classList.toggle('shadow-open');
        shadow.classList.toggle('shadow-close');
    }
    
    function openCloseCat(ele){
        
        var arrows = document.querySelectorAll('.arrow-cat');
        arrows.forEach(function(arrow){
            arrow.classList.remove('arrow-cat-open');
        });
        var cats = document.querySelectorAll('.cat');
        cats.forEach(function(cat){
            cat.classList.remove('cat-open');
        });
    
        //open specific category
        var cat = ele.parentNode;
        var arrow = cat.querySelector('.arrow-cat');
        cat.classList.toggle('cat-open');
        arrow.classList.toggle('arrow-cat-open');
        
    }
    
    document.querySelectorAll('.cat').forEach(function(ele){
        ele.style.maxHeight = document.querySelector('.cat-name').offsetHeight + 5;
    });

    var cats = document.querySelectorAll('.cat-name');
    var arrows = document.querySelectorAll('.arrow-cat');
    var ham = document.querySelector('.ham');
    var x_menu = document.querySelector('.x-menu');

    cats.forEach(function(cat){
        cat.addEventListener('click',function(e){
            openCloseCat(this);
        });
    })

    arrows.forEach(function(arrow){
        arrow.addEventListener('click',function(e){
            openCloseCat(this);
        });
    })

    document.addEventListener('click',function(e){
        var eleId = e.target.id;
        if(eleId === "shadow" ){
            openCloseMenu();
        }
    })

    ham.addEventListener('click', function(){
        openCloseMenu();
    });

    x_menu.addEventListener('click', function(){
        openCloseMenu();
    });

})()





