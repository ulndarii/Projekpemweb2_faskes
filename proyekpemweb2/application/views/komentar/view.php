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

        <div class="row mb-2">
            <table class="table table-striped">
              <tbody>
                <tr><td>Id</td><td><?=$kom->id?></td></tr>
                <tr><td>Tanggal</td><td><?=$kom->tanggal?></td></tr>
                <tr><td>Isi Komentar</td><td><?=$kom->isi?></td></tr>
                <tr><td>Id User</td><td><?=$kom->users_id?></td></tr>
                <tr><td>Id Faskes</td><td><?=$kom->faskes_id?></td></tr>
                <tr><td>Nilai Rating</td><td><?=$kom->nilai_rating_id?></td></tr>
              </tbody>
            </table>
         
          
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
