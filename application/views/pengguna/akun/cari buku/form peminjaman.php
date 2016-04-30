        <!-- main content -->
        <section class="box">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="text-dark-blue text-center fancy-heading">
							<h1 class="font-700">Form Peminjaman</h1>
							<hr class="text-dark-blue size-30 center-me">
							<br>			
						</div>
					</div>
				</div> <!-- /.row -->

					<div class="col-md-12">
						<form action="<?php echo base_url(); ?>sipti_controller/notifikasi_form" class="contact-form row">
							<p class="col-md-12">
								<input type="text" name="name" placeholder="NRP">
							</p>
							<p class="col-md-12">
								<input type="text" name="email" placeholder="Durasi Pinjam">
							</p>
							<p class="col-md-12">
								<button type="submit" class="button-md uppercase to-right hover-dark-green green text-white soft-corners medium-button">Pinjam</button>
							</p>
						</form>
					</div>
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</section> <!-- /.box -->