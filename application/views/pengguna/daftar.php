        <!-- main content -->
        <section class="box">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="text-dark-blue text-center fancy-heading">
							<h1 class="font-700">Daftar</h1>
							<hr class="text-dark-blue size-30 center-me">
							<br>			
						</div>
					</div>
				</div> <!-- /.row -->

					<div class="col-md-12">
						<form action="<?php echo base_url(); ?>sipti_controller/halaman_utama_pengguna" class="contact-form row">
							<p class="col-md-12">
								<input type="text" name="name" placeholder="NRP">
							</p>
							<p class="col-md-12">
								<input type="text" name="email" placeholder="Nama">
							</p>
							<p class="col-md-12">
								<input type="password" name="web" placeholder="Password">
							</p>
							<p class="col-md-12">
								<input type="text" name="web" placeholder="No Telp">
							</p>
							<p class="col-md-12">
								<textarea name="text" placeholder="Alamat"></textarea>
							</p>							
							<p class="col-md-12">
								<button type="submit" class="button-md uppercase to-right hover-dark-green green text-white soft-corners medium-button">Daftar</button>
							</p>
						</form>
					</div>
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</section> <!-- /.box -->