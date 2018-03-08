function sendFeedback(){
   

     $(document).ready(function () {
                        $('.send-feedback').click(function () {
                               
                                var name= $('input[name=name]').val();
                                var email = $('input[name=email]').val();
                                var message = $('textarea[name=text-messg]').val();
                                var captha=$('textarea[name=g-recaptcha-response]').val();

                                    //alert(captha);
                              
                                 var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;

                                     if(name.length>2) $(".name-feedback").css({'border' : '2px solid #569b44'});
                                     else 
                                     {
                                        $(".name-feedback").css({'border' : '2px solid #ff0000'});
                                        $(".error-warning").apend("g");
                                     }
                                     if(pattern.test(email)) $(".email-feedback").css({'border' : '2px solid #569b44'});
                                     else 
                                     {
                                        $(".email-feedback").css({'border' : '2px solid #ff0000'});
                                     }

                                     if(message!="") $(".message-feedback").css({'border' : '2px solid #569b44'});
                                     else 
                                     {
                                        $(".message-feedback").css({'border' : '2px solid #ff0000'});
                                     } 
                                     if(captha!="")
                                     {
                                        $(".recaptcha-response").css({'border' : '2px solid #569b44'});
                                     }
                                     else 
                                     {
                                        $(".recaptcha-response").css({'border' : '2px solid #ff0000'});
                                     } 

                          });

                        }); 


}
sendFeedback();