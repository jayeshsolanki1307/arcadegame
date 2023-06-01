(function($){
    $(document).ready(function(e) {
        /****** Ajax User Register Code Start ******/
        $("#register_form").submit(function(e) {
            e.preventDefault();
            var registerForm = $("#register_form").serialize();
            jQuery.ajax({
                type: "POST",
                url: admin_url.ajax_url,
                data: registerForm,
                dataType: "json",
                success: function (response) {
                    console.log(response);
                    jQuery('.register-message').removeClass('error');
                    jQuery('.register-message').removeClass('success');
                    if( !response.status ) {
                        jQuery('.register-message').addClass('error');
                        if( response.errorName == 'user_name' ){
                            $('.user_name_err').remove();
                            $('#user_name').after('<p class="user_name_err error">'+response.results+'</p>');
                        }else{
                            $('.user_name_err').remove();
                        }

                        if( response.errorName == 'user_email' ){
                            $('.user_email_err').remove();
                            $('#user_email').after('<p class="user_email_err error">'+response.results+'</p>');
                        }else{
                            $('.user_email_err').remove();
                        }

                        if( response.errorName == 'user_phone' ){
                            $('.user_phone_err').remove();
                            $('#user_phone').after('<p class="user_phone_err error">'+response.results+'</p>');
                        }else{
                            $('.user_phone_err').remove();
                        }

                        if( response.errorName == 'user_pass' ){
                            $('.user_password_err').remove();
                            $('#user_password').after('<p class="user_password_err error">'+response.results+'</p>');
                        }else{
                            $('.user_password_err').remove();
                        }

                        if( response.errorName == 'conf_pass' ){
                            $('.conf_password_err').remove();
                            $('#conf_password').after('<p class="conf_password_err error">'+response.results+'</p>');
                        }else{
                            $('.conf_password_err').remove();
                        }
                        //jQuery('.register-message').text(response.results).show();
                    }else{
                        jQuery('.register-message').addClass('success');
                        jQuery('.register-message').text(response.results).show();
                        $('#register_form')[0].reset();
                    }
                },
                error: function (results) {

                }
            });
        });
        /****** Ajax User Register Code End ******/
        
        /****** Ajax Search Code Start ******/
        $('.modal .modal-body').hide();

        $(document).on('click','.modal a.cat-click',function(e){
            e.preventDefault();            
            var catId = $(this).attr('data-id');
            $('.modal #cat_id').val(catId);
            SearchGames();
        });

        $(document).on('click','a.search_game',function(e){
            e.preventDefault();
            SearchGames();
        });

        $("#search_form").submit(function(e) {
            e.preventDefault();
            SearchGames();
        });

        $('#exampleModal').on('hidden.bs.modal', function () {
            $('#search_form')[0].reset();
            $('.modal .modal-body').html('');
            $('.modal .modal-body').hide();
        });
        
        function SearchGames(){
            var search_key = $('.modal #search_key').val();
            var cat_id = $('.modal #cat_id').val();
            $('.modal .modal-body').show();
            var data = {
                action : 'search_game_action',
                search_key : search_key,
                cat_id : cat_id,
            }

            jQuery.ajax({
                type: "POST",
                url: admin_url.ajax_url,
                data: data,
                dataType: "json",
                success: function (response) {
                    $('.modal .modal-body').html('');
                    if( response.result && response.status ){
                        $('#exampleModal').removeClass('failed');
                        $('.modal .modal-body').html(response.result);
                        console.log('nooo');
                    }else{
                        $('#exampleModal').addClass('failed');
                        $('.modal .modal-body').html(response.result);
                        console.log('yess');
                    }                 
                },
                error: function (response) {

                }
            });
        }        
        /****** Ajax Search Code End ******/
    });
})(jQuery);