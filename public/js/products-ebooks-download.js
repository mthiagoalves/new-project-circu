$(window).on("load", function() {

    // process the form
    $('form.form-product-ebook').submit(function(event) {

        $('form.form-product-ebook').removeClass('has-error'); 
        $('form.form-product-ebook .help-block').remove(); 
        $('form.form-product-ebook .alert-success').remove();
        
        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        var formData = {
            'name'                  : $('input[name=inputName]').val(),
            'email'                 : $('input[name=inputEmail]').val(),
            'ebook'                 : $('input[name=inputEbook]').val(),
            'origin'                : $('input[name=origin]').val(),
            'referrer'              : $('input[name=referrer]').val(),
            'lead_path'             : $('input[name=lead_path]').val(),
        };
        console.log(formData); 

        // process the form
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : '/includes/process/product-page/ebooks/process-product-ebook-download.php', // the url where we want to POST
            data        : formData, // our data object
            dataType    : 'json', // what type of data do we expect back from the server
            encode      : true
        })
            // using the done promise callback
            .done(function(data) {

                // log data to the console so we can see
                //console.log(data); 

                // here we will handle errors and validation messages
                if ( ! data.success) {
                    
                    // handle errors for name ---------------
                    if (data.errors.name) {
                        $('form.form-product-ebook').addClass('has-error'); // add the error class to show red input
                        $('form.form-product-ebook').append('<div class="help-block">' + data.errors.name + '</div>'); // add the actual error message under our input
                    }

                    // handle errors for email ---------------
                    if (data.errors.email) {
                        $('form.form-product-ebook').addClass('has-error'); // add the error class to show red input
                        $('form.form-product-ebook').append('<div class="help-block">' + data.errors.email + '</div>'); // add the actual error message under our input
                    }

                } else {

                    var contentType ="application/x-www-form-urlencoded; charset=utf-8";

                    if(window.XDomainRequest)
                        contentType = "text/plain";

                    $.ajax({
                        url:"http://webuzz.com.pt/subscribers_get/post_ebooks.php",
                        data:{
                            name: $('input[name=inputName]').val(),
                            email: $('input[name=inputEmail]').val(),
                            nome_ebook: $('input[name=inputEbook]').val(),
                            site: 'CC',
                            marca: 'Circu',
                            url: document.URL,

                            //PREVENT CSRF ATTACKS
                            token_webuzz : 'g2zAsJ8NrvZHmdCuvydCWoGWNjYRsr9jYbPpDIqf',
                        },
                        type:"POST",
                        dataType:"json",   
                        contentType:contentType,
                        success:function(data)
                        {
                            if( data=='success'){

                            }
                        }

                    });

                    // ALL GOOD! just show the success message!
                    $('form.form-product-ebook').append('<div class="alert alert-success">' + data.message + '</div>');

                    // usually after form submission, you'll want to redirect
                    // window.location = '/thank-you'; // redirect a user to another page

                }
            })

            // using the fail promise callback
            .fail(function(data) {

                // show any errors
                // best to remove for production
                console.log(data);
            });

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });

});