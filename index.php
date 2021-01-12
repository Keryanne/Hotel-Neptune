<?php
require_once("init/init.php");
require_once("init/haut-page.php");
?>

<a name="home"></a>
<form class="container">
    <div id="booking-widget">
        <div id="booking-widget-dates" class="dates">
        </div>
        <div id="booking-widget-occupancy" class="occupancy">
        </div>
        <div id="booking-widget-promo-code">
            <input type="text" placeholder="Code promotionnel" class="form-control promo-code">
        </div> 
        <div id="booking-widget-submit" class="submit">
            <a class="btn btn-primary">
                Réservez
            </a>
        </div>
        <div class="clearfix">
        </div>
    </div>     
</form>
<main class="container"> 
    <div class="central">
        <article id="hotel-overview">
            <h1 class="title">The Originals Montpellier Sud <span class='special-color'>Neptune </span> à Carnon</h1>
            <div class="description"><p>Aux portes de la petite Camargue et <strong>à deux pas de Montpellier </strong>, l'hotel Neptune vous reçoit et vous offre tout le confort que vous exigez ! L'hotel Le Neptune se situe à 300m de la plage de Carnon et 6km de l'aéroport Montpellier Méditerranée. Sa piscine, son solarium et le  <a href="https://www.letrident-restaurant.com/" style="color:#5A5A5A;">restaurant Le Trident</a> dominent le port de plaisance de Carnon. Et vous invitent à la détente. Au calme escale douceur, les <a class="lien" href="hotel-carnon/chambres-carnon.php" style="color:#5A5A5A;">53 chambres de l'Hotel The Originals Montpellier Sud Neptune</a> respirent l’air de la mer et le confort à la manière d’aujourd’hui.<br /> <br /> L'hôtel Le Neptune propose, aux entreprises, l'<a class="lien" href="seminaire-montpellier/location-salle.php" style="color:#5A5A5A;">organisation de séminaires proche de Montpellier</a>.</p></div>
        </article>    <!-- content/homeFeatured.php -->
        <section id="home-featured" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <article class="item active">
                    <figure class="image">
                        <div class="img-container">
                            <img src="https://www.hotel-neptune.fr/images/anim/ph-6.jpg?v" alt="Hôtel fermé - Ouverture le 22 avril 2021">
                        </div>
                    </figure>
                    <h2 class="title">Hôtel fermé - Date d'ouverture indéfini.</h2>
                    <div class="description"> Suite aux annonces du gouvernement français, nous avons pris la décision de prolonger la fermeture l'établissement jusqu'à nouvel ordre.
                        Nous faisons au mieux pour évaluer la situation petit à petit.</div>
                    <div class="clearfix"></div>
                </article>
                <article class="item ">
                    <figure class="image">
                        <div class="img-container">
                            <img src="https://www.hotel-neptune.fr/images/anim/ph-5.jpg?v" alt="Meilleurs Prix ! - Les plus belles vues de Montpellier !">
                        </div>
                    </figure>
                    <h2 class="title">Meilleurs Prix ! - Les plus belles vues de Montpellier !</h2>
                    <div class="description">L'Hôtel Neptune a reçus le certificat d'excellence en 2015 de Triadvisor</div>
                    <div class="clearfix"></div>
                </article>
                <article class="item ">
                    <figure class="image">
                        <div class="img-container">
                            <img src="https://www.hotel-neptune.fr/images/anim/ph-2.jpg?v" alt="Louer un bateau avec skipper">
                        </div>
                    </figure>
                    <h2 class="title">Venez profiter de notre piscine</h2>
                    <div class="description">L'hôtel met à votre disposition une piscine, n'hésitez pas à venir vous y détendre avec votre famille.
                    </div>
                    <div class="clearfix"></div>
                </article>
                <article class="item ">
                    <figure class="image">
                        <div class="img-container">
                            <img src="https://www.hotel-neptune.fr/images/anim/ph-3.jpg?v" alt="<span class='special-color'>El Pirata</span> Beach Club">
                        </div>
                    </figure>
                    <h2 class="title"><span class='special-color'>Le<span> Trident</h2>
                    <div class="description">Notre restaurant Le Trident, dispose d'un site web officiel. Vous pouvez lui rendre visite ici.</div>
                    <a class="btn readmore btn-dark" target="_blank" href="https://www.letrident-restaurant.com/">
                    en savoir plus</a>
                    <div class="clearfix"></div>
                </article>
                <article class="item ">
                    <figure class="image">
                        <div class="img-container">
                            <img src="https://www.hotel-neptune.fr/images/anim/ph-1.jpg?v" alt="Best of the <span class='special-color'>World</span>">
                        </div>
                    </figure>
                    <h2 class="title">Promotions toute <span class='special-color'>l'année</span></h2>
                    <div class="description">Venez profiter de promotions toute l'année !</div>
                    <div class="clearfix"></div>
                </article>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#home-featured" data-slide-to="0" class="active"></li>
                <li data-target="#home-featured" data-slide-to="1" class=""></li>
                <li data-target="#home-featured" data-slide-to="2" class=""></li>
                <li data-target="#home-featured" data-slide-to="3" class=""></li>
                <li data-target="#home-featured" data-slide-to="4" class=""></li>
            </ol>
        </section>
    </div>
