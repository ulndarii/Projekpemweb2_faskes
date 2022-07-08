<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Fasilitas Kesehatan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Fasilitas Kesehatan <?=$fas->nama?></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">

        <div class="row mb-2">
          
            <table class="table table-striped">
              <tbody>
                <tr><td>Id</td><td><?=$fas->id?></td></tr>
                <tr><td>Nama Faskes</td><td><?=$fas->nama?></td></tr>
                <tr><th>Alamat</td><td><?=$fas->alamat?></td></tr>
                <tr><td>Latlong</td><td><?=$fas->latlong?></td></tr>
                <tr><td>Jenis Id</td><td><?=$fas->jenis_id?></td></tr>
                <tr><td>Deskripsi</td><td><?=$fas->deskripsi?></td></tr>
                <tr><td>Skor Rating</td><td><?=$fas->skor_rating?></td></tr>
                <tr><td>Foto1</td><td><?=$fas->foto1?></td></tr>
                <tr><td>Foto2</td><td><?=$fas->foto2?></td></tr>
                <tr><td>Foto3</td><td><?=$fas->foto3?></td></tr>
                <tr><td>Kecamatan Id</td><td><?=$fas->kecamatan_id?></td></tr>
                <tr><td>Website</td><td><?=$fas->website?></td></tr>
                <tr><td>Jumlah Dokter</td><td><?=$fas->jumlah_dokter?></td></tr>
                <tr><td>Jumlah Pegawai</td><td><?=$fas->jumlah_pegawai?></td></tr>
              </tbody>
            </table>
          </div>
         </hr>
          <div class="col-sm-4">
            <b>UPLOAD FOTO DISINI</b>
            <br/>
            
            <?php
            $filegambar = base_url('/uploads'.$fas->foto);
            //echo $filegambar;
            $array = get_headers($filegambar);
            $string = $array[0];
            if(strpos($string,"200"))
            {
              //echo 'url exists';
              echo '<img src="'.$filegambar.'" width="70%" class="img-thumbnail" alt="foto"/>';
            }
            else
            {
              //echo 'url does not exists';
              echo '<img src="'.base_url('/uploads/noimage.png').'" alt="foto"/>';
            }


            //if(file_exists($filegambar)){
              echo '<img src="'.$filegambar.' alt="foto"/>';
            
            ?>
            </br>
            Nama File = <?=$fas->foto?>
          </br>

            <?php
            echo form_open_multipart('faskes/upload');
            ?>

            <inpu type="hidden"  name="id" value="<?=$fas->id?>"/>
            <input type="file" name="fotofaskes" size="20"/></br>
            </br>
            <input type="submit" class="btn btn-success" value="upload"/>
            <?php echo form_close()?>
          </div>

          

          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
