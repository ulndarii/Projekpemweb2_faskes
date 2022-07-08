<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Nilai Rating dari Pengguna</h1>
            <a class="btn btn-success" href="<?php echo base_url('index.php/nilai/create')?>" role="button"><i class="fa fa-plus-circle" aria-hidden="true"></i>Daftar Nilai Rating</a>
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
          <h3 class="card-title">Nilai Rating</h3>

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
        nilai rating
        </h3>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th><th>Id</th><th>Nilai Rating</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach($list_nil as $row){
                ?>

                <tr>
                    <td><?=$nomor?></td>
                    <td><?=$row->id?></td>
                    <td><?=$row->nama?></td>
                    <td>
                      <a class="btn btn-info" href="nilai/view?id=<?=$row->id?>">View</a>
                      <a class="btn btn-primary" href="nilai/edit?id=<?=$row->id?>">Edit</a>
                      <a class="btn btn-danger" href="nilai/delete?id=<?=$row->id?>">Delete</a>
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
