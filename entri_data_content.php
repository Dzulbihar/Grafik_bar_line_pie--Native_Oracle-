<?php 

include 'koneksi.php';
include 'barchart/database_chart.php';

 ?>


<br>

<!-- Main Tabel -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-header">
            <h3 class="card-title"> ARUS BONGKAR MUAT PETIKEMAS INTERNASIONAL 2020 & 2021
            </h3>
          </div>
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Aksi</th>
                  <th>Location</th>
                  <th>Year</th>
                  <th>Month</th>
                  <th>Ships Call</th>
                  <th>G.T (Tonage)</th>
                  <th>Import Full Container 20</th>
                  <th>Import Full Container 40</th>
                  <th>Import Full Container 45</th>
                  <th>Import Empty Container 20</th>
                  <th>Import Empty Container 40</th>
                  <th>Import Empty Container 45</th>
                  <th>Export Full Container 20</th>
                  <th>Export Full Container 40</th>
                  <th>Export Full Container 45</th>
                  <th>Export Empty Container 20</th>
                  <th>Export Empty Container 40</th>
                  <th>Export Empty Container 45</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  include 'koneksi.php';
                  $no = 1;
                  $data = oci_parse($koneksi, 'SELECT * from ARUS_BONGKAR_MUAT');
                  oci_execute($data);
                  while(($arus = oci_fetch_array($data, OCI_BOTH)) != false)
                  {
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>

                      <td>
                        <a class="btn btn-warning btn-xs" href="edit.php?id=<?php echo $arus['ID']; ?>">Edit</a>

                        <a href="#" onClick="confirm_modal('hapus.php?id=<?php echo  $arus['ID']; ?>');"><button class="btn btn-danger btn-xs" title="Hapus">Hapus</button></a>
                      </td>

                      <td><?php echo $arus['LOKASI']; ?></td>
                      <td><?php echo $arus['TAHUN']; ?></td>
                      <td><?php echo $arus['BULAN']; ?></td>
                      <td><?php echo $arus['SHIPCALL']; ?></td>
                      <td><?php echo $arus['GT']; ?></td>

                      <td><?php echo $arus['IF20']; ?></td>
                      <td><?php echo $arus['IF40']; ?></td>
                      <td><?php echo $arus['IF45']; ?></td>

                      <td><?php echo $arus['IE20']; ?></td>
                      <td><?php echo $arus['IE40']; ?></td>
                      <td><?php echo $arus['IE45']; ?></td>

                      <td><?php echo $arus['EF20']; ?></td>
                      <td><?php echo $arus['EF40']; ?></td>
                      <td><?php echo $arus['EF45']; ?></td>

                      <td><?php echo $arus['EE20']; ?></td>
                      <td><?php echo $arus['EE40']; ?></td>
                      <td><?php echo $arus['EE45']; ?></td>

                    </tr>
                  <?php 
                }
                ?>
              </tbody>
            </table>

            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">
              Tambah Data
            </button>

          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- /.content -->


<!-- Modal Popup untuk delete-->
<div class="modal fade" id="modal_delete">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top:100px;">
      <div class="modal-header">

        <h4 class="modal-title" style="text-align:center;">Anda yakin akan menghapus data ini..?</h4>
      </div>

      <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
        <a href="#" class="btn btn-danger btn-sm" id="delete_link">Hapus</a>
        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!--  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->

<!-- Modal Tambah ------------------------------------------------- -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> <b> Tambah Data Arus Bongkar Muat Petikemas Internasional 2020 </b> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <form method="post" action="tambah_aksi.php">

          <input type="hidden" name="LOKASI" id="LOKASI" value="Internasional">

          <div class="form-group row">
