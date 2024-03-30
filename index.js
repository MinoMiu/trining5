window.onload = function () {
  var nav = document.getElementById('nav-wrapper');
  var hamburger = document.getElementById('js-hamburger');
  var blackBg = document.getElementById('js-black-bg');

  hamburger.addEventListener('click', function () {
      nav.classList.toggle('open');
  });
  blackBg.addEventListener('click', function () {
      nav.classList.remove('open');
  });
};

const swiper = new Swiper('.swiper', {
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  slidesPerView: 1.5,
  centeredSlides: true,
  spaceBetween: 10, 
  loop: true,
  navigation: {
      prevEl: '.swiper-button-prev',
      nextEl: '.swiper-button-next'
  }
});

$('.schedule_1').on('click',function(){
  $('.schedule_1').removeClass('active');
  $(this).addClass('active');
});

$('.schedule_1').on('click',function(){
  $('.content').removeClass('current');
  $(this).addClass('current');
});

$(function () {
  $(".schedule_1").on("click", function () {
    $(".current").removeClass("current");
    $(this).addClass("current");
    const index = $(this).index();
    $(".content").hide().eq(index).fadeIn(300);
  });
});

$(document).ready(function () {

  const $submitBtn = $('#js-submit')
  $('form input,form textarea').on('change', function () {
    console.log($('form input[type="text"]').val())
    console.log($('form input[type="email"]').val())
    console.log($('form select').val())
    if (
      $('form input[type="text"]').val() !== "" &&
      $('form input[type="email"]').val() !== "" &&
      $('form select').val() !== "" 
    ) {
      $submitBtn.prop('disabled', false);

    } else {
      $submitBtn.prop('disabled', true);
    }
  });

});