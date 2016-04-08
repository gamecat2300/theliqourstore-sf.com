(function ($) {
    $(document).ready(function () {
        $('nav').localScroll();
        // Sticky nav
        $(window).on('scroll', function () {
            if ($(this).scrollTop() > 50 && !$('nav').hasClass('inview'))
                $('nav').stop().addClass('inview').animate({ 'top': 0 }, 'slow');
            else if ($(this).scrollTop() < 50 && $('nav').hasClass('inview'))
                $('nav').stop().removeClass('inview').animate({ 'top': -50 }, 'slow');
        })

        var delay = 5000;
        var transition = 1000;
        var path = '/img/';

        $('nav a').on('click', function() {

    var scrollAnchor = $(this).attr('data-scroll'),
        scrollPoint = $('section[data-anchor="' + scrollAnchor + '"]').offset().top - 28;

    $('body,html').animate({
        scrollTop: scrollPoint
    }, 500);

    return false;

})
//Instagram//

bcr_mig(
    ins_id = 1702008206, // your user_id
    ins_token = '1702008206.004528c.3f9b86fc128947bd9b71d26d68bc7e97' // your token
);

$(".ins_popup").fancybox({
    openEffect : 'fade',
    closeEffect : 'fade'
});

$("#back-top").hide();
    
    // fade in #back-top
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('#back-top').fadeIn();
            } else {
                $('#back-top').fadeOut();
            }
        });

        // scroll body to 0px on click
        $('#back-top a').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });

$(window).scroll(function() {
    var windscroll = $(window).scrollTop();
    if (windscroll >= 100) {
        $('nav').addClass('fixed');
        $('.outwrapper section').each(function(i) {
            if ($(this).position().top <= windscroll - 20) {
                $('nav a.active').removeClass('active');
                $('nav a').eq(i).addClass('active');
            }
        });

    } else {

        $('nav').removeClass('fixed');
        $('nav a.active').removeClass('active');
        $('nav a:first').addClass('active');
    }

}).scroll();
// Build our slideshow //
        $('.image-block').each(function () {
            var imageBlock = $(this),
                imageArr = [];

            $('span', imageBlock).each(function () {
                imageArr.push($(this).data('image'));
            })

            // Loop through the resultant array to show the images
            var i = 0;
            var totalImages = imageArr.length;

            function loop() {
                var suffix = ".jpg";

                if (Modernizr.touch)
                    suffix = "-mobile.jpg";
                else if ($(window).width() < 1400)
                    suffix = "-sml.jpg";


                // Set the image path and suffix
                var currentImage = path + imageArr[i] + suffix;

                // Preload the image
                $.imgpreload(currentImage,
                {
                    all: function () {
                        var targetSpan = $(':nth-child(' + (i + 1) + ')', imageBlock);
                        targetSpan.css('background-image', 'url(' + currentImage + ')');

                        if (!Modernizr.touch) {
                            targetSpan.parallax("50%", 0.1);
                        }

                        $('span:not(:nth-child(' + (i + 1) + '))', imageBlock).animate({ opacity: 0 }, transition);
                        targetSpan.animate({ opacity: 1 }, transition);
                    }
                });

                i++;

                if (i >= totalImages)
                    i = 0;


            }

            setInterval(loop, delay);

            loop();



        });

        $('.sample-menus a').hover(
            function () {
                $(this).animate({ 'background-color': '#666666' });
                if ($(this).data('price')) {
                    $(this).data('text', $(this).text());
                    $(this).text($(this).data('price'));
                }
            },
            function () {
                $(this).animate({ 'background-color': '#333333' })
                if ($(this).data('price'))
                    $(this).text($(this).data('text'));
            });
        $('.sample-menus a').fancybox({ type: 'ajax', fixed: true });

        $('#enquiry').submit(function (e) {
            e.preventDefault();
            $.post('/api/contact', $(this).serialize(), function (d) {
                switch (d) {
                    case "1":
                        formResponse("Thank you for your message, we will get back to you shortly.", 10000);
                        break;
                    case "-1":
                        formResponse('There was an error submitting your form, please make sure ALL fields are filled in.');
                        break;
                    case "-500":
                        formResponse("Ooops, we seem to have encountered an error in submitting your enquiry. Please try again or alternatively please telephone us on 415-359-7606");
                        break;
                }
            });
        });

        $( "#dialog_trigger" ).click(function() {
$( "#dialog" ).dialog( "open" );
});
$("#dialog").dialog({
    autoOpen: false,
    position: 'center' ,
    title: 'Book Now',
    draggable: false,
    width : 960,
    height : 750,
    resizable : true,
    modal : true,
});


        function formResponse(m,t) {
            var p = $('<p/>', { text: m, 'class': 'form-message' }).appendTo($('#enquiry'));
            if (Modernizr.touch)
                p.show(function () {
                    var $p = $(this);
                    setTimeout(function () { $p.hide(); }, t || 5000);
                });
            else
                p.fadeIn(500, function () {
                    var $p = $(this);
                    setTimeout(function () { $p.fadeOut(); }, t || 5000);
                });
        }

    });
})(jQuery);