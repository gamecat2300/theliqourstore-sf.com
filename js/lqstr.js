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
//Active class for navigation //
	$('nav a').click(function(){
    	$('nav a').removeClass("active");
    	$(this).addClass("active");
	});
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