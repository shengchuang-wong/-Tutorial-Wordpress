var map;
function initMap() {

    var latLng = {
        lat: parseFloat(options.latitude),
        lng: parseFloat(options.longitude)
    }

    map = new google.maps.Map(document.getElementById('map'), {
        center: latLng,
        zoom: parseInt(options.zoom)
    });

    var marker = new google.maps.Marker({
        position: latLng,
        map: map,
        title: 'La Pizzeria'
    });

}

$ = jQuery.noConflict();

$(document).ready(function() {
    console.log('it works');

    // Menu Button
    $('.mobile-menu a').on('click', function() {
        $('.site-nav').toggle('slow');
    });

    // Show the Mobile Menu
    var breakpoint = 768;
    $(window).resize(function() {
        boxAdjustment();
        if($(document).width() >= breakpoint) {
            $('nav.site-nav').show();
        } else {
            $('nav.site-nav').hide();
        }
    });

    boxAdjustment();

    // Fluidbox Plugin

    $('.gallery a').each(function() {
        $(this).attr({'data-fluidbox': ''});
    });

    if($('[data-fluidbox]').length > 0) {
        $('[data-fluidbox]').fluidbox();
    }

    // Adapt Map to Full Height
    var map = $('#map');
    if(map.length > 0) {
        if($(document).width() >= breakpoint) {
            displayMap(0);
        } else {
            displayMap(300);
        }
    }

    $(window).resize(function() {
        if($(document).width() >= breakpoint) {
            displayMap(0);
        } else {
            displayMap(300);
        }
    });

});

// Adapt the height of the images to the div elements
function boxAdjustment() {
    var images = $('.box-image');

    if(images.length > 0) {
        var imageHeight = images[0].height;
        var boxes = $('.content-box');
        $(boxes).each(function(i, element) {
            $(element).css({'height': imageHeight + 'px'});
        });
    }
}

// map resizing
function displayMap(value) {
    if(value === 0) {
        var locationSection = $('.location-reservation');
        var locationHeight = locationSection.height();
        $('#map').css({'height': locationHeight});
    } else {
        $('#map').css({'height': value});
    }
}