
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


document.addEventListener('DOMContentLoaded', function() {
    const variationBtns = document.querySelectorAll('.variation-selector-btn');

    const defaultBtn = variationBtns[0];
    if (defaultBtn) {
        defaultBtn.classList.add('active');
        const defaultVariationData = JSON.parse(defaultBtn.dataset.variation);
        updateProductDisplay(defaultVariationData);
    }
    
    variationBtns.forEach(btn => {
        btn.addEventListener('click', function() {
          
            variationBtns.forEach(b => b.classList.remove('active'));
          
            this.classList.add('active');
            
            const variationData = JSON.parse(this.dataset.variation);
            updateProductDisplay(variationData);
        });
    });
    
   
    function updateProductDisplay(variationData) {
        document.querySelector('.tobor-product-title').innerHTML = variationData.title_html;
        const description = variationData.description.replace(/<\/?p>/g, '');
        document.querySelector('#variation-description').innerHTML = description;
        document.querySelector('.variation_price').innerHTML = variationData.price_html;
        document.querySelector('input[name="variation_id"]').value = variationData.variation_id;
        
        const affirmElement = document.querySelector('.affirm-as-low-as');
        if (affirmElement) {
            affirmElement.setAttribute('data-amount', variationData.display_price + '00');
        }
    }

});



jQuery(document).ready(function($) {
    // Store the original content for later restoration.
    var originalContent = $(".whats-in-the-box-wrapper").html();
    // Variable to hold cached content from the AJAX request.
    var cachedContent = null;
  
    // Bind click events on the specified classes.
    $(".home-dog-air, .home-dog-edu, .home-dog-pro").on('click', function(e) {
      e.preventDefault();
  
      // If the clicked element is the "pro" button, restore the original content.
      if ($(this).hasClass('home-dog-pro')) {
        $(".whats-in-the-box-wrapper").html(originalContent);
        return;
      }
  
      // For .home-dog-air and .home-dog-edu: if content is cached, use it.
      if (cachedContent !== null) {
        $(".whats-in-the-box-wrapper").html(cachedContent);
        return;
      }
  
      // Otherwise, perform the AJAX request.
      $.ajax({
        url: "https://toborlife.ai/dev/product/go2-edu/",
        method: "GET",
        dataType: "html",
        success: function(response) {
          // Create a temporary container to hold the fetched HTML.
          var $tempContainer = $("<div>").html(response);
          // Extract the inner HTML of the .whats-in-the-box-wrapper element from the fetched content.
          var newContent = $tempContainer.find(".whats-in-the-box-wrapper").html();
          
          if (newContent) {
            // Cache the fetched content.
            cachedContent = newContent;
            // Replace the current page's .whats-in-the-box-wrapper content.
            $(".whats-in-the-box-wrapper").html(newContent);
          } else {
            console.error("The specified element '.whats-in-the-box-wrapper' was not found in the response.");
          }
        },
        error: function(xhr, status, error) {
          console.error("Error fetching the content: " + error);
        }
      });
    });
  });