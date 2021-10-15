(
    function($){
        $(document).ready(function(){
            $(document).on('click', '.js-filter-item', function(e){
                e.preventDefault()

                $('.js-filter-item').removeClass('uk-active')

                $(this).addClass('uk-active')

                let category = $(this).data('category')

                $.ajax({
                    url: wpAjax.ajaxUrl,
                    data: { action: 'filter', category: category},
                    type: 'post',
                    success: function(result) {
                        $('.publications-container').html(result)
                    },
                    error: function(result) {
                        console.warn(result)
                    }

                })
            })
        })
    }
)(jQuery);


// Function for the modal
(
    function($){
        $(document).ready(function(){
            $(document).on('click', '#search-modal-open', function(e){
                e.preventDefault()

                $('#header-widget-modal').css('display', 'block')
                // Stops the body scrolling on everything except iOS.
                $('body').css('overflow', 'hidden')

            })
        })
    }
)(jQuery);

(
    function($){
        $(document).ready(function(){
            $(document).on('click', '#search-modal-close', function(e){
                e.preventDefault()

                $('#header-widget-modal').css('display', 'none')
                // This might cause bugs and it might not, who knows.
                $('body').css('overflow', 'unset')

            })
        })
    }
)(jQuery);