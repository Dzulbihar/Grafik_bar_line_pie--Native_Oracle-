<?php 

include 'koneksi.php';

$id = $_GET['id'];
$data = oci_parse($koneksi,"select * from ARUS_BONGKAR_MUAT where id='$id'");
oci_execute($data);

while(($arus = oci_fetch_array($data, OCI_BOTH)) != false)
	{
?>


<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Project Edit</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item active">Project Edit</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

	<form method="post" action="update.php">
		
		<div class="row">
			<div class="col-md-12">
				<div class="card card-secondary">
					<div class="card-header">
						<h3 class="card-title"> ARUS BONGKAR MUAT </h3>
						<div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
								<i class="fas fa-minus"></i>
							</button>
						</div>
					</div>

					<div class="card-body">
						<div class="form-group row">
							<div class="col-md-4">
								<label>  Lokasi </label>

								<input type="hidden" name="ID" value="<?php echo $arus['ID']; ?>">

								<select name="LOKASI" id="LOKASI" class="form-control">
									<option value="<?php echo $arus['LOKASI']; ?>"> 
										<?php echo $arus['LOKASI']; ?>
									</option>
									<option value="Internasional">Internasional</option>
									<option value="Domestik">Domestik</option>
								</select>
							</div>
							<div class="col-md-4">
								<label>  Tahun </label>
								<select name="TAHUN" id="TAHUN" class="form-control">
									<option value="<?php echo $arus['TAHUN']; ?>"> 
										<?php echo $arus['TAHUN']; ?>
									</option>
									<option value="2020">2020</option>
									<option value="2021">2021</option>
								</select>
							</div>
							<div class="col-md-4">
								<label>  Bulan </label>
								<select name="BULAN" id="BULAN" class="form-control">
									<option value="<?php echo $arus['BULAN']; ?>"> 
										<?php echo $arus['BULAN']; ?>
									</option>
									<option value="Januari">Januari</option>
									<option value="Februari">Februari</option>
									<option value="Maret">Maret</option>
									<option value="April">April</option>
									<option value="Mei">Mei</option>
									<option value="Juni">Juni</option>
									<option value="Juli">Juli</option>
									<option value="Agustus">Agustus</option>
									<option value="September">September</option>
									<option value="Oktober">Oktober</option>
									<option value="November">November</option>
									<option value="Desember">Desember</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-6">
								<label>  Ships Call </label>
								<input type="number" name="SHIPCALL" id="SHIPCALL" class="form-control" value="<?php echo $arus['SHIPCALL']; ?>">
							</div>
							<div class="col-md-6">
								<label>  G.T (Tonage) </label>
								<input type="number" name="GT" id="GT" class="form-control" value="<?php echo $arus['GT']; ?>">
							</div>
						</div>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="card card-secondary">
					<div class="card-header">
						<h3 class="card-title"> IMPORT CONTAINER </h3>
						<div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
								<i class="fas fa-minus"></i>
							</button>
						</div>
					</div>

					<div class="card-body">
						<div class="form-group row">
							<div class="col-md-4">
								<label>  Full Container 20 </label>
								<input type="number" name="IF20" id="IF20" class="form-control" value="<?php echo $arus['IF20']; ?>">
							</div>
							<div class="col-md-4">
								<label>  Full Container 40 </label>
								<input type="text" name="IF40" id="IF40" class="form-control" value="<?php echo $arus['IF40']; ?>">
							</div>
							<div class="col-md-4">
								<label>  Full Container 45 </label>
								<input type="text" name="IF45" id="IF45" class="form-control" value="<?php echo $arus['IF45']; ?>">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-4">
								<label>  Empty Container 20 </label>
								<input type="number" name="IE20" id="IE20" class="form-control" value="<?php echo $arus['IE20']; ?>">
							</div>
							<div class="col-md-4">
								<label>  Empty Container 40 </label>
								<input type="number" name="IE40" id="IE40" class="form-control" value="<?php echo $arus['IE40']; ?>">
							</div>
							<div class="col-md-4">
								<label>  Empty Container 45 </label>
								<input type="text" name="IE45" id="IE45" class="form-control" value="<?php echo $arus['IE45']; ?>">
							</div>
						</div>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>

			<div class="col-md-6">
				<div class="card card-secondary">
					<div class="card-header">
						<h3 class="card-title"> EXPORT CONTAINER </h3>
						<div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
								<i class="fas fa-minus"></i>
							</button>
						</div>
					</div>

					<div class="card-body">
						<div class="form-group row">
							<div class="col-md-4">
								<label>  Full Container 20 </label>
								<input type="number" name="EF20" id="EF20" class="form-control" value="<?php echo $arus['EF20']; ?>">
							</div>
							<div class="col-md-4">
								<label>  Full Container 40 </label>
								<input type="text" name="EF40" id="EF40" class="form-control" value="<?php echo $arus['EF40']; ?>">
							</div>
							<div class="col-md-4">
								<label>  Full Container 45 </label>
								<input type="text" name="EF45" id="EF45" class="form-control" value="<?php echo $arus['EF45']; ?>">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-4">
								<label>  Empty Container 20 </label>
								<input type="number" name="EE20" id="EE20" class="form-control" value="<?php echo $arus['EE20']; ?>">
							</div>
							<div class="col-md-4">
								<label>  Empty Container 40 </label>
								<input type="number" name="EE40" id="EE40" class="form-control" value="<?php echo $arus['EE40']; ?>">
							</div>
							<div class="col-md-4">
								<label>  Empty Container 45 </label>
								<input type="text" name="EE45" id="EE45" class="form-control" value="<?php echo $arus['EE45']; ?>">
							</div>
						</div>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>
		</div>

		<div class="form-group row">
			<!-- Tombol -->    
			<div class="col-md-12">
				<br>
				<button type="submit" class="btn btn-primary btn-sm">
					Simpan
				</button>
				<a href="entri_data.php" class="btn btn-secondary btn-sm float-right">Tutup</a>
			</div>
		</div>
	</form>
	

</section>


<?php 
}
?>
