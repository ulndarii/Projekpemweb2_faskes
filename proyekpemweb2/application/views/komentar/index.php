<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Komentar Pengguna</h1>
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
          <h3 class="card-title">Komentar</h3>

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
        Komentar Pengguna
        </h3>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th><th>Id</th><th>Tanggal</th><th>Isi</th><th>User id</th><th>Faskes id</th><th>Nilai Rating id</th><th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach($list_kom as $row){
                ?>

                <tr>
                    <td><?=$nomor?></td>
                    <td><?=$row->id?></td>
                    <td><?=$row->tanggal?></td>
                    <td><?=$row->isi?></td>
                    <td><?=$row->users_id?></td>
                    <td><?=$row->faskes_id?></td>
                    <td><?=$row->nilai_rating_id?></td>
                    <td>
                      <a class="btn btn-info" href="komentar/view?id=<?=$row->id?>"><i class="fas fa-eye"></i></a>
                      <a class="btn btn-primary" href="komentar/edit?id=<?=$row->id?>"><i class="fas fa-pencil-alt"></i></a>
                      <a class="btn btn-danger" href="komentar/delete?id=<?=$row->id?>"><i class="fas fa-trash"></i></a>
                      
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
