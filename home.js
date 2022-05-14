let theme= document.getElementById('sombre').addEventListener('click',function(){
    page=document.getElementsByClassName('page');
    for(theme of page){
        theme.style.backgroundColor="#111";
    }
});
theme();