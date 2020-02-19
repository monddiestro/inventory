
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
      <div>
        <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#new_employee"><i class="fas fa-fw fa-user fa-sm text-white-50"></i> Add Employee</button>
        <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#new_computer"><i class="fas fa-fw fa-laptop fa-sm text-white-50"></i> Add Computer</button>
        <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#new_mouse"><i class="fas fa-fw fa-mouse-pointer fa-sm text-white-50"></i> Add Mouse</button>
        <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#new_keyboard"><i class="fas fa-fw fa-tv fa-sm text-white-50"></i> Add Monitors</button>
      </div>
    </div>

    <!-- Content Row -->
    <?php if(!empty($this->session->flashdata('message'))): ?>
    <?php 
      $message = $this->session->flashdata('message');
      $class = $this->session->flashdata('class');
    ?>

    <div class="alert alert-<?php echo $class ?> alert-dismissible fade show" role="alert">
     <?php echo $message ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?php endif ?>

    <!-- Content Row -->
    <div class="row">

      <!-- laptop -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Available Laptop</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $computers ?></div>
              </div>
              <div class="col-auto">
                <i class="fas fa-laptop fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- mouse -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Available Mouse</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">2</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-mouse-pointer fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- keyboard -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Available Keyboard</div>
                <div class="row no-gutters align-items-center">
                  <div class="col-auto">
                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">1</div>
                  </div>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-keyboard fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- monitors -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Available Monitors</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">3</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-tv fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->



