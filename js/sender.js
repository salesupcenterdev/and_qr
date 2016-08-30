 $(document).ready(                      
                function(){
                     
                    $('#send').data('send', 1);  
                    $('#send').on('click', function(event) {  
                        if( $('#send').data('send') == 1 ) {
                            event.preventDefault();
                            $.ajax({
                                type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
                                url         : './../php/sender.php', // the url where we want to POST
                                data        : $("#senderMail").serialize(),
                                success: function(data) { 
                                    $('#response').html(data);                                 
                                    $('#modal-user-variant').modal('show');
                                    $('.modal-body').hide();
                                    $('#send').text('выйти');                                 
                                    $('#send').data('send', 0);    
                                },
                                error: function(error) {    
                                      console.log(error);
                                    $('#send').data('send', 1);  
                                    $('#response').html(error);                                  
                                    $('#modal-user-variant').modal('show');
                                }
                            });   
                        } else {                           
                           $.ajax({
                                url: "",
                                context: document.body,
                                success: function(s,x){
                                    $(this).html(s);
                                }
                            });
                        }
                    });                     
                });      