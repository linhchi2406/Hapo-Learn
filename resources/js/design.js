$("#btn-mess").click(function() {
    $("#chat").toggle();
  });

$("#close-btn").click(function() {
  $("#chat").hide();
});

$(document).ready(function(){
  $('#header-button').click(function() {
    $('#icon').toggleClass('fa-times');
    $('#icon').toggleClass('fa-bars');
  });

  $('.fb-content').slick({
    centerMode: false,
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 2,
    autoplay: true,
    autoplaySpeed : 2000,
    pauseOnFocus: true,
    pauseOnHover: true,
    prevArrow: $('.next-left'),
    nextArrow: $('.next-right'),
      responsive: [
        {
          breakpoint: 980,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
  });
});

var li_elements = document.querySelectorAll(".list-title ul li");
var item_elements = document.querySelectorAll(".item");
for (var i = 0; i < li_elements.length; i++) {
  li_elements[i].addEventListener("click", function() {
    li_elements.forEach(function(li) {
      li.classList.remove("active");
    });
    this.classList.add("active");
    var li_value = this.getAttribute("data-li");
    item_elements.forEach(function(item) {
      item.style.display = "none";
    });
    if (li_value == "") {
      document.querySelector("." + li_value).style.display = "block";
    } else if (li_value == "teacher") {
      document.querySelector("." + li_value).style.display = "block";
    } else if (li_value == "review") {
      document.querySelector("." + li_value).style.display = "block";
    } else if (li_value == "lesson") {
      document.querySelector("." + li_value).style.display = "block";
    } else if (li_value == "program") {
      document.querySelector("." + li_value).style.display = "block";
    } else {
      console.log("");
    }
  });
}
