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
						<form action="<?php echo base_url(); ?>sipti_controller/notifikasi_form">
						<div class="blog-content">
							<div class="row">
								<div class="col-md-3">
									NRP
								</div>
								<div class="col-md-1" style="text-align:center;">
									:
								</div>
								<div class="col-md-8">
									5113100200 <i class></i>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									Judul
								</div>
								<div class="col-md-1" style="text-align:center;">
									:
								</div>
								<div class="col-md-8">
									Hujan <i class></i>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									Deskripsi
								</div>
								<div class="col-md-1" style="text-align:center;">
									:
								</div>
								<div class="col-md-8">
									Dalam novel ini kamu akan merasakan bagaimana rasanya harus tegar ketika ditempa masalah, melangkah maju ketika masalah begitu berat, dan rasanya jatuh cinta.
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									Kategori
								</div>
								<div class="col-md-1" style="text-align:center;">
									:
								</div>
								<div class="col-md-8">
									Sastra dan Fiksi
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									Pengarang
								</div>
								<div class="col-md-1" style="text-align:center;">
									:
								</div>
								<div class="col-md-8">
									Tere Liye
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									Penerbit
								</div>
								<div class="col-md-1" style="text-align:center;">
									:
								</div>
								<div class="col-md-8">
									Gramedia
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									Thn Terbit
								</div>
								<div class="col-md-1" style="text-align:center;">
									:
								</div>
								<div class="col-md-8">
									2014
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									Durasi Peminjaman
								</div>
								<div class="col-md-1" style="text-align:center;">
									:
								</div>
								<div class="col-md-8">
									5 hari <i class></i>
								</div>
							</div>
							<div class="row">
								<label><input type="checkbox" value="">Saya yakin ingin memverifikasi peminjaman buku tersebut</label>
							</div>
							<div>
								<button type="submit" href="" class="button-md uppercase to-right hover-dark-green green text-white soft-corners medium-button">Pinjam</button>
							</div>
						</div>
					</form>
					</div>
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</section> <!-- /.box -->

		<script type="text/javascript">
			function verifikasi(){
				swal({
					  title: "Apakah anda yakin untuk meminjam buku ini?",
					  type: "success",
					  showCancelButton: true,
					  CancelButtonText: "Batal",
					  confirmButtonClass: "btn-danger",
					  confirmButtonText: "Ya",
					  closeOnConfirm: false
},
function(){
  swal("Verified!", "Peminjaman buku berhasil dilakukan", "success");
});
			}
		</script>