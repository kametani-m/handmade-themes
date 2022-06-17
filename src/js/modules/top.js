//topフワッと
module.exports = function(str){
    var top = document.querySelector('.top-main');
    window.addEventListener(str,function(){
        if(top !== null){
            top.classList.add('fadein');
        }
    });
};