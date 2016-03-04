$(document).ready(function() {

	$('#dp').mouseover(function () {
			$('.changedp').show();
	});
	$('#dp').mouseout(function () {
				$('.changedp').hide();
		});

	$('#event').mouseover(function () {
				//$('.event').show();
				//$('.event').fadeIn(1000);

			$('.event').fadeTo("slow",0.8);

		});
	$('#event').mouseout(function () {
				$('.event').hide();
	});

	$('#gallery').mouseover(function () {
					//$('.gallery').show();
					$('.gallery').fadeTo("slow",0.8);
			});
		$('#gallery').mouseout(function () {
					$('.gallery').hide();
	});

	$('#service').mouseover(function () {
	$('.service').fadeTo("slow",0.8);
					//$('.service').show();
			});
		$('#service').mouseout(function () {
					$('.service').hide();
	});

	$('#post').mouseover(function () {
	$('.post').fadeTo("slow",0.8);
					//$('.post').show();
			});
		$('#post').mouseout(function () {
					$('.post').hide();
	});

		$('#dp').click(function () {
		var id = '#dialog';
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		$('#mask').fadeIn(1000);
		$('#mask').fadeTo("slow",0.8);
		var winH = $(window).height();
		var winW = $(window).width();
		$(id).css('top',  winH/2-$(id).height()/2);
		$(id).css('left', winW/2-$(id).width()/2);
		$(id).fadeIn(2000);
		});
	$('#mask').click(function () {
		$(this).hide();
		$('.window').hide();
	});



	$('.service').click(function () {
				var id = '#dialog4';
				var maskHeight = $(document).height();
				var maskWidth = $(window).width();
				$('#mask').css({'width':maskWidth,'height':maskHeight});
				$('#mask').fadeIn(1000);
				$('#mask').fadeTo("slow",0.8);
				var winH = $(window).height();
				var winW = $(window).width();
				$(id).css('top',  winH/2-$(id).height()/2);
				$(id).css('left', winW/2-$(id).width()/2);
				$(id).fadeIn(2000);
				});

			$('#mask').click(function () {
				$(this).hide();
				$('.window4').hide();
	});
	 $(".post").click(function(){

	        $("#newsfeed").slideToggle("slow");
	       window.location="#newsfeed";
		   	        window.focus();

    });
     $(".post").click(function(){

		        $("#newsfeed").slideToggle("slow");
		       window.location="#newsfeed";
			   	        window.focus();

    });
	$('#gal').click(function () {
						$('.window2').hide();

					var id = '#dialog5';
					var maskHeight = $(document).height();
					var maskWidth = $(window).width();
					$('#mask').css({'width':maskWidth,'height':maskHeight});
					$('#mask').fadeIn(1000);
					$('#mask').fadeTo("slow",0.8);
					var winH = $(window).height();
					var winW = $(window).width();
					$(id).css('top',  winH/2-$(id).height()/2);
					$(id).css('left', winW/2-$(id).width()/2);

					$(id).fadeIn(2000);
					});

				$('#mask').click(function () {
					$(this).hide();
					$('.window5').hide();
	});
	$('#createevent').click(function () {
							$('.window1').hide();

						var id = '#dialog6';
						var maskHeight = $(document).height();
						var maskWidth = $(window).width();
						$('#mask').css({'width':maskWidth,'height':maskHeight});
						$('#mask').fadeIn(1000);
						$('#mask').fadeTo("slow",0.8);
						var winH = $(window).height();
						var winW = $(window).width();
						$(id).css('top',  winH/2-$(id).height()/2);
						$(id).css('left', winW/2-$(id).width()/2);

						$(id).fadeIn(2000);
						});

					$('#mask').click(function () {
						$(this).hide();
						$('.window6').hide();
	});
	$("#insertevent").on('click', function(e) {
	alert("hello");
	var instname=$("#subevent").val();
	var oname=$("#catevent").val();
	var hn=$("#textevent").val();

	if(instname==""||oname==""||hn=="")
	{ alert("Fill all fields");

	e.preventDefault();}


	else{
	      $("#frmevent").submit();
		}
	});


});