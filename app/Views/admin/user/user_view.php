 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Data User</h3>
                    <div class="float-right">
                        <a href="<?php echo base_url('administator/addUser'); ?>" class="btn btn-flat btn-success">
                        <i class="fa fa-plus"> Add User</i>
                        </a>
                    </div>
                </div>
                <div class="card-body table-responsive">
                <table class="table table-bordered table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Img</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Gender</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    foreach($user as $usr ): ?>
                        <tr>
                            <td>
                                <img src="<?php //echo base_url('upload/user/').$usr['img'] ?>" alt="" width="64" >
                            </td>
                            <td><?php echo $usr['name'] ?></td>
                            <td><?php echo $usr['email'] ?></td>
                            <td><?php echo $usr['phone'] ?></td>
                            <td><?php echo $usr['gender'] ?></td>
                            <td class="text-center">
                                <a href="/administator/updateUser/<?= $usr['id_user']; ?>" ><div class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></div>
                                    </a>
                                <form action="/administator/user/<?= $usr['id_user']; ?>" class="d-inline" method="post">
                                  <?= csrf_field(); ?>
                                  <input type="hidden" name="_method" value="DELETE">
                                  <button type="submit" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                 </table>
            </div> 
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->