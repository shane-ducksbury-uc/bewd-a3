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