//header toggle btn
module.exports = function(str){
    //class切り替え
    var humburger = document.querySelector(str);
    var header = document.querySelector('header');
    //イベント指定
    humburger.addEventListener('click', function(){
        header.classList.toggle('open');
    });
    //mask実装
    var mask = document.querySelector('.mask');
    mask.addEventListener('click', function(){
        header.classList.toggle('open');
    });
};