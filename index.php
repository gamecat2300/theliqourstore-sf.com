<?php
function sanitize_output($buffer) {
    $search = array(
        '/\>[^\S ]+/s',  // strip whitespaces after tags, except space
        '/[^\S ]+\</s',  // strip whitespaces before tags, except space
        '/(\s)+/s'       // shorten multiple whitespace sequences
    );
    $replace = array(
        '>',
        '<',
        '\\1'
    );
    $buffer = preg_replace($search, $replace, $buffer);
    return $buffer;
}
ob_start("sanitize_output");
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>The Liquor Store</title>
    <meta name="Description" content="Global comfort foods and innovative cooking concepts by Steven J. Hubbard & Friends. With an emphasis on modern cooking techniques combined with with traditional practices. A popup based in San francisco Ca.">
    <meta name="Keywords" content="pop-up, san francisco, global comfort food, restaurant,steven hubbard,steve,hubbard,private pop-up,comfort,food,the liqour store,the liqour store ssan francisco">
    <link rel="alternate" type="application/rss+xml" title="The Liquor Store San Francisco &raquo; Feed" href="//www.theliquorstore-sf.com/feed/" />
<!-- IE Mobile 10.0 rendering bug fix -->
    <script>(function(){if("-ms-user-select"in document.documentElement.style&&navigator.userAgent.match(/IEMobile\/10\.0/)){var a=document.createElement("style");a.appendChild(document.createTextNode("@-ms-viewport{width:auto!important}"));document.getElementsByTagName("head")[0].appendChild(a)}})();</script>
    <meta charset="utf-8">
    <meta name="revisit-after" content="3 days" />
    <meta property="og:type" content="website" />
    <link rel="stylesheet" href="css/main.css" type="text/css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css">
    <script src="js/modernizr-2.6.2.js"></script>
    <!--link type="text/css" rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"/ -->
    <link rel='canonical' href='//www.theliquorstore-sf.com/' />
    <link rel='shortlink' href='//www.theliquorstore-sf.com/' />
    <link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-60318671-1', 'auto');
  ga('send', 'pageview');
