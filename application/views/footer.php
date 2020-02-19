</div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <!-- new computer -->
  <div class="modal fade" id="new_computer" role="dialog">
    <div class="modal-dialog" role="document">
      <?php echo form_open(base_url('admin/add_computers/')) ?>
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Computer</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="">Tag</label>
            <input type="text" name="tag" class="form-control" placeholder="Ex. CA0001-LPT"/>
          </div>
          <div class="form-group">
            <label for="">Brand</label>
            <input type="text" name="brand" class="form-control" placeholder="Ex. Lenovo" required>
          </div>
          <div class="form-group">
            <label for="">Model</label>
            <input type="text" name="model" class="form-control" placeholder="Ex. T740p" required>
          </div>
          <div class="form-group">
            <label for="">Type</label>
            <select name="type" id="" class="form-control selectpicker" title="ex. Laptop" required>
              <option value="Laptop">Laptop</option>
              <option value="Desktop">Desktop</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">Memory</label>
            <input type="text" name="memory" class="form-control" placeholder="Ex. 16GB">
          </div>
          <div class="form-group">
            <label for="">Processor</label>
            <input type="text" name="processor" class="form-control" placeholder="Ex. Intel(R) Core(TM) i5-8250U CPU @ 1.60GHz (8 CPUs)">
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" type="submit">Save</button>
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        </div>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
  <!-- new employee -->
  <div class="modal fade" id="new_employee" role="dialog">
    <div class="modal-dialog" role="document">
      <?php echo form_open(base_url('admin/add_employee/')) ?>
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Employee</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="">Last Name</label>
            <input type="text" class="form-control" name="lname" placeholder="Ex. Dela Cruz" required/>
          </div>
          <div class="form-group">
            <label for="">First Name</label>
            <input type="text" class="form-control" name="fname" placeholder="Ex. Juan" required>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" type="submit">Save</button>
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
  <!-- new mouse -->
  <div class="modal fade" id="new_mouse" role="dialog">
    <div class="modal-dialog" role="document">
      
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Mouse</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="">Tag</label>
            <input type="text" name="tag" class="form-control" placeholder="Ex. CA0001-MSE" required/>
          </div>
          <div class="form-group">
            <label for="">Brand</label>
            <input type="text" name="brand" class="form-control" placeholder="Ex. A1Tech" required/>
          </div>
          <div class="form-group">
            <label for="">Type</label>
            <select name="type" class="form-control selectpicker" title="Ex. Wireless">
              <option value="wireless">Wireless</option>
              <option value="wired">Wired</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" type="submit">Save</button>
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        </div>
      </div>
      
    </div>
  </div>

