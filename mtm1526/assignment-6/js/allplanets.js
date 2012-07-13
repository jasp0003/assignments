$(document).ready(function(){

$('#earth').on('click', function(){
e.prevenDefault();
$('#fillme').load('earth.html');
$('nav li').removeClass('current');
$('#earth').addClass('current');
});


$('#jupiter').on('click', function(){
e.prevenDefault();
$('#fillme').load('jupiter.html');
$('nav li').removeClass('current');
$('#jupiter').addClass('current');
});


$('#pluto').on('click', function(){
e.prevenDefault();
$('#fillme').load('pluto.html');
$('nav li').removeClass('current');
$('#pluto').addClass('current');
});


$('#mars').on('click', function(){
e.prevenDefault();

$('#fillme').load('mars.html');
$('nav li').removeClass('current');
$('#mars').addClass('current');
});

});