$(document).ready(function(){

				$("#logostar").on("mouseover",function(){

					$("#banner h1").addClass("efect");

				}).on("mouseout", function(){

					$("#banner h1").removeClass("efect");

				});	
				
				$("#input-search").on("focus", function(){

					$("li.search").addClass("true");

				}).on("blur", function(){

					$("li.search").removeClass("true");
				});
    				
    				//Set AutoPlay to 3 seconds	
                 	$(".thumbnails").owlCarousel({
					 
					      autoPlay: 3000, 				 
					      items : 4

				});
                 	//Passa os sliders	
                 	var owl = $(".thumbnails").data('owlCarousel');

                 	$('#btn-sandwich-prev').on("click", function(){

                 		owl.prev();
                 	});

                 	$('#btn-sandwich-next').on("click", function(){

                 		owl.next();
                 	});

                 	//Botão de topo no bobile	
                 	$("#page-up").on("click", function(event){

                 		$("body").animate({

                 			scrollTop:0
                 		}, 1000);

                 		event.preventDefault();
                });

                 	$("#btn-bars").on("click", function() {
                 		
                 		$("header").toggleClass("open-menu");
                });

                 	$("#menu-mobile-mask, .btn-close").on("click", function() {

                 		$("header").removeClass("open-menu");
                });

                 	$("#btn-search").on("click", function(){

                 		$("header").toggleClass("open-search");

                 		$("#input-search-mobile").focus();

                });


			});