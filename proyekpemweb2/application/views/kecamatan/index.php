<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Kecamatan Kota Depok</h1>
            <a class="btn btn-success" href="<?php echo base_url('index.php/kecamatan/create')?>" role="button"><i class="fa fa-plus-circle" aria-hidden="true"></i>Daftar Kecamatan</a>
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
          <h3 class="card-title">Kecamatan</h3>

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
        Daftar Kecamatan
        </h3>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th><th>Id</th><th>Nama Kecamatan</th><th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach($list_kec as $row){
                ?>

                <tr>
                    <td><?=$nomor?></td>
                    <td><?=$row->id?></td>
                    <td><?=$row->nama?></td>
                    <td>
                      <a class="btn btn-info" href="kecamatan/view?id=<?=$row->id?>">View</a>
                      <a class="btn btn-danger" href="kecamatan/delete?id=<?=$row->id?>">Delete</a>
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
