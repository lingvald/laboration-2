$(function () {
  let show = 'show';

  $('input').on('checkval', function () {
    let label = $(this).next('label');
    if (this.value !== '') {
      label.addClass(show);
    } else {
      label.removeClass(show);
    }
  }).on('keyup', function () {
    $(this).trigger('checkval');
  });
});



var registerBox = document.querySelector('.register-box');
var loginBox = document.querySelector('.login-box');

window.addEventListener('click', function (e) {
  if (document.querySelector('.login-box').contains(e.target)) {
    loginBox.classList.add('zoom_in_form');
    loginBox.classList.remove('gray_form')
    registerBox.classList.add('gray_form')
  } else {
    loginBox.classList.remove('zoom_in_form');
  }
});

window.addEventListener('click', function (e) {
  if (document.querySelector('.register-box').contains(e.target)) {
    registerBox.classList.remove('gray_form')
    registerBox.classList.add('zoom_in_form');
    loginBox.classList.add('gray_form')

  } else {
    registerBox.classList.remove('zoom_in_form');
  }
});


window.addEventListener('click', function () {
  if (!$('.register-box').hasClass('zoom_in_form') && !$('.login-box').hasClass('zoom_in_form')) {
    registerBox.classList.remove('gray_form')
    loginBox.classList.remove('gray_form')
    document.body.classList.remove('darken_body');
  }
});

window.addEventListener('click', function () {
  if ($('.register-box').hasClass('zoom_in_form') || $('.login-box').hasClass('zoom_in_form')) {
    document.body.classList.add('darken_body');
  }
});

var regChildren = registerBox.children[1].children[0].children;
var logChildren = loginBox.children[1].children[0].children;
var allInputs = document.querySelectorAll('input');

$(document).ready(function () {
  for (var i = 0; i < logChildren.length; i++) {
    var inputElement = logChildren[i].children[0];
    if ($(inputElement).is(":focus")) {
      loginBox.classList.add('zoom_in_form');
      loginBox.classList.remove('gray_form');
      registerBox.classList.add('gray_form');
      document.body.classList.add('darken_body');

    }
  }
});

window.addEventListener('click', function () {
  for (var i = 0; i < regChildren.length; i++) {
    var inputElement = regChildren[i].children[0];
    if ($(inputElement).is(":focus")) {
      console.log('register');
    }
  }

  for (var i = 0; i < logChildren.length; i++) {
    var inputElement = logChildren[i].children[0];
    if ($(inputElement).is(":focus")) {
      console.log('login');
    }
  }
});

window.addEventListener("keyup", function (event) {
  if (event.keyCode === 9) {
    for (var i = 0; i < logChildren.length; i++) {
      var inputElement = logChildren[i].children[0];
      if ($(inputElement).is(":focus")) {
        loginBox.classList.add('zoom_in_form');
        loginBox.classList.remove('gray_form')
        registerBox.classList.add('gray_form')
      }
    }
    for (var i = 0; i < regChildren.length; i++) {
      var inputElement = regChildren[i].children[0];
      if ($(inputElement).is(":focus")) {
        registerBox.classList.remove('gray_form')
        registerBox.classList.add('zoom_in_form');
        loginBox.classList.add('gray_form')
      }
    }
  }

});