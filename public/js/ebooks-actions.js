$(window).on("load", function() {
	var imgs = new Array(); 

    $(".carousel-inner-img").each(function() {  
       var imgsrc = $(this).attr('data-ebookName');
       imgs.push(imgsrc);
    });

    $('#ebook-download #inputEbook').val(imgs[0]);
    $('#ebook-download .ebook-title').html(imgs[0].split('-').join(' '));
    

    $('.slide_product_ebook .flex-direction-nav li a').on('click', function (e) {
        if($(this).hasClass('flex-prev')){
            if($('.slide_product_ebook .flex-active-slide').index() == 0){
                $('#ebook-download .ebook-title').html(imgs[0].split('-').join(' '));
				$('#ebook-download #inputEbook').val(imgs[0]);
            }else{
                $('#ebook-download .ebook-title').html(imgs[$('.slide_product_ebook .flex-active-slide').index()].split('-').join(' '));
				$('#ebook-download #inputEbook').val(imgs[$('.slide_product_ebook .flex-active-slide').index()]);
            }
        }

        if($(this).hasClass('flex-next')){
            if($('.slide_product_ebook .flex-active-slide').index() == 0){
                $('#ebook-download .ebook-title').html(imgs[0].split('-').join(' '));
				$('#ebook-download #inputEbook').val(imgs[0]);
            }else{
                $('#ebook-download .ebook-title').html(imgs[$('.slide_product_ebook .flex-active-slide').index()].split('-').join(' '));
				$('#ebook-download #inputEbook').val(imgs[$('.slide_product_ebook .flex-active-slide').index()]);
            }
        }
    });
});