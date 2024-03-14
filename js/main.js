//<![CDATA[
var toggles = document.getElementsByClassName("toggle");
var contentDiv = document.getElementsByClassName("content");
var icons = document.getElementsByClassName("icon");
var _loop = function _loop(i) {
  toggles[i].addEventListener("click", function () {
    if (parseInt(contentDiv[i].style.height) != contentDiv[i].scrollHeight) {
      contentDiv[i].style.height = contentDiv[i].scrollHeight + "px";
      toggles[i].style.color = "#D93B58";
      icons[i].classList.remove("fa-plus");
      icons[i].classList.add("fa-minus");
    } else {
      contentDiv[i].style.height = "0px";
      toggles[i].style.color = "#111130";
      icons[i].classList.remove("fa-minus");
      icons[i].classList.add("fa-plus");
    }
    for (var j = 0; j < contentDiv.length; j++) {
      if (j !== i) {
        contentDiv[j].style.height = 0;
        toggles[j].style.color = "#111130";
        icons[j].classList.remove("fa-minus");
        icons[j].classList.add("fa-plus");
      }
    }
  });
};
for (var i = 0; i < toggles.length; i++) {
  _loop(i);
}
//]]>

jQuery(document).ready(function (jQuery) {
  var owl = jQuery('.owl-carousel');
  owl.owlCarousel({
    nav: true,
    loop: true,
    responsive: {
      0: {
        items: 2,
        margin: 50
      },
      400: {
        items: 2,
        margin: 40
      },
      600: {
        items: 2,
        margin: 40
      },
      960: {
        items: 3,
        margin: 20
      },
      1200: {
        items: 3,
        margin: 20
      },
      1440: {
        items: 3,
        margin: 20
      }
    }
  });

  // Mobile Header Menu
  jQuery(".nav-toggler").click(function () {
    jQuery("#navigation").toggle("slide");
    jQuery('.navbar_grid__dropdown').addClass('open');
    jQuery('body').css('overflow', 'hidden');
  });
  jQuery(".nav_close__button").click(function () {
    jQuery('.navbar_grid__dropdown').removeClass('open');
    jQuery('body').css('overflow', 'auto');
  });
});
