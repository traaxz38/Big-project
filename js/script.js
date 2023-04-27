$(document).ready(function(){
    $('.parallax').parallax();
    $('.modal').modal();
    $('.sidenav').sidenav();
    $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true,
    duration: 600
  });
    $(".dropdown-trigger").dropdown();
});

function prev() {
  $('.carousel.carousel-slider').carousel('prev');
}
function next() {
  $('.carousel.carousel-slider').carousel('next');
}

setInterval(next,5000)


let Countclick = 0;
let Countclick1 = 0;


$('#btn_contact').on('click', function () {
    Countclick += 1;
    if(Countclick === 3) {
        alert("Vous avez fini de jouer avec notre onglet?");
    }
});

$('#nav').on('click', function () {
    Countclick1 += 1;
    if (Countclick1 === 10) {
      alert("Vous la voulez en bleu?");
      $('nav').removeClass('black').addClass('blue lighten-2');
    }
    if (Countclick1 === 15) {
      alert("Vous la voulez en rouge?!");
      $('nav').removeClass('blue lighten-2').addClass('red darken-2');
    }
    if (Countclick1 === 20) {
      alert("Vous la voulez en en verte");
      $('nav').removeClass('red darken-2').addClass('green darken-3');
    }
    if (Countclick1 === 25) {
      alert("On va rester sur noir c'est bien");
      $('nav').removeClass('green darken-3').addClass('black');
    }
});

