$(document).ready(function() {

		var id = '#dialog';

		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();

		//Set heigth and width to mask to fill up the whole screen
		$('#mask').css({'width':maskWidth,'height':maskHeight});

		//transition effect
		//$('#mask').fadeIn(1000);
		//$('#mask').fadeTo("slow",0.8);

		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();

		//Set the popup window to center
		$(id).css('top',  winH/2-$(id).height()/2);
		$(id).css('left', winW/2-$(id).width()/2);

		//transition effect
		$(id).fadeIn(2000);
var flag;
$("#sub").on('click', function(e) {
var instname=$("#iname").val();
var oname=$("#oname").val();
var hn=$("#hno").val();
var state=$("#state").val();
var city=$("#city").val();
var phone=$("#phone").val();
var email=$("#email").val();
var year=$("#yr").val();
var music=$('#music').is(':checked');
var dance=$("#dance").is(':checked');
var art=$("#art").is(':checked');
var sport=$("#sports").is(':checked');
//alert(art);
//alert(music);
//alert(dance);
//alert(sport);
if(instname==""||oname==""||hn==""||state==""||city==""||phone==""||email==""||year=="")
{ alert("Fill all fields");

e.preventDefault();}
 else if(!music&&!art&&!dance&&!sport)
{ alert("Select a Service");

e.preventDefault();}

else{
      $("#frm").submit();
	}
	});
	$("#oname").focus(function(){
	var instname=$("#iname").val();
				if(instname=="")
					{$("#iname").css("border","2px solid red");
					$("#iname").focus();
					flag=1;
					e.preventDefault();
				}
				else{$("#iname").css("border","2px solid green");}

	});
	$("#hno").focus(function(){
		var instname=$("#oname").val();
					if(instname=="")
						{$("#oname").css("border","2px solid red");
						$("#oname").focus();
						flag=1;
						e.preventDefault();
					}
					else{$("#oname").css("border","2px solid green");}

	});
	$("#state").focus(function(){
			var instname=$("#hno").val();
						if(instname=="")
							{$("#hno").css("border","2px solid red");
							$("#hno").focus();
							flag=1;
							e.preventDefault();
						}
						else{$("#hno").css("border","2px solid green");}

	});
	$("#city").focus(function(){
				var instname=$("#state").val();
							if(instname=="")
								{$("#state").css("border","2px solid red");
								$("#state").focus();
								flag=1;
								e.preventDefault();
							}
							else{$("#state").css("border","2px solid green");}

	});
	$("#phone").focus(function(){
					var instname=$("#city").val();
								if(instname=="")
									{$("#city").css("border","2px solid red");
									$("#city").focus();
									flag=1;
									e.preventDefault();
								}
								else{$("#city").css("border","2px solid green");}

	});
	$("#email").focus(function(){
				var instname=$("#phone").val();
				var mob = /^[1-9]{1}[0-9]{9}$/;
							if(instname=="")
								{$("#phone").css("border","2px solid red");
								$("#phone").focus();
								flag=1;
								e.preventDefault();
							}
							else if(mob.test(instname) == false)
								{ $("#phone").css("border","2px solid red");
								$("#phone").focus();
								flag=1;
								e.preventDefault();

							}

							else{$("#phone").css("border","2px solid green");}

	});
	$("#yr").focus(function(){
					var instname=$("#email").val();
					var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
								if(instname=="")
									{$("#email").css("border","2px solid red");
									$("#email").focus();
									flag=1;
									e.preventDefault();
								}
								else if(re.test(instname) == false)
									{ $("#email").css("border","2px solid red");
									$("#email").focus();
									flag=1;
									e.preventDefault();

								}

								else{$("#email").css("border","2px solid green");}

	});


});
