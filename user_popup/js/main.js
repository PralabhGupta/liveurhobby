jQuery(document).ready(function($){

	var $form_modal = $('.cd-user-modal'),
		$form_login = $form_modal.find('#cd-login'),
		$form_signup = $form_modal.find('#cd-signup'),
		$form_forgot_password = $form_modal.find('#cd-reset-password'),
		$form_modal_tab = $('.cd-switcher'),
		$tab_login = $form_modal_tab.children('li').eq(0).children('a'),
		$tab_signup = $form_modal_tab.children('li').eq(1).children('a'),
		$forgot_password_link = $form_login.find('.cd-form-bottom-message a'),
		$back_to_login_link = $form_forgot_password.find('.cd-form-bottom-message a'),
		$main_nav = $('.main-nav');
var flag;
	//open modal
	$main_nav.on('click', function(event){

		if( $(event.target).is($main_nav) ) {
			// on mobile open the submenu
			$(this).children('ul').toggleClass('is-visible');
		} else {
			// on mobile close submenu
			$main_nav.children('ul').removeClass('is-visible');
			//show modal layer
			$form_modal.addClass('is-visible');
			//show the selected form
			( $(event.target).is('.cd-signup') ) ? signup_selected() : login_selected();
		}

	});

	//close modal
	$('.cd-user-modal').on('click', function(event){
		if( $(event.target).is($form_modal) || $(event.target).is('.cd-close-form') ) {
			$form_modal.removeClass('is-visible');
		}
	});
	//close modal when clicking the esc keyboard button
	$(document).keyup(function(event){
    	if(event.which=='27'){
    		$form_modal.removeClass('is-visible');
	    }
    });

	//switch from a tab to another
	$form_modal_tab.on('click', function(event) {
		event.preventDefault();
		( $(event.target).is( $tab_login ) ) ? login_selected() : signup_selected();
	});

	//hide or show password
	$('.hide-password').on('click', function(){
		var $this= $(this),
			$password_field = $this.prev('input');

		( 'password' == $password_field.attr('type') ) ? $password_field.attr('type', 'text') : $password_field.attr('type', 'password');
		( 'Hide' == $this.text() ) ? $this.text('Show') : $this.text('Hide');
		//focus and move cursor to the end of input field
		$password_field.putCursorAtEnd();
	});

	//show forgot-password form
	$forgot_password_link.on('click', function(event){
		event.preventDefault();
		forgot_password_selected();
	});

	//back to login from the forgot-password form
	$back_to_login_link.on('click', function(event){
		event.preventDefault();
		login_selected();
	});

	function login_selected(){
		$form_login.addClass('is-selected');
		$form_signup.removeClass('is-selected');
		$form_forgot_password.removeClass('is-selected');
		$tab_login.addClass('selected');
		$tab_signup.removeClass('selected');
	}

	function signup_selected(){
		$form_login.removeClass('is-selected');
		$form_signup.addClass('is-selected');
		$form_forgot_password.removeClass('is-selected');
		$tab_login.removeClass('selected');
		$tab_signup.addClass('selected');
	}

	function forgot_password_selected(){
		$form_login.removeClass('is-selected');
		$form_signup.removeClass('is-selected');
		$form_forgot_password.addClass('is-selected');
	}

	//REMOVE THIS - it's just to show error messages

var error=0;
     $("#signin-password").focus(function(){
		 var email = $("#signin-email").val();
		 if( email ==''){
			 error=1;
		 $("#signin-email").css("border","2px solid red");
		 $("#signin-email").next('span').text( "Enter Username" ).css("color","red").show();
event.preventDefault();}
else{
			 error=0;
			 $("#signin-email").next('span').hide();
		 $("#signin-email").css("border","2px solid green");


		}
    });


    $("#signin-submit").focus(function(){
			 var password = $("#signin-password").val();
			  if(password =='')
			 {error=1;
				 $("#signin-password").css("border","2px solid red");
			 $("#passerror").text( "Enter Password" ).css("color","red").show();
			 event.preventDefault();
}
	else{
				 error=0;
				 $("#passerror").hide();
			 $("#signin-password").css("border","2px solid green");


			}
    });


$form_login.find('input[type="submit"]').on('click', function(event){
var email = $("#signin-email").val();
var password = $("#signin-password").val();

// Checking for blank fields.
if( email ==''){
$("#signin-email").css("border","2px solid red");
$("#signin-email").next('span').text( "Enter Username" ).css("color","red").show();
event.preventDefault();

}

else if(password =='')
{$("#signin-password").css("border","2px solid red");
$("#passerror").text( "Enter Password" ).css("color","red").show();
event.preventDefault();
}

else {
$("#loginform").submit();
}
});


 $("#signup-email").focus(function(){
		var user =$("#signup-username").val();
		 if( user ==''){
			 error=1;
		 $("#signup-username").css("border","2px solid red");
		 $("#signupusererror").text( "Enter Username" ).css("color","red").show();
event.preventDefault();}
if( user.length<6){
			 error=1;
		 $("#signup-username").css("border","2px solid red");
		 $("#signupusererror").text( "Username should have atleast 6 characters" ).css("color","red").show();
event.preventDefault();}
else{   check_availability();
}

    });
    	function check_availability(){

				        //get the username
				       var user =$("#signup-username").val();
 $("#signupusererror").text( "checking, Please wait..." ).css("color","blue").show();
				        //use ajax to run the check
				        $.post("user_ajax/check_username.php", { username: user },
				            function(result){
				                //if the result is 1
				                if(result == 1){ flag=0;
				                   $("#signupusererror").hide();
								   		 $("#signup-username").css("border","2px solid green");}
								   		else
								   		{	 flag=1;
											$("#signup-username").css("border","2px solid red");
								   		 $("#signupusererror").text( "OOPS!!! This Username is not available, Try something else" ).css("color","red").show();
											event.preventDefault();
				                }
				        });

			}
     $("#signup-password").focus(function(){
			var email =$("#signup-email").val();
			var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			 if( email ==''){
				 error=1;
			 $("#signup-email").css("border","2px solid red");
			 $("#signup-email").next('span').text( "Enter Email id" ).css("color","red").show();
	event.preventDefault();}
	else if( re.test(email)==false)
			{
	$("#signup-email").css("border","2px solid red");
	$("#signup-email").next('span').text( "Enter Valid email" ).css("color","red").show();
	event.preventDefault();
		}
	else{check_email_availability();



			}
	    });

function check_email_availability(){

				        //get the username
				     var email =$("#signup-email").val();
$("#signup-email").next('span').text( "checking, Please wait..." ).css("color","blue").show();
				        //use ajax to run the check
				        $.post("user_ajax/check_email.php", { username: email },
				            function(result){
				                //if the result is 1
				                if(result == 1)
				               {	flag=0;
				               $("#signup-email").next('span').hide();
							   			 $("#signup-email").css("border","2px solid green");}
							   			 else{ flag=2;
							   			  $("#signup-email").css("border","2px solid red");
							   	$("#signup-email").next('span').text( "This Email is already registered" ).css("color","red").show();
								event.preventDefault();
}
				        });

			}

    $("#signup-submit").focus(function(){
			 var password = $("#signup-password").val();
			  if(password =='')
			 {error=1;
				 $("#signup-password").css("border","2px solid red");
			 $("#signuppasserror").text( "Enter Password" ).css("color","red").show();
			 event.preventDefault();
}
		else if(password.length<7)
			 {error=1;
				 $("#signup-password").css("border","2px solid red");
			 $("#signuppasserror").text( "Minimum length should be 7" ).css("color","red").show();
			 event.preventDefault();
}
	else{
				 error=0;
				 $("#signuppasserror").hide();
			 $("#signup-password").css("border","2px solid green");


			}
    });



$form_signup.find('input[type="submit"]').on('click', function(event){
var email = $("#signup-email").val();
var user =$("#signup-username").val();

var password = $("#signup-password").val();

var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
// Checking for blank fields.
 if(user =='')
{$("#signup-username").css("border","2px solid red");
$("#signupusererror").text( "Enter Username" ).css("color","red").show();
event.preventDefault();
}
if( user.length<6){
		 $("#signup-username").css("border","2px solid red");
		 $("#signupusererror").text( "Username should have atleast 6 characters" ).css("color","red").show();
event.preventDefault();}
else if( email ==''){
$("#signup-email").css("border","2px solid red");
$("#signup-email").next('span').text( "Enter Email Id" ).css("color","red").show();
event.preventDefault();

}
else if( re.test(email)==false)
		{
$("#signup-email").css("border","2px solid red");
$("#signup-email").next('span').text( "Enter Valid email" ).css("color","red").show();
event.preventDefault();
		}



	else if(password =='')
	{$("#signup-password").css("border","2px solid red");
	$("#signuppasserror").text( "Enter Password" ).css("color","red").show();
	event.preventDefault();
}
	else if(password.length<7)
			 {error=1;
				 $("#signup-password").css("border","2px solid red");
			 $("#signuppasserror").text( "Minimum length should be 7" ).css("color","red").show();
			 event.preventDefault();
}
else if(flag==1 || flag==2)
{event.preventDefault();}

else {
$("#signupform").submit();
}
});

	//IE9 placeholder fallback
	//credits http://www.hagenburger.net/BLOG/HTML5-Input-Placeholder-Fix-With-jQuery.html
	if(!Modernizr.input.placeholder){
		$('[placeholder]').focus(function() {
			var input = $(this);
			if (input.val() == input.attr('placeholder')) {
				input.val('');
		  	}
		}).blur(function() {
		 	var input = $(this);
		  	if (input.val() == '' || input.val() == input.attr('placeholder')) {
				input.val(input.attr('placeholder'));
		  	}
		}).blur();
		$('[placeholder]').parents('form').submit(function() {
		  	$(this).find('[placeholder]').each(function() {
				var input = $(this);
				if (input.val() == input.attr('placeholder')) {
			 		input.val('');
				}
		  	})
		});
	}

});


//credits http://css-tricks.com/snippets/jquery/move-cursor-to-end-of-textarea-or-input/
jQuery.fn.putCursorAtEnd = function() {
	return this.each(function() {
    	// If this function exists...
    	if (this.setSelectionRange) {
      		// ... then use it (Doesn't work in IE)
      		// Double the length because Opera is inconsistent about whether a carriage return is one character or two. Sigh.
      		var len = $(this).val().length * 2;
      		this.setSelectionRange(len, len);
    	} else {
    		// ... otherwise replace the contents with itself
    		// (Doesn't work in Google Chrome)
      		$(this).val($(this).val());
    	}
	});
};