function isLoader(loader,isVisible){
    if(isVisible){
        loader.classList.remove('hidden');
    }else{
        loader.classList.add('hidden');
    }
}