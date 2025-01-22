
jQuery(document).ready(function ($) {
    $('.tobor-nav-item').on('click', function (e) {
        e.preventDefault();
        const targetId = $(this).attr('href'); 
        const offsetTop = $(targetId).offset().top;

        $('html, body').animate({ scrollTop: offsetTop - 60 }, 800);
    });
});

jQuery(document).ready(function ($) {
    $('.woocommerce-product-thumbnails a img').on('click', function (e) {
        e.preventDefault();

      
        var newImageSrc = $(this).parent().attr('href');
        var mainImage = $('.woocommerce-product-gallery__image a img');

        mainImage.attr('src', newImageSrc);
        mainImage.attr('srcset', newImageSrc); // For responsive image
    });

    // $('.woocommerce-product-thumbnails a img').on('click', function (e) {
    //     e.preventDefault();
    
    //     $('.woocommerce-product-thumbnails img').removeClass('active');
    //     $(this).addClass('active');
    // });
    
});


jQuery(document).ready(function ($) {
    $(".toborlife-custom-number-input").each(function () {
        const $toborlifeWrapper = $(this);
        const $toborlifeInput = $toborlifeWrapper.find(".toborlife-qty");
        const $toborlifeBtnPlus = $toborlifeWrapper.find(".toborlife-qty-up");
        const $toborlifeBtnMinus = $toborlifeWrapper.find(".toborlife-qty-down");

        $toborlifeBtnPlus.on("click", function () {
            const toborlifeMax = parseInt($toborlifeInput.attr("max")) || Infinity;
            const toborlifeCurrentValue = parseInt($toborlifeInput.val()) || 0;
            if (toborlifeCurrentValue < toborlifeMax) {
                $toborlifeInput.val(toborlifeCurrentValue + 1);
            }
        });

        $toborlifeBtnMinus.on("click", function () {
            const toborlifeMin = parseInt($toborlifeInput.attr("min")) || 0;
            const toborlifeCurrentValue = parseInt($toborlifeInput.val()) || 0;
            if (toborlifeCurrentValue > toborlifeMin) {
                $toborlifeInput.val(toborlifeCurrentValue - 1);
            }
        });
    });
});

jQuery(document).ready(function ($) {
    $('.toborlife-news-search-icon').on('click', function () {
        $(this).closest('form').submit(); // Submit the form when the icon is clicked
    });
});