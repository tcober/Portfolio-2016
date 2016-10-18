/* This is all horrifying I know. Am fixing it */
(function(w, d, $) {
    //ajax load the item content
    $(".loader").on("click", function() {
        var title = $(this).html();
        var url = window.location + $(this).attr("data");
        $(".design, .worklist").addClass("outside");
        $(".music, .code, .name").addClass("inside");
        $(".diamond").attr("class", "diamond diamondchange");
        $(".contentHolder").load(url, function(response, status, xhr) {
            if (status == "error") {
                alert("So Sorry! You can wait a sec or reload. I am working to fix this.");
            }
            $(".portimages").fadeToggle(0);
            $(".description h3").append(title);
            $(".diamond").attr("class", "diamond");
            $(w).scroll(function(i) {
                var scrollVar = $(w).scrollTop();
                var scrollVarPerc = 80 + (100 - (100 - $(w).scrollTop() / 10)) + "%";
                $('.portdescription').css({
                    'opacity': (100 - scrollVar) / 100
                });
                $('.portimages').css("width", scrollVarPerc);
            })
            $(".design, .worklist").removeClass("outside");
            $(".music, .code, .name").removeClass("inside");
            $(".worklist, .portdescription").fadeToggle(150);
            $(".closer").on("click", function() {
                $(".portdescription, .portimages").remove();
                $(".portimages, .portdescription").toggle();
                $(".worklist").toggle();
                $(".description h3").empty();
            })
        });
    })
    
    //function for closer
    $(".musicCloser").on("click", function() {
        $('.player, .twitter, .menu').toggle();
        $('.music').removeClass("selected");
    })
    
    ///function to change buttons
    $(".button").on("click", function() {
        var buttons = $(".button");
        if (($(this).is(".music") || $(this).is(".code")) && $('.design').is(".selected")) {
            $(".worklist, .twitter").toggle();
        }
        if ($(this).hasClass('selected') == false) {
            $(".button").removeClass("selected");
        }
        $(this).toggleClass("selected");
    })
    $('.music').on("click", function() {
        $('.player, .twitter, .menu').toggle();
    })
    
    //function to toggle design list
    $(".design").on("click", function() {
        $(".worklist, .twitter").toggle();
    })
    
})(window, document, jQuery);