</script>
</head>
<body>
    <!--h1 style="display:none">The Liqour Store</h1 -->
    <div>
        <nav>
            <ul>
                <li><a href="#about-the-liqour-store">About</a></li>
                <li><a href="#eventshold">The Menu</a></li>
                <li><a href="#sample-menus">Past Events</a></li>
                <li><a href="#services">Reviews</a></li>
                <li><a href="#plating">Plating</a></li>
                <li><a href="#about-me">Chef</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
           <div class="outwrapper">
        <header id="home">
            <div class="wrapper">
               <h1 id="logo"><img src="img/theliquorstore-logo.png" title="The Liquor Store" rel="home" alt="The Liquor Store" class="mast-logo" /></h1>
            </div>
        </header>
        <div class="image-block b1">
             <span data-image="bannerImages/kaosoi">
            </span>
             <span data-image="bannerImages/sayhello">
            </span>
             <span data-image="bannerImages/samosa">
            </span>
             <span data-image="bannerImages/thesea">
            </span>
             <span data-image="bannerImages/boston">
            </span>
             <span data-image="bannerImages/tartar">
            </span>
            <span data-image="bannerImages/rockfish">
            <!--div class="description">
                <h2>I'm gonna make him an offer he can't refuse</h2>
                <p>Farfalle + Uni-Butter + Caviar + Porcini pop-corn</p>
            </div -->
            </span>
            <span data-image="bannerImages/poke">
            </span>
            <span data-image="bannerImages/scallop">
            </span>
            <span data-image="bannerImages/babylift">
            </span>
            <!-- <div id="navigationarrows" style="position:absolute;top:10px;z-index:900">
                <div class="previous">prev</div><div id="next">next</div>
            </div> -->
        </div>
        <section id="about-the-liqour-store" class="first-child">
            <div class="wrapper">
                <h1>Private dining experiences / Global Comfort Foods</h1>
                <div class="multi-columns">
                    <div>
                        <p>
                        The Liquor Store is a theme-based private dining experience in San Francisco, our aim is to create the utmost amazing food based experience based on whatever has recently inspired us. Whether it be Mob films, South-East Asian Black OPS, The Early Roman Empire, Airplane dining circa 1968, etc.</p>
                        <p>
                          Like all good restaurants we are passionate about our ingredients. We work with great suppliers and like-minded Bay Area producers whose focus is on quality and sustainability.
                        </p>
                    </div>
                    <div>
                        <p>
                          Global comfort foods and innovative cooking concepts by Steven J. Hubbard & Friends. With an emphasis on modern cooking techniques combined with traditional practices.
                        </p>
                    </div>
                </div>
            </div>
        </section>
          <section id="events">
         <div class="image-block b2">
                        <span data-image="events/theliquorstore-a08"></span>
                        <span data-image="events/theliquorstore-08"></span>
        </div>
            <div class="wrapper" >
            <a name="shipwreck"></a>
             <br /><br /><br /><h2 name="shipwrecked">the restaurant at the end of the universe</h2><br /><br />
                <div class="space-after">
                    <div>
                        <p class="date">
                            October 15th 2016 7PM
                        </p>
                        <p style="text-align: center;">
                          7 Tastes Inspired by Interstellar Travel
                        </p>

                        <p style="text-align:center">
                        <div class="sample-menus space-after">
                            <ul>
                            <li>
                                <a href="/menus/endoftheuniverse.html"><span>The Menu</span></a>
                            </li>
                            </ul>
                        </div>
                    </p>
                    <!-- p style="text-align:center">
                        <button id="dialog_trigger" class="btn">Book Now</button>
                        <a href="//www.eventbrite.com/e/the-restaurant-at-the-end-of-the-universe-tickets-27519194652" target="_blank"><img src="//www.eventbrite.com/custombutton?eid=19201248451" alt="Eventbrite - The Great Exhibition" /></a>
                    </p-->
                    </div>
                </div>

            </div>
        </section>
        <section id="sample-menus">

            <div class="wrapper">
                <h2>Past Events</h2><br /><br />
                <div class="multi-columns">
                   <div>
                  <h3>the great exhibition</h3>
                   <p class="date">
                       September 1st 2016
                   </p>
                   <p>
                     6 Tastes Inspired by World's Fairs, Technological Utopianism, National Branding & a large Glass of Absinthe.
                   </p>

                   <p style="text-align:center">
                   <div class="sample-menus space-after">
                       <ul>
                       <li>
                           <a href="/menus/greatExhibition.html"><span>The Menu</span></a>
                       </li>
                       </ul>
                   </div>
              </div>
                <div>
                  <h3>Shipwrecked Part II</h3>
                        <p class="date">
                            October 3rd 2015 7PM
                        </p>
                        <p>
                            Just sit right back and take a trip with an 7 course tasting menu located in the Santa Cruz Mountains. 7 tastes inspired by shipwrecks in the East.
                        </p>

                        <div class="sample-menus space-after">
                            <ul>
                            <li>
                                <a href="/menus/shipwrecked2.html"><span>The Menu</span></a>
                            </li>
                            </ul>
                        </div>
                      </div>
                    </div>
                <div class="multi-columns">
                  <div>
                  <h3>Shipwrecked</h3>
                    <p class="date">
                      August 15th 2015 7PM
                    </p>
                    <p>
                      Just sit right back and take a trip with an 8 course tasting menu located in a underground open restaurant located in DogPatch. Inspired by Stories of Renegades, Castaways, Waifs, Exiles, Tropical Storms & Rum are the driving themes for tonight's event. Great Music, Mesmerizing Visuals and an Immersive and interactive environment with wonderful company.
                    </p>
                    <p style="text-align:center">
                      <div class="sample-menus space-after">
                        <ul>
                          <li>
                            <a href="/menus/shipwrecked.html"><span>The Menu</span></a>
                          </li>
                        </ul>
                      </div>
                    </p>
                   </div>


                        <div>
                        <h3>Cinematic Italian Mob Tribute Dinner</h3>
                        <p class="date">
                            March 6th 2015 7PM
                        </p>
                        <p>
                           Join us with for an evening featuring a 6 course Cinematic mob dinner at a historic underground speakeasy in Bernal Heights. This one of a kind culinary experience will highlight creative progressions and interpretations of classic mob movie scenes with a short lesson on how to fillet + serve a whole fish, a communal cheese + charcuterie + cocktail area, shared plating and great company.<!--, all of which have been designed and developed by Steven Hubbard.-->
                        </p>
                        <p style="text-align:center">
                            <div class="sample-menus space-after">
                            <ul>
                            <li>
                                <a href="/menus/diningwiththemob.html"><span>The Menu</span></a>
                            </li>
                            </ul>
                            </div>
                        </p>
                        </div>
                      </div>
     <div class="multi-columns">
                       <div>
                        <h3>Air America</h3>
                        <p class="date">
                            June 20th 2015 7PM
                        </p>
                        <p>
                            SE Asia between 1955 and 1975 played host to a variety of little-known, but big-hearted covert operations, ranging from the humanitarian to the bizarre. Join us for a seven course South East Asian tasting menu and interactive multi-media experience designed to show that even in the ugliest of times, true gestures of goodness exist, if not flourish.
                        </p>
                        <p style="text-align:center">
                            <div class="sample-menus space-after">
                            <ul>
                            <li>
                                <a href="/menus/airamerica.html"><span>The Menu</span></a>
                            </li>
                            </ul>
                            </div>
                         </p>
                        </div>



                        <div>
                        <h3>Death and Taxes</h3>
                        <p class="date">
                            April 18th 2015 7PM
                        </p>
                        <p>
                           Reward yourself with 8 courses inspired by  taxes and currencies from way back in time. Opulence and extravagance is the central theme of the evening, served with eclectic music and subtle visuals. Each course will be accompanied with a bourbon based cocktail or a well paired glass of wine.
                        </p>

                        <p style="text-align:center">
                            <div class="sample-menus space-after">
                            <ul>
                            <li>
                                <a href="/menus/deathandtaxes.html"><span>The Menu</span></a>
                            </li>
                            </ul>
                            </div>
                        </p>
                    </div>


                </div>

                </div>
                <p class="block-quote">
                    We create a completely fresh and unique menu for each event. The menus above demonstrate our past and upcoming events.</p>
                <p class="block-quote">
                    Every menu is seasonally designed to showcase the true taste and flavour of every ingredient.</p>
            </div>
        </section>
        <section id="services" class="last-child">
         <div class="image-block b2">
             <span data-image="service/theliquorstore-07a"></span>
             <span data-image="service/theliquorstore-b07"></span>
             <span data-image="service/theliquorstore-07"></span>
            <!--span data-image="theliquorstore-07a"></span -->
        </div>
            <div class="wrapper">
             <br /><br /><br /><h2>Reviews</h2><br /><br />
                <div class="multi-columns space-after">
                    <div>
                        <h3>Brad </h3>
                        <p>★★★★★<br />
                         I had a great experience. Great food, lovely cozy space. And interesting and friendly people from around the world.</p>
                    </div>
                    <div>
                        <h3>Angela M</h3>
                        <p>★★★★★<br />
                            I really enjoyed the whole experience. An intriguing venue, engaging hosts, delicious food, and great conversations with new people. And of course Steve's presentations were fantastic! Thanks for a wonderful evening.</p>
                    </div>

                </div>
                <div class="multi-columns">
                    <div>
                        <h3>Tiss</h3>
                        <p>★★★★★<br />
                           Very cool location. Hosts were warm and inviting. The food was presented beautifully and the meal was well balanced. The evening went much later than expected, but the company was great so it was more than okay. Steve came out and introduced each course with enthusiasm and humor. Really fun evening! Would do it again.</p>
                    </div>
                    <div>
                        <h3>Tiffany </h3>
                        <p>★★★★☆<br />
                          The food was wonderful and the company even better. It was a very cool, intimate space and Steve and Melanie were great hosts.</p>
                    </div>
                </div>
            </div>
        </section>
