$(function() {
    $('.toggler').click(function() {
        $(this).find('show').slideToggle();
    });
});

$(document).ready(function() {
  $('#media').carousel({
    pause: true,
    interval: false,
  });
});