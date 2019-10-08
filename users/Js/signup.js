$(document).ready(function(){
 
    $('#loginBtn').click(function(){
       
        var useremail = $('#email').val();
        var userpassword  = $('#password').val();
       
        $.post("log.php",{useremail:useremail,userpassword:userpassword},function(data){
            if(data==="Invalid Password"){
                $('#validationMsg').hide();
                $('#validationMsg').show();
                $('#displayMessage').text(data);
            }else if(data==="User not found!"){
                $('#validationMsg').hide();
                $('#validationMsg').show();
                $('#displayMessage').text(data);
            }else{
                window.location.href="homepag1.php";
            }
        });
    })

    $('#signup_button').click(function(){
       
        var username = $('#name-login').val();
        var userlname  = $('#lname-login').val();
        var useremail = $('#email-login').val();
        var userpassword = $('#password-login').val();
        var userphone  = $('#phone-login').val();
        var useraddress = $('#address-login').val();

       
        $.post("reg.php",{useremail:useremail,
                        userpassword:userpassword,
                        fname:username,
                        lname:userlname,
                        userphone:userphone,
                        useraddress:useraddress
            },function(data){
                
                if(data==="User Exists" || data === "Error"){
                    $('#validationSignUpMsg').hide();
                    $('#validationSignUpMsg').show();
                    $('#displaySignUpMessage').text("Some Error occured, please try later!");
                }else{
                    window.location.href="homepage.php";
                }
        });
    })

});

       