</main>
<nav id="social-networks">
    <ul>
        <li>
            <a href="https://www.facebook.com/hotelneptunecarnon" target="_blank" title="Suivez-nous à Facebook">
                <span class="rho-icon-facebook"></span>
            </a>
        </li>
        <li>
            <a href="https://twitter.com/hotelneptune" target="_blank" title="Suivez-nous à Twitter">
                <span class="rho-icon-twitter"></span>
            </a>
        </li>   
    </ul>
</nav>

<?php 
require_once("init/bas-page.php");
?>

<!-- FIN DU HTML-->

<!-- JAVASCRIPT-->
<script type="text/javascript" src="js/project-dependencies.min.js"></script>
<script type="text/javascript">
    (function (window, document, undefined ) {

        window.gna = window.gna || {}; // Init the main object
        var gna = window.gna; // Init the locale reference to the main object
        gna.projectSettings = gna.projectSettings || {}; // Init the settings object
        gna.projectSettings.cookies = gna.projectSettings.cookies || {}; // Init the settings object
        gna.projectSettings.destinations = gna.projectSettings.destinations || {}; // Init the settings object

        // ------------------------------
        // PROJECT SETTINGS
        // ------------------------------
        gna.projectSettings.idm =               '4';
        gna.projectSettings.idm2 =              'fr';
        gna.projectSettings.url =               '';
        gna.projectSettings.url_secure =        '';
        gna.projectSettings.codi_setup =        '1';
        gna.projectSettings.pagina =            '0';
        gna.projectSettings.bookingRequestUrl = '';

        // ------------------------------
        // DESTINATIONS SETTINGS
        // ------------------------------

    })( window, document );
</script>
<script type="text/javascript">
(function ($, undefined ) {
    if(!$.fn.gnaScreenUtils) return;
    $('body').gnaScreenUtils();
})( jQuery );
</script>
<script type="text/javascript">

    // LEADING ARTICLE IMAGE
    // =============================================
    (function ($, undefined ) {
        // Break if the required plugins are not present
        if (!$.fn.gnaImageUtils) return;
        // Init the selectors
        var $image = $('article.leading-article .img-container');
        // Break if the selectors are not present or empty
        if (!$image || !$image.length) return;
        // Attach image resizing
        $image.gnaImageUtils();
    })( jQuery );

    // CENTRAL SECTION IMAGES
    // =============================================
    (function ($, undefined ) {
        // Break if the required plugins are not present
        if (!$.fn.gnaImageUtils) return;
        // Init the selectors
        var $images = $('section.central .img-container');
        // Break if the selectors are not present or empty
        if (!$images || !$images.length) return;
        // Attach image resizing
        $images.gnaImageUtils();
    })( jQuery );

