// JavaScript Document

var Ion = {



	init : function()
	{
		console.log("Inició ION");

		$(document).ready(function() {

			var alto = $(window).height();
			var ancho = $(window).width();





			$(".closeModalion").live('click', function() {
				$('.modal').modal('hide');

		  	});

			$(".btnMunu").live('click', function() {
				$('.menuMunu').stop().slideToggle(300);
				$('.menuInter').stop().delay(150).slideToggle(300);
		  	});

			$(".temp_search").live('click', function() {
				$('.ccc_buscar').slideToggle(300);
				$('.ccc_busqueda').slideToggle(500);
		  	});

			$(".bCambiar").live('click', function() {
				$('.dCambiar1').slideToggle(500);
				$('.dCambiar2').slideToggle(500);
		  	});

		  	$(".bBeycker").live('click', function() {
				$('.dBeycker1').slideToggle(500);
				$('.dBeycker2').slideToggle(500);
		  	});

		  	$(".bAsistencia").live('click', function() {
				$('.dAsistencia1').slideToggle(500);
				$('.dAsistencia2').slideToggle(500);
		  	});

		  	$(".bActividad").live('click', function() {
				$('.dActividad1').slideToggle(500);
				$('.dActividad2').slideToggle(500);
		  	});

		  	$(".bAsignaturas").live('click', function() {
				$('.dAsignaturas1').slideToggle(500);
				$('.dAsignaturas2').slideToggle(500);
		  	});

		  	$(".bMensajes").live('click', function() {
				$('.dMensajes1').slideToggle(500);
				$('.dMensajes2').slideToggle(500);
		  	});

			$(".bEmergencia").live('click', function() {
				$('.dEmergencia1').slideToggle(500);
				$('.dEmergencia2').slideToggle(500);
		  	});	

		  	$(".bChange").live('click', function() {
				$('.dChange1').slideToggle(500);
				$('.dChange2').slideToggle(500);
		  	});		  	

			$(".bAbrir1").live('click', function() {
				$('.dAbre1').slideToggle(500);
		  	});

		  	$(".bAbrir-bykr").live('click', function() {
				$('.dAbre-bykr1').slideToggle(500);
		  	});
			
			$(".next1").live('click', function() { $(this).slideUp(500); $('.next2').slideDown(500); });
			$(".next2").live('click', function() { $(this).slideUp(500); $('.next3').slideDown(500); });
			$(".next3").live('click', function() { $(this).slideUp(500); $('.next4').slideDown(500); });
			$(".next4").live('click', function() { $(this).slideUp(500); $('.next5').slideDown(500); });
						
			
			$(".next11").live('click', function() { $(this).slideUp(500); $('.next22').slideDown(500); });
			$(".next22").live('click', function() { $(this).slideUp(500); $('.next33').slideDown(500); });
			$(".next33").live('click', function() { $(this).slideUp(500); $('.next44').slideDown(500); });
			$(".next44").live('click', function() { $(this).slideUp(500); $('.next55').slideDown(500); });
			
			
			$(".next111").live('click', function() { $(this).slideUp(500); $('.next222').slideDown(500); });
			$(".next222").live('click', function() { $(this).slideUp(500); $('.next333').slideDown(500); });
			$(".next333").live('click', function() { $(this).slideUp(500); $('.next444').slideDown(500); });
			$(".next444").live('click', function() { $(this).slideUp(500); $('.next555').slideDown(500); });
			
			$(".next1111").live('click', function() { $(this).slideUp(500); $('.next2222').slideDown(500); });
			$(".next2222").live('click', function() { $(this).slideUp(500); $('.next3333').slideDown(500); });
			$(".next3333").live('click', function() { $(this).slideUp(500); $('.next4444').slideDown(500); });
			$(".next4444").live('click', function() { $(this).slideUp(500); $('.next5555').slideDown(500); });
			
			$(".ouff").live('click', function() { $(this).slideUp(500); $('.next1, .next11, .next111, .next1111').slideDown(500); });


			$(".bMsiguiente1").live('click', function() { $('.bMM2').trigger('click'); });
			$(".bMsiguiente2").live('click', function() { $('.bMM3').trigger('click'); });
			$(".bMsiguiente3").live('click', function() { $('.bMM4').trigger('click'); });
			$(".bMsiguiente4").live('click', function() { $('.bMM5').trigger('click'); });
			$(".bMsiguiente5").live('click', function() { $('.bMM6').trigger('click'); });
			$(".bMsiguiente6").live('click', function() { $('.bMM7').trigger('click'); });
			$(".bMsiguiente7").live('click', function() { $('.bMM8').trigger('click'); });


			$(".bMsiguiente11").live('click', function() {
				console.log("1");
				document.location = "#/plataforma/admin/registro/registro_informacion";
				$('.bMM2').delay(500).trigger('click');
				console.log("2");
			});

			$(".minMensaje").live('click', function() {
				$('.minMensaje').removeClass("leyendoMensaje");
				$(this).addClass("leyendoMensaje");
			});

			$(".optMenLat").live('click', function() {
				$('.optMenLat').removeClass("selli");
				$(this).addClass("selli");
			});




			$(".bAdd1").live('click', function() {
				$('.dAdd1').slideDown(500);
				$(this).slideUp(500);
		  	});
			$(".bSave1").live('click', function() {
				$('.dAdd1').slideUp(500);
				$('.bAdd1').slideDown(500);
		  	});

			$(".bAdd2").live('click', function() {
				$('.dAdd2').slideDown(500);
				$(this).slideUp(500);
		  	});
			$(".bSave2").live('click', function() {
				$('.dAdd2').slideUp(500);
				$('.bAdd2').slideDown(500);
		  	});

			$(".bCreate1").live('click', function() {
				$('.dCreate1').slideDown(500);
				$('.lCreate1').slideUp(500);
		  	});
			$(".bCreated1").live('click', function() {
				$('.dCreate1').slideUp(500);
				$('.lCreate1').slideDown(500);
		  	});

			$(".bCreate2").live('click', function() {
				$('.dCreate2').slideDown(500);
				$('.lCreate2').slideUp(500);
		  	});
			$(".bCreated2").live('click', function() {
				$('.dCreate2').slideUp(500);
				$('.lCreate2').slideDown(500);
		  	});
			$(".bCreate3").live('click', function() {
				$('.dCreate3').slideDown(500);
				$('.lCreate3').slideUp(500);
		  	});
			$(".bCreated3").live('click', function() {
				$('.dCreate3').slideUp(500);
				$('.lCreate3').slideDown(500);
		  	});
			$(".bCreate4").live('click', function() {
				$('.dCreate4').slideDown(500);
				$('.lCreate4').slideUp(500);
		  	});
			$(".bCreated4").live('click', function() {
				$('.dCreate4').slideUp(500);
				$('.lCreate4').slideDown(500);
		  	});
			$(".bCreate5").live('click', function() {
				$('.dCreate5').slideDown(500);
				$('.lCreate5').slideUp(500);
		  	});
			$(".bCreated5").live('click', function() {
				$('.dCreate5').slideUp(500);
				$('.lCreate5').slideDown(500);
		  	});
			$(".bCreate6").live('click', function() {
				$('.dCreate6').slideDown(500);
				$('.lCreate6').slideUp(500);
		  	});
			$(".bCreated6").live('click', function() {
				$('.dCreate6').slideUp(500);
				$('.lCreate6').slideDown(500);
		  	});






			$( ".jQ1" ).live( "click", function() {
			  $( ".icjQ1" ).attr({ src: "resources/img/icons/mE11.png"});
			  $( ".icjQ2" ).attr({ src: "resources/img/icons/mE2.png"});
			  $( ".icjQ3" ).attr({ src: "resources/img/icons/mE3.png"});
			  $( ".icjQ4" ).attr({ src: "resources/img/icons/mE4.png"});
			  $( ".icjQ5" ).attr({ src: "resources/img/icons/mE5.png"});
			  $( ".icjQ6" ).attr({ src: "resources/img/icons/mE6.png"});
			});
			$( ".jQ2" ).live( "click", function() {
			  $( ".icjQ1" ).attr({ src: "resources/img/icons/mE1.png"});
			  $( ".icjQ2" ).attr({ src: "resources/img/icons/mE22.png"});
			  $( ".icjQ3" ).attr({ src: "resources/img/icons/mE3.png"});
			  $( ".icjQ4" ).attr({ src: "resources/img/icons/mE4.png"});
			  $( ".icjQ5" ).attr({ src: "resources/img/icons/mE5.png"});
			  $( ".icjQ6" ).attr({ src: "resources/img/icons/mE6.png"});
			});
			$( ".jQ3" ).live( "click", function() {
			  $( ".icjQ1" ).attr({ src: "resources/img/icons/mE1.png"});
			  $( ".icjQ2" ).attr({ src: "resources/img/icons/mE2.png"});
			  $( ".icjQ3" ).attr({ src: "resources/img/icons/mE33.png"});
			  $( ".icjQ4" ).attr({ src: "resources/img/icons/mE4.png"});
			  $( ".icjQ5" ).attr({ src: "resources/img/icons/mE5.png"});
			  $( ".icjQ6" ).attr({ src: "resources/img/icons/mE6.png"});
			});
			$( ".jQ4" ).live( "click", function() {
			  $( ".icjQ1" ).attr({ src: "resources/img/icons/mE1.png"});
			  $( ".icjQ2" ).attr({ src: "resources/img/icons/mE2.png"});
			  $( ".icjQ3" ).attr({ src: "resources/img/icons/mE3.png"});
			  $( ".icjQ4" ).attr({ src: "resources/img/icons/mE44.png"});
			  $( ".icjQ5" ).attr({ src: "resources/img/icons/mE5.png"});
			  $( ".icjQ6" ).attr({ src: "resources/img/icons/mE6.png"});
			});
			$( ".jQ5" ).live( "click", function() {
			  $( ".icjQ1" ).attr({ src: "resources/img/icons/mE1.png"});
			  $( ".icjQ2" ).attr({ src: "resources/img/icons/mE2.png"});
			  $( ".icjQ3" ).attr({ src: "resources/img/icons/mE3.png"});
			  $( ".icjQ4" ).attr({ src: "resources/img/icons/mE4.png"});
			  $( ".icjQ5" ).attr({ src: "resources/img/icons/mE55.png"});
			  $( ".icjQ6" ).attr({ src: "resources/img/icons/mE6.png"});
			});
			$( ".jQ6" ).live( "click", function() {
			  $( ".icjQ1" ).attr({ src: "resources/img/icons/mE1.png"});
			  $( ".icjQ2" ).attr({ src: "resources/img/icons/mE2.png"});
			  $( ".icjQ3" ).attr({ src: "resources/img/icons/mE3.png"});
			  $( ".icjQ4" ).attr({ src: "resources/img/icons/mE4.png"});
			  $( ".icjQ5" ).attr({ src: "resources/img/icons/mE5.png"});
			  $( ".icjQ6" ).attr({ src: "resources/img/icons/mE66.png"});
			});


			$( ".bloqSelDiaIn" ).live( "click", function() {
			  $(".bloqSelDiaIn").removeClass('sellei');
			  $(this).addClass('sellei');
			});


			$(window).resize(function() {
				var alto = $(window).height();
				var ancho = $(window).width();

				setTimeout('Ion.calcularAlturas()', 10);
				setTimeout('Ion.calcularAlturas()', 1000);

			});


		});

		Ion.calcularAlturas();
		setTimeout('Ion.calcularAlturas()', 100);
		setTimeout('Ion.calcularAlturas()', 1000);

	},

	calcularAlturas : function(){
		var alto = $(window).height();
		var ancho = $(window).width();

		$(".allion").height(alto);

		$(".bodBuddy").height(alto-100);
		$(".menuMunu").height(alto-100);

		$(".menuLateral").css('min-height', alto-100);
		$(".contSingular").css('min-height', alto-100);



	},


};

Ion.init();



