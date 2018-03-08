function registerUser(){
   

     $(document).ready(function () {
                        $('.registr-button').click(function () {
                               
                                var login= $('input[name=login]').val();

                                var email = $('input[name=email]').val();
                                var password= $('input[name=password]').val();
                                var gender=$('input[name=gender]:checked').val();
                                var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;

                                     if(login.length>=2) $("#username").css({'border' : '2px solid #569b44'});
                                     else 
                                     {
                                        $("#username").css({'border' : '2px solid #ff0000'});
                                     }
                                     

                                     if(pattern.test(email)) $("#email").css({'border' : '2px solid #569b44'});
                                     else 
                                     {
                                        $("#email").css({'border' : '2px solid #ff0000'});
                                     }

                                     if(password.length>=5) $("#password").css({'border' : '2px solid #569b44'});
                                     else 
                                     {
                                        $("#password").css({'border' : '2px solid #ff0000'});
                                     } 



                          });

                        }); 


}
registerUser();