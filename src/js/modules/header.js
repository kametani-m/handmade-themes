//headerのスクロールによる色変化
module.exports = function(str){
    var scroll_y = 360;
    var header = document.querySelector('header');
    window.addEventListener(str,function(){
        if(window.scrollY >= scroll_y){
            header.classList.add('header-toggle');
        }else{
            header.classList.remove('header-toggle');
        }
    });
};