var img = ['banner.jpg', 'banner2.jpg', 'banner3.jpg'];
var url = "view/image/";
var curentIndex = 0;
var playInterval;



function nextImg() {
    if (curentIndex < img.length - 1) {
        curentIndex++;
        document.querySelector('#slideshow').src = url + img[curentIndex];
    } else {
        curentIndex = 0;
        document.querySelector('#slideshow').src = url + img[curentIndex];
    }
}

setInterval(nextImg, 2000);



document.addEventListener("DOMContentLoaded", function () {
    var value = document.querySelectorAll(".value");
    var cong = document.querySelectorAll(".cong");
    var tru = document.querySelectorAll(".tru");


    cong.forEach(function (cong, index) {
        cong.addEventListener("click", function () {

            var currentValue = parseInt(value[index].value);
            if(currentValue < 10){
            value[index].value = currentValue + 1;
            }else{
                value[index].value = 10;
            };
        });
    });


    tru.forEach(function (tru, index) {
        tru.addEventListener("click", function () {
            var currentValue = parseInt(value[index].value);
            if (currentValue > 1) {
                value[index].value = currentValue - 1;
            }else {
                value[index].value = 1;
            }
        });
    });
});


