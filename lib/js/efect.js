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
    
                 	$(".thumbnails").owlCarousel({
					 
					      autoPlay: 3000, //Set AutoPlay to 3 seconds					 
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

			});