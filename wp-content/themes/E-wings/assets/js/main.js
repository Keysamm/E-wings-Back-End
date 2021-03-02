
$('#toggle2').click(function () {
  $(this).toggleClass('active');
  $('#overlay').toggleClass('open');
});


console.log("1123");


$('#headingOne1').click(function (e) {
  e.preventDefault()
  $(this).find('.arrow').toggleClass('active');
});

$('#headingTwo2').click(function (e) {
  e.preventDefault()
  $(this).find('.arrow').toggleClass('active');
  $('#headingTwo').toggleClass('active');
});

$('#headingTwo').click(function (e) {
  e.preventDefault()
  $(this).find('.arrow').toggleClass('active');
});

$('#headingFour').click(function (e) {
  e.preventDefault()

  $(this).find('.arrow').toggleClass('active');
});

$('#headingThree4').click(function (e) {
  e.preventDefault()

  $(this).find('.arrow').toggleClass('active');
});

$('#headingThree6').click(function (e) {
  e.preventDefault()

  $(this).find('.arrow').toggleClass('active');
});

$('#headingFour123').click(function (e) {
  e.preventDefault()

  $(this).find('.arrow').toggleClass('active');
});

$('#headingThree7').click(function (e) {
  e.preventDefault()
  $(this).find('.arrow').toggleClass('active');
});

let linkNav = document.querySelectorAll('a.menu-lists__link, a.how__go, a.how__work, a.order-link'), //выбираем все ссылки к якорю на странице
  V = 0.3;  // скорость, может иметь дробное значение через точку (чем меньше значение - тем больше скорость)
for (var i = 0; i < linkNav.length; i++) {
  linkNav[i].addEventListener('click', function (e) { //по клику на ссылку
    e.preventDefault(); //отменяем стандартное поведение
    var w = window.pageYOffset,  // производим прокрутка прокрутка
      hash = this.href.replace(/[^#]*(.*)/, '$1');  // к id элемента, к которому нужно перейти
    t = document.querySelector(hash).getBoundingClientRect().top,  // отступ от окна браузера до id
      start = null;
    requestAnimationFrame(step);  // подробнее про функцию анимации [developer.mozilla.org]
    function step(time) {
      if (start === null) start = time;
      var progress = time - start,
        r = (t < 0 ? Math.max(w - progress / V, w + t) : Math.min(w + progress / V, w + t));
      window.scrollTo(0, r);
      if (r != w + t) {
        requestAnimationFrame(step)
      } else {
        location.hash = hash  // URL с хэшем
      }
    }
  }, false);
}


$('#chk, #chk2').click(function () {
  if ($(this).is(':checked')) {
    $('#chk, #chk2').not(this).prop('checked', false);
  }
});


function countFunc(count) {
  let btnPlus = count.querySelector('.plus');
  let btnMinus = count.querySelector('.min');
  let field = count.querySelector('#count1');
  let fieldValue = parseFloat(field.value, 10);

  btnMinus.addEventListener('click', function (e) {
    e.preventDefault()
    if (fieldValue > 0) {
      fieldValue--;
      field.value = fieldValue;
    } else {
      return 1;
    }
  });
  btnPlus.addEventListener('click', function (e) {
    e.preventDefault()
    if (fieldValue == 10) {
      btnPlus.prop('disabled', true)
    }
    fieldValue++;
    field.value = fieldValue;
  });

}
var counts = document.querySelectorAll('.count-sam');
counts.forEach(countFunc);



function countFunc1(count) {
  let btnPlus1 = count.querySelector('.plus-1');
  let btnMinus1 = count.querySelector('.min-1');
  let field1 = count.querySelector('#count2');
  let fieldValue1 = parseFloat(field1.value, 10);

  btnMinus1.addEventListener('click', function (e) {
    e.preventDefault()
    if (fieldValue1 > 0) {
      fieldValue1--;
      field1.value = fieldValue1;
    } else {
      return 1;
    }
  });
  btnPlus1.addEventListener('click', function (e) {
    e.preventDefault()
    if (fieldValue1 == 10) {
      btnPlus1.prop('disabled', true)
    }
    fieldValue1++;
    field1.value = fieldValue1;
  });

}
var counts1 = document.querySelectorAll('.count-sam-1');
counts1.forEach(countFunc1);



$(document).ready(function () {
  $(".button a").click(function () {
    $(".overlay").fadeToggle(200);
    $(this).toggleClass('btn-open').toggleClass('btn-close');
  });
});
$('.overlay').on('click', function () {
  $(".overlay").fadeToggle(200);
  $(".button a").toggleClass('btn-open').toggleClass('btn-close');
  open = false;
});


$(function () {

  // функция с параметрами idModal1 (1 модальное окно) и idModal2 (2 модальное окно)
  var twoModal = function (idModal1, idModal2) {
    var showModal2 = false;
    // при нажатии на ссылку в idModal2 устанавливаем переменной showModal2 значение равное true и закрываем idModal1
    $('[href="' + idModal2 + '"]').click(function (e) {
      e.preventDefault();
      showModal2 = true;
      $(idModal1).modal('hide');
    });
    // после закрытия idModal1, если значение showModal2 равно true, то открываем idModal2
    $(idModal1).on('hidden.bs.modal', function (e) {
      if (showModal2) {
        showModal2 = false;
        $(idModal2).modal('show');
      }
    });
    // при закрытии idModal2 открываем idModal1
    // $(idModal2).on('hidden.bs.modal', function (e) {
    //   $(idModal1).modal('show');
    // });
  };

  twoModal('#modal-1', '#modal-2');
  twoModal('#modal-1', '#modal-5');
  twoModal('#modal-3', '#modal-4');

});


$(function () {

  // функция с параметрами idModal1 (1 модальное окно) и idModal2 (2 модальное окно)
  var twoModal = function (idModal1, idModal2) {
    var showModal2 = false;
    // при нажатии на ссылку в idModal2 устанавливаем переменной showModal2 значение равное true и закрываем idModal1
    $('[href="' + idModal2 + '"]').click(function (e) {
      e.preventDefault();
      showModal2 = true;
      $(idModal1).modal('hide');
    });
    // после закрытия idModal1, если значение showModal2 равно true, то открываем idModal2
    $(idModal1).on('hidden.bs.modal', function (e) {
      if (showModal2) {
        showModal2 = false;
        $(idModal2).modal('show');
      }
    });
    // при закрытии idModal2 открываем idModal1
    $(idModal2).on('hidden.bs.modal', function (e) {
      $(idModal1).modal('hide');
    });
  };

  twoModal('#modal-1', '#modal-2');
  twoModal('#modal-1', '#modal-5');
  twoModal('#modal-3', '#modal-4');
});

const hamburger = document.querySelector(".hamburger");
const menu = document.querySelector("menu");

if (hamburger) {
  hamburger.onclick = () => {
    hamburger.classList.toggle("active");
    menu.classList.toggle("active");
  }
}

document.querySelectorAll("menu a").forEach((link) => {
  link.onclick = () => {
    hamburger.classList.remove("active");
    menu.classList.remove("active");
  }
});