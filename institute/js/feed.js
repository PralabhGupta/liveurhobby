$(document).ready(function() {

	$('#dp').mouseover(function () {
			$('.changedp').show();
	});
	$('#dp').mouseout(function () {
				$('.changedp').hide();
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
		$('#insertmusic').on('click',function () {


							var id = '#dialog1';
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
							$('.window1').hide();
	});
	$('#insertdance').on('click',function () {


								var id = '#dialog2';
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
								$('.window2').hide();
	});
	$('#insertsport').on('click',function () {


								var id = '#dialog3';
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
								$('.window3').hide();
	});
	$('#insertteach').on('click',function () {


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
	$("#insertevent").on('click', function(e) {

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