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
						<form class="contact-form row">
							<p class="col-md-12">
								<input type="text" name="" placeholder="NRP">
							</p>
							<p class="col-md-12">
								<input type="text" name="" placeholder="Durasi Pinjam">
							</p>
							<p class="col-md-12">
								<button type="button" onclick="verifikasi()" class="button-md uppercase to-right hover-dark-green green text-white soft-corners medium-button">Pinjam</button>
							</p>
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
					  confirmButtonClass: "btn-danger",
					  confirmButtonText: "Ya",
					  closeOnConfirm: false
},
function(){
  swal("Verified!", "Peminjaman buku berhasil dilakukan", "success");
});
			}
		</script>