<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Fasilitas Kesehatan</h1>
            
            <a class="btn btn-success" href="<?php echo base_url('index.php/faskes/create')?>" role="button"><i class="fa fa-plus-circle" aria-hidden="true"></i> Fasilitas Kesehatan</a>
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
          <h3 class="card-title">Fasilitas Kesehatan</h3>

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
        <h3>
        Daftar Faskes
        </h3>

        <div style="overflow-x:auto;">
        <table class="table table-striped" >
            <thead>
                <tr>
                    <th>No</th><th>Id</th><th>Nama Faskes</th><th>Alamat</th><th>Latlong</th><th>Jenis id</th>
                    <th>Deskripsi</th><th>Skor Rating</th><th>Foto 1</th><th>Foto 2</th><th>Foto 3</th>
                    <th>Kecamatan Id</th><th>Website</th><th>Jumlah Dokter</th><th>Jumlah Pegawai</th><th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach($list_fas as $row){
                ?>

                <tr>
                    <td><?=$nomor?></td>
                    <td><?=$row->id?></td>
                    <td><?=$row->nama?></td>
                    <td><?=$row->alamat?></td>
                    <td><?=$row->latlong?></td>
                    <td><?=$row->jenis_id?></td>
                    <td><?=$row->deskripsi?></td>
                    <td><?=$row->skor_rating?></td>
                    <td><?=$row->foto1?></td>
                    <td><?=$row->foto2?></td>
                    <td><?=$row->foto3?></td>
                    <td><?=$row->kecamatan_id?></td>
                    <td><?=$row->website?></td>
                    <td><?=$row->jumlah_dokter?></td>
                    <td><?=$row->jumlah_pegawai?></td>
                    <td>
                      <a class="btn btn-info" href="faskes/view?id=<?=$row->id?>"><i class="fas fa-eye"></i></a>
                      <a class="btn btn-primary" href="faskes/edit?id=<?=$row->id?>"><i class="fas fa-pencil-alt"></i></a>
                      <a class="btn btn-danger" href="faskes/delete?id=<?=$row->id?>"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>

                <?php
                $nomor++;
                }
                ?>
            </tbody>
        </table>
            
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
  <!-- /.content-wrapper -->
