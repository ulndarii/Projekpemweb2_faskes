<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2>Daftar Users</h2>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url ('index.php')?>">Home</a></li>
              <li class="breadcrumb-item active">Daftar Users</li>
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
          <h3 class="card-title">Kelola Data Users</h3>
        </div>
        <div class="card-body">
          <!-- <a class="btn btn-success" href="users/create" role="button"><i class="fas fa-plus-circle"></i> Create Data Users</a>
          <br>
          <br> -->
          <div class="container-fluid">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Username</th>
                      <th scope="col">Password</th>
                      <th scope="col">Email</th>
                      <th scope="col">Created login</th>
                      <th scope="col">Last login</th>
                      <th scope="col">Status</th>
                      <th scope="col">Role</th>
                      <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($list_users as $users){
                    ?>
                    <tr>
                      <td><?= $users -> id ?></td>
                      <td><?= $users-> username ?></td>
                      <td><?= $users -> password ?></td>
                      <td><?= $users -> email ?></td>
                      <td><?= $users -> created_at ?></td>
                      <td><?= $users -> last_login ?></td>
                      <td><?= $users -> status ?></td>
                      <td><?= $users -> role ?></td>
                      <td>
                        <a href="users/view?id=<?=$users->id?>" type="button" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                        <a href="users/edit?id=<?=$users->id?>" type="button" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                        <a href="users/delete?id=<?=$users->id?>"
                        onclick="if(!confirm('Anda Yakin Akan Menghapus Data Users dengan id : <?=$users->id?>?')){return false}"
                        type="button" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
          </div>   
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
    </br>
    </br>
</div>