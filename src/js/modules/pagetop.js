//ページトップ
module.exports = function(str){
    var scroll_y = 360;
    var pagetop = document.querySelector('#pagetop');
    window.addEventListener(str,function(){
        if(window.scrollY >= scroll_y){
            pagetop.classList.add('pagetop-open');
        }else{
            pagetop.classList.remove('pagetop-open');
        }
    });

    pagetop.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
};