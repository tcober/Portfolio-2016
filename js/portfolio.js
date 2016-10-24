/* This is all horrifying I know. Am working on it :) */
(function(w, d, $) {
  //Ajax load the item content
  $(".loader").on("click", function() {
    var title = $(this).html();
    var url = window.location + $(this).attr("data");
    diamonds("on");

    $(".contentHolder").load(url, function(response, status, xhr) {
      if (status == "error") { alert("So Sorry! You can wait a sec or reload. I am working to fix this."); }
      $(".portimages").fadeToggle(0);
      $(".description h3").append(title);
      scrollSize();
      diamonds("off");
      $(".worklist, .portdescription").fadeToggle(150);
      close();
    });
  });

  //Function for close button of portfolio item
  var close = function() {
    $(".closer").on("click", function() {
      $(".portdescription, .portimages").remove();
      $(".portimages, .portdescription").toggle();
      $(".worklist").toggle();
      $(".description h3").empty();
    })
  }

  //Function for diamond animation
  var diamonds = function(onOff) {
    $(".design, .worklist").toggleClass("outside");
    $(".music, .code, .name").toggleClass("inside");
    if(onOff == "on") {
      $(".diamond").attr("class", "diamond diamondchange");
    } else if (onOff == "off") {
      $(".diamond").attr("class", "diamond");
    }
  }

  //Function for sizing items on scroll
  var scrollSize = function() {
    $(w).scroll(function(i) {
      var scrollVar = $(w).scrollTop();
      var scrollVarPerc = 80 + (100 - (100 - $(w).scrollTop() / 10)) + "%";
      $('.portdescription').css({
        'opacity': (100 - scrollVar) / 100
      });
      $('.portimages').css("width", scrollVarPerc);
    });
  }

  //Function for music closer
  $(".musicCloser").on("click", function() {
    $('.player, .twitter, .menu').toggle();
    $('.music').removeClass("selected");
  });

  ///Function to change buttons
  $(".button").on("click", function() {
    var buttons = $(".button");
    if (($(this).is(".music") || $(this).is(".code")) && $('.design').is(".selected")) {
      $(".worklist, .twitter").toggle();
    }
    if ($(this).hasClass('selected') == false) {
      $(".button").removeClass("selected");
    }
    $(this).toggleClass("selected");
  });
  
  $('.music').on("click", function() {
    $('.player, .twitter, .menu').toggle();
  });

  //function to toggle design list
  $(".design").on("click", function() {
    $(".worklist, .twitter").toggle();
  })

})(window, document, jQuery);
