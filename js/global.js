$(document).ready(function() {
    var avisHeight = 0;
    $(".avis-detail").each(function() {
        thisHeight = $(this).height();
        if(thisHeight > avisHeight) {
            $(".avis-detail").height(thisHeight);
        }
        avisHeight = thisHeight;
    });

    $('.open-menu').on('click', function(){
        $('html').toggleClass("menu-open");
        $(".submenu.open").removeClass("open");
    });

    if (window.matchMedia("(max-width: 991px)").matches) {
        $('.menu-link').on('click', function(e){
            $that = $(this);
            $hasSub = $that.parent().find(".submenu").length ? true : false;
            $sub = $that.parent().find(".submenu");
            if ($hasSub) {
                e.preventDefault();
                $sub.addClass("open");
            }
        });
        $('.submenu-bloc').on('click', function(){
            $('html').removeClass("menu-open");
            $('.submenu.open').removeClass("open");
        });
    }


    $('.back').on('click', function(){
        $(this).parent().removeClass("open");
    });

    $('.footer-links-title').on('click', function(){
        $(this).parent(".footer-links-bloc").toggleClass("open");
        $(this).next('.footer-links').slideToggle();
    });

    $(document).on("click", ".trigger", function() {
        $src = $(this).closest(".block-link").find(".referal").attr("href");
        if ($src && $src != "undefined") {
            window.location.href = $src;
        }
    });
    
    $('.cms-video-btn').on('click', function(){
        $(this).parent().addClass("video-open");
        var $video = $('#video');
        src = $video.attr('src');
        $video.attr('src', src + '?autoplay=1');
    });

    calculPaddingForContainerSpe();

    setTimeout(function(){
        labelFormAction();
    }, 600);
});

$(window).resize(function() {
    calculPaddingForContainerSpe();
  });

function calculPaddingForContainerSpe() {
    $containerWidth = $('.ctn').outerWidth();
    $windowWidth = $(window).outerWidth();
    $paddingToContainerSpe = (($windowWidth - $containerWidth) / 2);
    $('.bloc-produit').css("max-width:", -$paddingToContainerSpe);
    
    if ($windowWidth > 1920) {
        $('.bloc-produit-img-inner').css("right", -300);
    } else {
        $('.bloc-produit-img-inner').css("right", -$paddingToContainerSpe);
    }
}

function labelFormAction()
{
    $('.form-group .form-control').focus(function(){
        that = $(this);
        that.siblings("label").addClass("notEmpty");
    });
    
    $('.form-group .form-control').blur(function(){
        that = $(this);
        if(that.val().length == 0) {
            that.siblings("label").removeClass("notEmpty");
        }
    });

    $('.form-group .form-control').each(function(){
        that = $(this);
        labelTraitment(that);
	});

	$(document).on('click', '.form-group-date .form-control', function(){
		$(this).parents('.form-group-date').find("label").addClass("notEmpty");
	});
	
}

function labelTraitment(el)
{
    if(el.val().length > 0) {
        el.siblings("label").addClass("notEmpty");
    } else {
        el.siblings("label").removeClass("notEmpty");
    }
}