</script>
<script type="text/javascript">
(function ($, undefined ) {
    if(!$.fn.mmenu) return;
    var $mobileMenu = $('#main-menu-mobile');
    if (!$mobileMenu || !$mobileMenu.length) return;
    $mobileMenu.mmenu({
        classes: "mm-slide mm-light"
    },{
        classNames: {
            selected: "active"
        }
    });
    // Remove mm-slideout class on mm-page
    window.setTimeout(function () {
        $('body > .mm-page').removeClass('mm-slideout');
    }, 100);
})( jQuery );
</script>
<script type="text/javascript">
(function ($, undefined ) {
    // Break if the required plugins are not present
    if (!$.fn.carousel || !$.fn.gnaImageUtils) return;
    // Init the selectors
    var $slider = $('#header-slider'),
        $sliderImages = $('#header-slider .slider-image');
    // Break if the selectors are not present or empty
    if (!$slider || !$slider.length) return;
    if (!$sliderImages || !$sliderImages.length) return;
    // Attach image resizing on slides
    $sliderImages.gnaImageUtils();
    // Refresh image resizing on slide & slid events
    $slider.on('slide.bs.carousel', function () {
        window.setTimeout(function () {
            $sliderImages.gnaImageUtils('redraw');
        }, 100);
    });
    $slider.on('slid.bs.carousel', function () {
        $sliderImages.gnaImageUtils('redraw');
    });
})( jQuery );
</script>
<script type="text/javascript">
(function ($, window, document, undefined ) {

    function hasInvalidChildren(occupancy){
        var error = false;
        occupancy.roomsOccupancy.forEach(function(room){
            if (room.childAges.includes('-')) error = true;
        });
        return error;
    }

    // NAMESPACES, prevent early calls
    // ------------------------------------
    window.rho = window.rho || {}; // Init the main object
    var rho = window.rho; // Init the locale reference to the main object
    rho.userSelection = rho.userSelection || {}; // Init the userSelection object
    window.gna = window.gna || {}; // Init the main object
    var gna = window.gna; // Init the locale reference to the main object
    gna.projectSettings = gna.projectSettings || {}; // Init the gnaProjectSettings object

    // ====================================
    // BOOKING WIDGET
    // ------------------------------------
    // Set the selectors
    var datesSelector           = $('#booking-widget-dates'),
        occupancySelector       = $('#booking-widget-occupancy'),
        submitBooking           = $('#booking-widget-submit > .btn');
    // ------------------------------------
    // DATES SELECTOR
    // ------------------------------------
    // Override some translations
    var newTranslations = {
        fr: {
            checkin_date:   "Arrivée",
            checkout_date:  "Départ"
        },
    };
    if ($.fn.rhoDatesSelector && $.fn.rhoDatesSelector.locales) {
        $.fn.rhoDatesSelector.locales = _.extend($.fn.rhoDatesSelector.locales, newTranslations);
    }

    if(
        datesSelector
        && datesSelector.length
        && $.fn.rhoDatesSelector
    ) {
        // Init the plugin
        datesSelector.rhoDatesSelector({
            locale: {
                language: ((gna.projectSettings && gna.projectSettings.idm2) ? gna.projectSettings.idm2 : 'en')
            },
            dateSettings: {
                setDatesOnLoad: false,
                checkInDateMin: '2021-04-22',
                specialPeriods: {
                    disabled: [
                        { from: '2020-11-26', to: '2021-04-21' },
                    ],
                }
            },
            appearance: {
                mode: 'expanded'
            },
            development: {
                dateFormat:                 'YYYY-MM-DD'
            }
        });
        // Bind the change event/s
        datesSelector.bind('rho-dates-selector-change-check-in, rho-dates-selector-change-check-out, rho-dates-selector-change', function(ev){
            rho.userSelection.dates = ev.dates;
        });
    }
    // ------------------------------------
    // OCCUPANCY SELECTOR
    // ------------------------------------
    if(
        occupancySelector
        && occupancySelector.length
        && $.fn.rhoOccupancySelector
    ) {
        // Init the plugin
        occupancySelector.rhoOccupancySelector({
            locale: {
                language: ((gna.projectSettings && gna.projectSettings.idm2) ? gna.projectSettings.idm2 : 'en')
            },
            occupancySettings: {
                setOccupancyOnLoad: false
            }
        });
        // Bind the change event/s
        occupancySelector.bind('rho-occupancy-change', function(ev){
            rho.userSelection.occupancy = ev.booking;
        });
    }
    // ------------------------------------
    // SUBMIT BUTTON
    // ------------------------------------
    if (submitBooking
        && submitBooking.length) submitBooking.bind('click', function(ev) {
        ev.preventDefault();
        ev.stopPropagation();
        if(hasInvalidChildren(rho.userSelection.occupancy)) return;
        // Init the params object
        var params = {};
        // Add the data to the object
        params.locale = {};
        params.locale.language = ((gna.projectSettings) ? gna.projectSettings.idm2 : 'en');
        params.dates = rho.userSelection.dates;
        params.occupancy = rho.userSelection.occupancy;
        params.promoCode = $('.promo-code').val();
        // Stringify the data
        params = {rho: JSON.stringify(params)};
        // Send it by POST
        var requestUrl = ((gna.projectSettings) ? gna.projectSettings.bookingRequestUrl : null);
        rho.post(requestUrl, params);
    });
    // ------------------------------
    // Declare the POST function
    // ---------------------------
    rho.post = function(path, params, method) {
        method = method || "post"; // Set method to post by default if not specified.
        // The rest of this code assumes you are not using a library.
        var form = document.createElement("form");
        form.setAttribute("method", method);
        form.setAttribute("action", path);
        for(var key in params) {
            if(params.hasOwnProperty(key)) {
                var hiddenField = document.createElement("input");
                hiddenField.setAttribute("type", "hidden");
                hiddenField.setAttribute("name", key);
                hiddenField.setAttribute("value", params[key]);
                form.appendChild(hiddenField);
            }
        }
        document.body.appendChild(form);
        form.submit();
    };


})( jQuery, window, document );
</script>
<script type="text/javascript">
(function (window, document, undefined ) {
    // Inject the blueimp gallery markdown
    var galleryMarkdown =
        '<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">' +
        '<div class="slides"></div>' +
        '<a class="prev">‹</a>' +
        '<a class="next">›</a>' +
        '<a class="close">×</a>' +
        '<ol class="indicator"></ol>' +
        '</div>';
    document.body.insertAdjacentHTML('beforeend', galleryMarkdown);
})( window, document );
</script>
<script type="text/javascript">
(function ($, window, document, undefined ) {
    // Search the top nav div
    var $topNav = $("article.leading-article .top-links");
    // Break here if the top nav is not present
    if (!$topNav || !$topNav.length) return;
    // Bind the click event on links
    var $topNavLinks = $topNav.find('li a');
    $topNavLinks.bind("click", function(ev) {
        var $this = $(this);
        // If the link does not contain a hash. break here
        if ($this.attr("href").indexOf("#") === -1) return;
        // Block the event
        ev.preventDefault();
        // Add the active class on li
        $topNav.find("li").removeClass("active");
        $this.closest("li").addClass("active");
        // Set the selectors for video and featured image
        var $image = $this.closest("article").find(".image"),
            $video = $this.closest("article").find(".video");
        // If the link is a video, hide image and show video
        if ($this.attr("href").indexOf("video") !== -1) {
            $image.addClass("hidden");
            $video.removeClass("hidden");
        }
        // If the link is a image, show image and hide video
        if ($this.attr("href").indexOf("image") !== -1) {
            $image.removeClass("hidden");
            $video.addClass("hidden");
        }
    });
})( jQuery, window, document );
</script>
<script type="text/javascript">

    // HOME FEATURED SLIDER
    // =============================================
    (function ($, undefined ) {
        // Break if the required plugins are not present
        if (!$.fn.carousel || !$.fn.gnaImageUtils) return;
        // Init the selectors
        var $slider = $('#home-featured'),
            $sliderImages = $('#home-featured .item .img-container');
        // Break if the selectors are not present or empty
        if (!$slider || !$slider.length) return;
        if (!$sliderImages || !$sliderImages.length) return;
        // Attach image resizing on slides
        $sliderImages.gnaImageUtils();
        // Refresh image resizing on slide & slid events
        $slider.on('slide.bs.carousel', function () {
            window.setTimeout(function () {
                $sliderImages.gnaImageUtils('redraw');
            }, 100);
        });
        $slider.on('slid.bs.carousel', function () {
            $sliderImages.gnaImageUtils('redraw');
        });
    })( jQuery );
    // ANOTHER FUNCTION HERE
    // =============================================
    (function ( $, _, window, document, undefined ) {
    })( jQuery, _, window, document );
</script>
<!-- FIN DU JAVASCRIPT-->
</body>
<!-- FIN DU PROGRAMME-->
</html>