<!--             <div class="col-md-4">
              <label> ID </label>
              <input type="number" name="ID" id="ID" class="form-control">
            </div> -->
            <div class="col-md-6">
              <label> Tahun </label>
              <select name="TAHUN" id="TAHUN" class="form-control">
                <option selected> -- Pilih -- </option>
                <option value="2020"> 2020 </option>
                <option value="2021"> 2021 </option>
              </select>
            </div>
            <div class="col-md-6">
              <label> Bulan </label>
              <select name="BULAN" id="BULAN" class="form-control">
                <option selected> -- Pilih -- </option>
                <option value="Januari"> Januari </option>
                <option value="Februari"> Februari </option>
                <option value="Maret"> Maret </option>
                <option value="April"> April </option>
                <option value="Mei"> Mei </option>
                <option value="Juni"> Juni </option>
                <option value="Juli"> Juli </option>
                <option value="Agustus"> Agustus </option>
                <option value="September"> September </option>
                <option value="Oktober"> Oktober </option>
                <option value="November"> November </option>
                <option value="Desember"> Desember </option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-6">
              <label> Ships Call </label>
              <input type="number" name="SHIPCALL" id="SHIPCALL" class="form-control" value="0">
            </div>
            <div class="col-md-6">
              <label> G.T (Tonage) </label>
              <input type="number" name="GT" id="GT" class="form-control" value="0">
            </div>
          </div>

          <hr><hr>
          <h3 align="center"> <b> IMPORT CONTAINER </b> </h3>
          <hr><hr>

          <h5 align="center"> <b> Full Container </b> </h5>
          <hr>

          <div class="form-group row">
            <div class="col-md-4">
              <label>  20  </label>
              <input type="number" name="IF20" id="IF20" class="form-control" value="0">
            </div>
            <div class="col-md-4">
              <label>  40  </label>
              <input type="number" name="IF40" id="IF40" class="form-control" value="0">
            </div>
            <div class="col-md-4">
              <label>  45  </label>
              <input type="number" name="IF45" id="IF45" class="form-control" value="0">
            </div>
          </div>

          <hr>
          <h5 align="center"> <b> Empty Container </b> </h5>
          <hr>

          <div class="form-group row">
            <div class="col-md-4">
              <label>  20 </label>
              <input type="number" name="IE20" id="IE20" class="form-control" value="0">
            </div>
            <div class="col-md-4">
              <label>  40 </label>
              <input type="number" name="IE40" id="IE40" class="form-control" value="0">
            </div>
            <div class="col-md-4">
              <label>  45 </label>
              <input type="number" name="IE45" id="IE45" class="form-control" value="0">
            </div>
          </div>


          <hr><hr>
          <h3 align="center"> <b> EXPORT CONTAINER </b> </h3>
          <hr><hr>

          <h5 align="center"> <b> Full Container </b> </h5>
          <hr>

          <div class="form-group row">
            <div class="col-md-4">
              <label>  20  </label>
              <input type="number" name="EF20" id="EF20" class="form-control" value="0">
            </div>
            <div class="col-md-4">
              <label>  40  </label>
              <input type="number" name="EF40" id="EF40" class="form-control" value="0">
            </div>
            <div class="col-md-4">
              <label>  45  </label>
              <input type="number" name="EF45" id="EF45" class="form-control" value="0">
            </div>
          </div>

          <hr>
          <h5 align="center"> <b> Empty Container </b> </h5>
          <hr>

          <div class="form-group row">
            <div class="col-md-4">
              <label>  20 </label>
              <input type="number" name="EE20" id="EE20" class="form-control" value="0">
            </div>
            <div class="col-md-4">
              <label>  40 </label>
              <input type="number" name="EE40" id="EE40" class="form-control" value="0">
            </div>
            <div class="col-md-4">
              <label>  45 </label>
              <input type="number" name="EE45" id="EE45" class="form-control" value="0">
            </div>
          </div>

          <div class="form-group row">
            <!-- Tombol -->    
            <div class="col-md-12">
              <br>
              <button type="submit" class="btn btn-primary btn-sm">
                Simpan   
              </button>
              <button type="button" class="btn btn-secondary btn-sm float-right" data-dismiss="modal">Tutup</button>
            </div>

          </form>  
        </div>

        <!-- EndFormulir __________________________________________________________________________________________ -->
      </div>
    </div>
  </div>
  </div>
  <!-- EndModal ------------------------------------------------- -->





<!-- Javascript untuk popup modal Delete-->
<script type="text/javascript">
    function confirm_modal(delete_url)
    {
      $('#modal_delete').modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script>  