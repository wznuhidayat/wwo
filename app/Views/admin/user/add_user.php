
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">User</a></li>
              <li class="breadcrumb-item active"><a href="#">Add User</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
     <div class="card card-orange card-outline">
            <div class="card-header">
                <h3 class="card-title">Add User</h3>
                <div class="float-right">
                  <a href="<?php echo base_url('Administator/user'); ?>" class="btn btn-warning btn-flat">
                     <i class="fa fa-undo"> back</i>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-md-offset-6 mx-auto">
                        <form action="/administator/saveUser" method="post">
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-4 col-form-label">Name</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control <?= ($validation->hasError('inputName')) ? 'is-invalid' : '' ?>" id="inputName" name="inputName" placeholder="Name" autofocus>
                                <div class="invalid-feedback">
                                  <?= $validation->getError('inputName'); ?>
                                </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail" class="col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8">
                                <input type="email" class="form-control <?= ($validation->hasError('inputEmail')) ? 'is-invalid' : '' ?>" id="inputEmail" name="inputEmail" placeholder="Email">
                                <div class="invalid-feedback">
                                  <?= $validation->getError('inputEmail'); ?>
                                </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
                                <div class="col-sm-8">
                                <input type="password" class="form-control <?= ($validation->hasError('inputPassword')) ? 'is-invalid' : '' ?>" id="inputPassword" name="inputPassword" placeholder="Password">
                                <div class="invalid-feedback">
                                  <?= $validation->getError('inputPassword'); ?>
                                </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword2" class="col-sm-4 col-form-label">Password Confir</label>
                                <div class="col-sm-8">
                                <input type="password" class="form-control <?= ($validation->hasError('inputPassword2')) ? 'is-invalid' : '' ?>" id="inputPassword2" name="inputPassword2" placeholder="Password Confir">
                                <div class="invalid-feedback">
                                  <?= $validation->getError('inputPassword2'); ?>
                                </div>
                                </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputGender" class="col-sm-4 col-form-label" >Gender</label>
                              <div class="col-sm-8">
                                <select class="form-control" name="inputGender" id="inputGender" required>
                                  <option value=""> - Select - </option>
                                  <option value="L">Male</option>
                                  <option value="P">Female</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPhone" class="col-sm-4 col-form-label">Phone</label>
                                <div class="col-sm-8">
                                <input type="numeric" class="form-control <?= ($validation->hasError('inputPhone')) ? 'is-invalid' : '' ?>" id="inputPhone" name="inputPhone" placeholder="Phone">
                                <div class="invalid-feedback">
                                  <?= $validation->getError('inputPhone'); ?>
                                </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputImg" class="col-sm-4 col-form-label">Img</label>
                                <div class="col-sm-8">
                                    <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputImg" name="inputImg">
                                    <label class="custom-file-label" for="inputImg" >Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-flat">Save</button>
                                    <button type="reset" class="btn  btn-flat">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>  
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
