window.onload = iniciar;

function iniciar(){
    document.getElementById("bot").addEventListener("click", creaImagen);
    document.getElementById("bot2").addEventListener("click", crea2Imagen);
}


var im1 = "<img src='http://dblaoficial.com/dragonball/wp-content/uploads/2018/04/2.jpg' alt=''>";
var im2 = "<img src='https://cdn140.picsart.com/313719239219201.jpg?c256x256' alt=''>";
var im3 = "<img src='https://i.imgur.com/FoHHwV9.png' alt=''>";
var im4 = "<img src='https://a.wattpad.com/useravatar/AdanLucianoEnsisoAcu.256.705342.jpg' alt=''>";
var im5 = "<img src='https://c-sf.smule.com/sf/s80/arr/77/cd/7458aaf5-2c85-404f-bca3-c1f9af2c124d.jpg' alt=''>";

var arrI = [im1, im2, im3, im4, im5];

function creaImagen(){
    var r = Math.floor(Math.random() * (5 - 0)) + 0;
    document.getElementById("im").innerHTML = arrI[r] + r;
}

function crea2Imagen(){
    var r = Math.floor(Math.random() * (5 - 0)) + 0;
    var r1 = Math.floor(Math.random() * (5 - 0)) + 0;
    document.getElementById("im2").innerHTML = arrI[r] + r;
    document.getElementById("im3").innerHTML = arrI[r1] + r1;
}