$(document).ready(function () {
        $(".ihotspot").css({
            "border": "solid 1px #009900",
            "background": "#00ffcc",
            "border-radius": "6px"
        });
 
        function blink_hotspot() {
            $('.ihotspot').animate({ "opacity": '0.3' }, 'slow').animate({ 'opacity': '0.8' }, 'fast', function () { blink_hotspot(); });
        }
 
        blink_hotspot();
    });
 
    $('#ihotspot1').LiteTooltip({
        location: 'right',
        textalign: 'left',
        templatename: 'Limeade',
        padding: 5,
        title:
        '<div class="template">' +
        '<h4>Retina Display</h4>' +
        '<p style="padding: 5px; font-size: 11px; line-height: 18px;">' + 
        '<img src="../images/retina.jpg" style="width: 65px; margin-right: 10px" class="image-left" />' +
        '4-inch (diagonal) widescreen Fingerprint-resistant Multi-Touch display. ' +
        '1136-by-640-pixel resolution at 326 ppi. ' +
        '800:1 contrast ratio (typical). ' +
        '</p>' +
        '</div>'
    });
 
    $('#ihotspot2').LiteTooltip({
        location: 'right',
        textalign: 'left',
        templatename: 'BostonBlue',
        padding: 5,
        title:
        '<div class="template">' +
        '<h4>Camera, Photos, and Videos</h4>' +
        '<ul style="font-size: 11px; line-height: 20px; padding-bottom: 10px;">' +
        '<li style="float: left; list-style: none;">' +
        '<img src="../images/camera.jpg" style="width: 65px; margin-right: 5px" class="image-left" /></li>' +
        '<li>8 megapixel iSight camera</li>' +
        '<li>Panorama</li>' +
        '<li>Video recording, HD(1080p) up to 30fps</li>' +
        '<li>FaceTime 1.2MP HD(720p) up to 30fps.</li>' +
        '<li>Autofocus</li>' +
        '<li>Tap to focus video or still images</li>' +
        '<li>Face detection in video or still images</li>' +
        '<li>LED flash</li>' +
        '<li>Improved video stabilization</li>' +
        '<li>Photo and video geotagging</li>' +
        '</ul>' +
        '</div>'
    });
 
    $('#ihotspot3').LiteTooltip({
        location: 'right',
        textalign: 'left',
        templatename: 'PaleMint',
        padding: 5,
        title:
        '<div class="template">' +
        '<h4>Size and Weight</h4>' +
        '<p style="padding: 5px; font-size: 11px; line-height: 20px;">' +
        '<strong>Height:</strong> 4.87 inches (123.8 mm)<br />' +
        '<strong>Width:</strong> 2.31 inches (58.6 mm)<br />' +
        '<strong>Depth:</strong> 0.30 inch (7.6 mm)<br />' +
        '<strong>Weight:</strong> 3.95 ounces (112 grams)' +
        '</p>' +
        '</div>'
    });
 
    $('#product-iphone').LiteTooltip({
        location: 'right',
        trigger: 'click',
        textalign: 'left',
        padding: 5,
        templatename: "BostonBlue",
        title:
        '<div class="tooltip-menu">' +
        '<ul>' +
        '<li><a href="#"><i class="icon-shopping-cart icon-white"></i> Add to cart</a></li>' +
        '<li><a href="#"><i class="icon-star-empty icon-white"></i> Add to favorites</a></li>' +
        '<li class="last-child"><a href="#"><i class="icon-list-alt icon-white"></i> View Details</a></li>' +
        '</ul>' +
        '</div>'
    });