<!-- Instagram Gallery -->
        <section id="plating">
            <br /><h2>Plating</h2><br /><br />
            <div class="bcr_ins_gallery"></div>
            <br /><br />
        </section>
        <section id="about-me" class="first-child">
         <div class="image-block b2">
            <span data-image="about/about-steve-hubbard"></span>
            <span data-image="about/about-steve-hubbard1"></span>
        </div>
            <div class="wrapper">
                <h2>Chef</h2><br /><br />
                <div class="multi-columns">
                    <div>
                      <p>
                         Chef Steve Hubbard has been working in restaurant industry since he was 16 years old. Filling every role in the kitchen from line cook, Sous Chef, to Chef-de-Cuisine, Steve has overseen kitchens for many top restaurants in the Pacific Northwest. In 1995 he moved to San Francisco to study, and continued his work as a professional Sous Chef in the Mission district.
                     </p>
                    </div>
                    <div>
                        <p>
                           More recently, he has been creating and hosting underground culinary experiences, centered around time-periods, movies and other sources of inspiration. These epic dinner parties are focused on innovative fusions of global comfort foods using modern techniques combined with traditional practices.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="social">
            <div class="lets-be-social">
                <ul>
                    <li>
                        <a href="//twitter.com/liquorstoresf" target="_blank" class="twitter">Follow us on Twitter</a></li>
                    <li>
                        <a href="//www.facebook.com/theliquorstoresf" target="_blank" class="facebook">Be our Facebook friend</a></li>
                    <li>
                        <a href="//theliquorstore-sf.tumblr.com/" target="_blank" class="google">Follow us on Tumblr</a></li>
                    <li>
                        <a href="//instagram.com/TheLiquorStore_sf" target="_blank" class="instagram">Our visual likes</a></li>
                </ul>
            </div>
        </section>
        <p id="back-top">
        <a href="#top"><span></span>Back to Top</a>
    </p>
         <section id="contact">
        <footer id="contact">
            <div class="wrapper">
                <!--h2>Contact</h2 -->
                <h2>Newsletter</h2><br />
                  <!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
