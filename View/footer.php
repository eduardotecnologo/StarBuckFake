<!--  Footer   -->
		<footer>
			<div class="row row-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-2 text-center">
							<img class="logostar" src="img/logo.png" alt="Logo">
						</div>
						<div class="col-md-10">
							<div class="row row-cols">
								<div class="col-md-4 col-popular-post">

									<h4>Post Polpular</h4>
									<ul class="list-unstyled">
										<li>
											<h5>Café café Café café Café café</h5>
											<time>Outubro 21, 2016</time>	
										</li>
										<li>
											<h5>Café café Café café Café café</h5>
											<time>Outubro 21, 2016</time>	
										</li>
									</ul>
								</div>
								
								<div class="col-md-4 col-links">
									
									<h4>Links</h4>
									<div class="list-unstyled">
										<li><a href="#"><i class="fa fa-angle-right"></i> Compras</a></li>
										<li><a href="#"><i class="fa fa-angle-right"></i> Sandwich</a></li>
										<li><a href="#"><i class="fa fa-angle-right"></i> Blog</a></li>
										<li><a href="#"><i class="fa fa-angle-right"></i> Empresa</a></li>
									</div>
								</div>
								<div class="col-md-4 col-get-in-touch">
									
									<h4>Contato</h4>
								<address>
								<i class="fa fa-map-marker"></i>  Juiz de Fora, Brazil - Cidade do Sol - MG
								</address>
								<p><a href="#"><i class="fa fa-phone"></i>  Tel: 55+ (32)8702-4149</a></p>
								<ul class="list-unstyled list-socials">
									<li>
										<a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
									</li>
									<li>
										<a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
									</li>
									<li>
										<a href="#" target="_blank"><i class="fa fa-github"></i></a>
									</li>
									<li>
										<a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
									</li>
								</ul>

								</div>
								<div class="col-md-4 col-popular-post"></div>
							</div>
						</div>
					</div>
				</div>
				</div>

			<div class="row row-footer-botton">
			<p class="pull-left text-footer">Copyrite StarBucks café 2016. All right reserved.</p>
			<p class="pull-right text-footer">Create by Eduardo ALexandre</p>
				</div>
			</div>
		</footer>
	
		<script src="lib/jquery/jquery.js"></script>
		<script src="lib/bootstrap/js/bootstrap.min.js"></script>
		<script>
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
			});
		</script>
	</body>
	</html>	