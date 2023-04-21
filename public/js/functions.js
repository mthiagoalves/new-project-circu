$(document).ready(function() {

$('.form-parsley').parsley();

$('#carousel_product').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 197,
    itemHeight: 197,
    itemMargin: 14,
    asNavFor: '#slider_product'
});

$('#slider_product').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel_product",
    start: function(slider){
      $('body').removeClass('loading');
    }
});

$('.flexslider').flexslider({
    animation: "slide",
    smoothHeight: true,
    slideshow: false,
    directionNav: true,
    animationSpeed: 1200,
    controlNav: false,
    touch: true
});

$('.flexslider_controls').flexslider({
    animation: "slide",
    directionNav: false,
    animationSpeed: 1200,
    controlNav: true,
    touch: true
});

/*** videos homepage ***/
$('img.videoplayer').click(function(){
    var video = '<div class="videowrapper"><iframe style="float: left; display: inline; margin-right: 10px;" frameBorder="0" src="'+ $(this).attr('data-video') +'"></iframe></div>';
    $(this).replaceWith(video);
});

});