<div id="mc_embed_signup">
<form action="//tumblr.us10.list-manage.com/subscribe/post?u=6137ef4e036c3c7aad3abce4b&amp;id=a0d303d235" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
<div class="mc-field-group">
    <label for="mce-EMAIL">Email Address<span class="asterisk">*</span>
</label>
    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
    <label for="mce-FNAME">First Name</label>
    <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
    <label for="mce-LNAME">Last Name</label>
    <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
</div>
<div class="mc-field-group">
    <label for="mce-MMERGE3">Phone</label>
    <input type="text" value="" name="MMERGE3" class="" id="mce-MMERGE3">
</div>
    <div id="mce-responses" class="clear">
        <div class="response" id="mce-error-response" style="display:none"></div>
        <div class="response" id="mce-success-response" style="display:none"></div>
    </div>
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_6137ef4e036c3c7aad3abce4b_a0d303d235" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
            <p>
                All content &copy; 2015 The Liqour Store. Website by <a href="//www.nationalflashback.com/" target="_blank">N(f)K</a>&nbsp;&nbsp;Photography by <a href="#" rel="author">Scott Burgess + Nicholas Alv</a>.
            </p>
            </div>
        </footer>
        </section>
    </div>
    <div class="no-script">
        <div>
            <p>
                Attention: the-liqour-store Events requires Javascript. <br />
                Please <a href="//enable-javascript.com/">enable javascript</a> to use this site without issue.</p>
        </div>
    </div>
    <script src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.9.1.min.js"></script>
    <script>(window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>'));</script>
    <script src="//ajax.aspnetcdn.com/ajax/jquery.ui/1.10.3/jquery-ui.min.js"></script>
    <script>(window.jQuery || document.write('<script src="js/jquery-ui.min.js"><\/script>'));</script>
    <script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us10.list-manage.com","uuid":"6137ef4e036c3c7aad3abce4b","lid":"a0d303d235"}) })</script>
    <script src="js/jquery.localscroll-1.2.7-min.js"></script>
    <script src="js/jquery.scrollto-1.4.3.1-min.js"></script>
    <script src="js/my-instagram-galleryNew.js"></script>
    <script src="js/jquery.inview.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.imgpreload.min.js"></script>
    <script src="js/lqstr.js"></script>
</body>
</html>
