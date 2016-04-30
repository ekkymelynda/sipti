        <!-- main content -->
        <section class="box">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="text-dark-blue text-center fancy-heading">
							<h1 class="font-700">Masuk</h1>
							<hr class="text-dark-blue size-30 center-me">
							<br>			
						</div>
					</div>
				</div> <!-- /.row -->

					<div class="col-md-12">
						<form action="<?php echo base_url(); ?>sipti_controller/lihat_semua_buku" class="contact-form row">
							<p class="col-md-12">
								NRP
								<input type="text" name="name" placeholder="NRP" value="5113100200">
							</p>
							<p class="col-md-12">
								Password
								<input type="password" name="web" placeholder="Password" value="a">
							</p>	
							<p class="col-md-12">
								<button type="submit" class="button-md uppercase to-right hover-dark-green green text-white soft-corners medium-button">Masuk</button>
							</p>
						</form>
					</div>
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</section> <!-- /.box -->