        <!-- main content -->
        <section class="box">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="text-dark-blue text-center fancy-heading">
							<h1 class="font-700">Daftarkan Buku</h1>
							<hr class="text-dark-blue size-30 center-me">
							<br>			
						</div>
					</div>
				</div> <!-- /.row -->

					<div class="col-md-12">
						<form action="<?php echo base_url(); ?>sipti_controller/lihat_daftar_buku" class="contact-form row">
							<p class="col-md-12">
								<input type="text" name="name" placeholder="ID">
							</p>
							<p class="col-md-12">
								<input type="text" name="email" placeholder="Judul">
							</p>
							<p class="col-md-12">
								<input type="text" name="email" placeholder="Kategori">
							</p>
							<p class="col-md-12">
								<input type="text" name="email" placeholder="Pengarang">
							</p>
							<p class="col-md-12">
								<input type="text" name="email" placeholder="Penerbit">
							</p>
							<p class="col-md-12">
								<input type="text" name="email" placeholder="Tahun Terbit">
							</p>
							<p class="col-md-12">
								<textarea name="text" placeholder="Deskripsi"></textarea>
							</p>
							<p class="col-md-12">
								<input type="text" name="email" placeholder="Status">
							</p>
							<p class="col-md-12">
								<input type="text" name="web" placeholder="Link Gambar">
							</p>							
							<p class="col-md-12">
								<button type="submit" class="button-md uppercase to-right hover-dark-green green text-white soft-corners medium-button">Daftar</button>
							</p>
						</form>
					</div>
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</section> <!-- /.box -->