
(function ($) {
    "use strict";

    var $window = $(window);
    var $document = $(document);

    //Document Ready
    /*=================================================================================================*/
    $document.on('ready', function(){

        //Contact Form
        /*----------------------------------------------------------------------*/
        var $contactForm = $('#contact-form');
        if ($contactForm.length) {
            $contactForm.validate({
                submitHandler: function(form) {
                    $.ajax({
                        type: 'POST',
                        url: 'inc/email-sender.php',
                        data: {
                            'name': $('#name').val(),
                            'email': $('#email').val(),
                            'message': $('#message').val()
                        },
                        dataType: 'json',
                        success: function (data) {
                            if (data.sent == 'yes') {
                                $('#MessageSent').removeClass('hidden');
                                $('#MessageNotSent').addClass('hidden');
                                $('.submit-button').removeClass('btn-default').addClass('btn-success').prop('value', 'Message Sent');
                                $('#contact-form .form-control').each(function() {
                                    $(this).prop('value', '').parent().removeClass('has-success').removeClass('has-error');
                                });
                            } else {
                                $('#MessageNotSent').removeClass('hidden');
                                $('#MessageSent').addClass('hidden');
                            }
                        }
                    });
                },
                // debug: true,
                errorPlacement: function(error, element) {
                    error.insertAfter(element);
                },
                onkeyup: false,
                onclick: false,
                rules: {
                    name: {
                        required: true,
                        minlength: 2
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    message: {
                        required: true,
                        minlength: 10
                    }
                },
                messages: {
                    name: {
                        required: 'Please specify your name',
                        minlength: 'Your name must be longer than 2 characters'
                    },
                    email: {
                        required: 'We need your email address to contact you',
                        email: 'Please enter a valid email address e.g. name@domain.com'
                    },
                    message: {
                        required: 'Please enter a message',
                        minlength: 'Your message must be longer than 10 characters'
                    }
                },
                errorElement: 'span',
                highlight: function (element) {
                    $(element).parent().removeClass('has-success').addClass('has-error');
                    $(element).siblings('label').addClass('hide');
                },
                success: function (element) {
                    $(element).parent().removeClass('has-error').addClass('has-success');
                    $(element).siblings('label').removeClass('hide');
                }
            });
        }
    });
})(jQuery);