<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile | User Profile</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assep/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assep/adminlte.min.css">

  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  

  <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index2.html">Beranda</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
             
              <div class="card-box text-center">
                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="rounded-circle avatar-xl img-thumbnail" alt="profile-image">
    
                <h4 class="mb-0">NAMA SISWA</h4>
                <p class="text-muted">REKAYSA PERANGKAT LUNAK</p>
    
                <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Follow</button>
                <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Message</button>
            </div> <!-- end card-box -->
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
        
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#biodata" data-toggle="tab">Profil</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Edit profil</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane" id="biodata">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">NISN</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          Kenneth Valdez
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">NAMA LENGKAP</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          fip@jukmuh.al
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">JURUSAN</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          (239) 816-9029
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">TAHUN LULUS</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          19-9-1999
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Alamat</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          Bay Area, San Francisco, CA
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Bidang</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          IT (Back End)
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Keterangan</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          Tersedia
                        </div>
                      </div>
                    </div>
                  </div>
                
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <div class="container light-style flex-grow-1 container-p-y">

                      <h4 class="font-weight-bold py-3 mb-4">
                        EDIT AKUN
                      </h4>
                  
                      <div class="card overflow-hidden">
                        <div class="row no-gutters row-bordered row-border-light">
                          <div class="col-md-3 pt-0">
                            <div class="list-group list-group-flush account-settings-links">
                            </div>
                          </div>
                          <div class="col-md-9">
                            <div class="tab-content">
                              <div class="tab-pane fade active show" id="account-general">
                  
                                <div class="card-body media align-items-center">
                                  <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" class="d-block ui-w-80">
                                  <div class="media-body ml-4">
                                    <label class="btn btn-outline-primary">
                                      Upload new photo
                                      <input type="file" class="account-settings-fileinput">
                                    </label> &nbsp;
                                    <button type="button" class="btn btn-default md-btn-flat">Reset</button>
                  
                                    <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                                  </div>
                                </div>
                                <hr class="border-light m-0">
                  
                                <div class="card-body">
                                  <div class="form-group">
                                    <label class="form-label">NISN</label>
                                    <input type="text" class="form-control mb-1" value="nmaxwell">
                                  </div>
                                  <div class="form-group">
                                    <label class="form-label">NAMA LENGKAP</label>
                                    <input type="text" class="form-control" value="Nelle Maxwell">
                                  </div>
                                  <div class="form-group">
                                    <label class="form-label">JURUSAN</label>
                                    <input type="text" class="form-control mb-1" value="nmaxwell@mail.com">
                                  </div>
                                  <div class="form-group">
                                    <label class="form-label">TAHUN LULUS</label>
                                    <input type="text" class="form-control" value="Company Ltd.">
                                  </div>
                                </div>
                  
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  
                      <div class="text-right mt-3">
                        <button type="button" class="btn btn-primary">Save changes</button>&nbsp;
                        <button type="button" class="btn btn-default">Cancel</button>
                      </div>
                  
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0-rc
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="assep/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assep/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App --> 
<script src="assep/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assep/js/demo.js "></script>

<style type="text/css">
  body{
      background: #f5f5f5;
      margin-top:20px;
  }
  
  .ui-w-80 {
      width: 80px !important;
      height: auto;
  }
  
  .btn-default {
      border-color: rgba(24,28,33,0.1);
      background: rgba(0,0,0,0);
      color: #4E5155;
  }
  
  label.btn {
      margin-bottom: 0;
  }
  
  .btn-outline-primary {
      border-color: #26B4FF;
      background: transparent;
      color: #26B4FF;
  }
  
  .btn {
      cursor: pointer;
  }
  
  .text-light {
      color: #babbbc !important;
  }
  
  .btn-facebook {
      border-color: rgba(0,0,0,0);
      background: #3B5998;
      color: #fff;
  }
  
  .btn-instagram {
      border-color: rgba(0,0,0,0);
      background: #000;
      color: #fff;
  }
  
  .card {
      background-clip: padding-box;
      box-shadow: 0 1px 4px rgba(24,28,33,0.012);
  }
  
  .row-bordered {
      overflow: hidden;
  }
  
  .account-settings-fileinput {
      position: absolute;
      visibility: hidden;
      width: 1px;
      height: 1px;
      opacity: 0;
  }
  .account-settings-links .list-group-item.active {
      font-weight: bold !important;
  }
  html:not(.dark-style) .account-settings-links .list-group-item.active {
      background: transparent !important;
  }
  .account-settings-multiselect ~ .select2-container {
      width: 100% !important;
  }
  .light-style .account-settings-links .list-group-item {
      padding: 0.85rem 1.5rem;
      border-color: rgba(24, 28, 33, 0.03) !important;
  }
  .light-style .account-settings-links .list-group-item.active {
      color: #4e5155 !important;
  }
  .material-style .account-settings-links .list-group-item {
      padding: 0.85rem 1.5rem;
      border-color: rgba(24, 28, 33, 0.03) !important;
  }
  .material-style .account-settings-links .list-group-item.active {
      color: #4e5155 !important;
  }
  .dark-style .account-settings-links .list-group-item {
      padding: 0.85rem 1.5rem;
      border-color: rgba(255, 255, 255, 0.03) !important;
  }
  .dark-style .account-settings-links .list-group-item.active {
      color: #fff !important;
  }
  .light-style .account-settings-links .list-group-item.active {
      color: #4E5155 !important;
  }
  .light-style .account-settings-links .list-group-item {
      padding: 0.85rem 1.5rem;
      border-color: rgba(24,28,33,0.03) !important;
  }
  
  
  
  </style>
  
  <script type="text/javascript">
  
  </script>
</body>
</html>
