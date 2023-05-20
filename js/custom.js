// to get current year
function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    document.querySelector("#displayYear").innerHTML = currentYear;
}

getYear();

// toggle overlay menu
function openNav() {
    document.getElementById("myNav").classList.toggle("menu_width");
    document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style");
}

function closeNav() {
  document.getElementById("myNav").classList.toggle("menu_width");
  document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style");
}


// nice select
$(document).ready(function () {
    $('select').niceSelect();
});

// slick slider

$(".slider_container").slick({
    autoplay: true,
    autoplaySpeed: 2000,
    speed: 600,
    slidesToShow: 4,
    slidesToScroll: 1,
    pauseOnHover: false,
    draggable: false,
    prevArrow: '<button class="slick-prev"> </button>',
    nextArrow: '<button class="slick-next"></button>',
    responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                adaptiveHeight: true,
            },
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 420,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        }
    ]
});





// tab buttons
function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;
  
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }




//  cart design
var $addQuantity = $(".btn-quantity.plus"),
  $minusQuantity = $(".btn-quantity.minus"),
  $removeItem = $(".btn-remove");

$addQuantity.on("click", function (e) {
  e.preventDefault();
  var $item = $(this).parents(".item"),
    $quantityField = $item.find(".quantity_field"),
    currentQuantity = $quantityField.val(),
    nextQuantity = parseFloat(currentQuantity) + 1;

  $item.find(".current_quantity").html(nextQuantity);
  $quantityField.val(nextQuantity);

  calculateTotal();
});

$minusQuantity.on("click", function (e) {
  e.preventDefault();
  var $item = $(this).parents(".item"),
    $quantityField = $item.find(".quantity_field"),
    currentQuantity = $quantityField.val();
  var prevQuantity = currentQuantity <= 1 ? 0 : parseFloat(currentQuantity) - 1;

  $item.find(".current_quantity").html(prevQuantity);
  $quantityField.val(prevQuantity);

  calculateTotal();
});

$removeItem.on("click", function () {
  var $item = $(this).parents(".item");
  $item.remove();

  calculateTotal();
});

var calculateTotal = function () {
  var newSubTotal = 0;
  $(".quantity_field").each(function () {
    var quantity = $(this).val(),
      price = $(this).data("price");

    newSubTotal += parseFloat(quantity * price);
  });

  $(".sub-total .amount").html("£" + newSubTotal.toFixed(2));

  var withTax = newSubTotal * 1.2;

  var newTotal = withTax + 0;

  $(".total .amount").html("Total" + " " + "£" + newTotal.toFixed(2));
};

calculateTotal();




// side navbar


var $addQuantity = $(".btn-quantity.plus"),
  $minusQuantity = $(".btn-quantity.minus"),
  $removeItem = $(".btn-remove");

$addQuantity.on("click", function (e) {
  e.preventDefault();
  var $item = $(this).parents(".item"),
    $quantityField = $item.find(".quantity_field"),
    currentQuantity = $quantityField.val(),
    nextQuantity = parseFloat(currentQuantity) + 1;

  $item.find(".current_quantity").html(nextQuantity);
  $quantityField.val(nextQuantity);

  calculateTotal();
});

$minusQuantity.on("click", function (e) {
  e.preventDefault();
  var $item = $(this).parents(".item"),
    $quantityField = $item.find(".quantity_field"),
    currentQuantity = $quantityField.val();
  var prevQuantity = currentQuantity <= 1 ? 0 : parseFloat(currentQuantity) - 1;

  $item.find(".current_quantity").html(prevQuantity);
  $quantityField.val(prevQuantity);

  calculateTotal();
});

$removeItem.on("click", function () {
  var $item = $(this).parents(".item");
  $item.remove();

  calculateTotal();
});

var calculateTotal = function () {
  var newSubTotal = 0;
  $(".quantity_field").each(function () {
    var quantity = $(this).val(),
      price = $(this).data("price");

    newSubTotal += parseFloat(quantity * price);
  });

  $(".sub-total .amount").html("£" + newSubTotal.toFixed(2));

  var withTax = newSubTotal * 1.2;

  var newTotal = withTax + 0;

  $(".total .amount").html("Total" + " " + "£" + newTotal.toFixed(2));
};

calculateTotal();




  $(function()
  {
    
      $(".minus1").click(function()
      {
          var currentVal = parseInt($(this).prev(".qty").val());
          if (currentVal != NaN)
          {
              if(currentVal > 0){
                      $(this).prev(".qty").val(currentVal - 1);
                  }
  
          }
      });

      $(".add1").click(function()
      {
          var currentVal = parseInt($(this).next(".qty").val());
          if (currentVal != NaN)
          {
              $(this).next(".qty").val(currentVal + 1);
          }
      });
  
  });

  


  // form
  $(document).ready(function() {
    return $('.login').click(function(event) {
      if (false) {
  
      } else {
        return $('.state').html('<br><i class="fa fa-ban"></i><br><h2>Error</h2>The email or password you entered is incorrect, please try again.').css({
          color: '#eb5638'
        });
      }
    });
  });
  




  // new tabs buttons
  function openCity(evt, cityName) {
    var i, tabcontents, tablinkss;
    tabcontent = document.getElementsByClassName("tabcontents");
    for (i = 0; i < tabcontents.length; i++) {
      tabcontents[i].style.display = "none";
    }
    tablinkss = document.getElementsByClassName("tablinkss");
    for (i = 0; i < tablinkss.length; i++) {
      tablinkss[i].className = tablinkss[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }






  // add to cart design
  