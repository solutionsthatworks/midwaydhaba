      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Uploaded New Document
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?= base_url('Dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Upload New Document</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
             <div class="box">
                <div class="box-header">
<!--                   <h3 class="box-title">Data Table With Full Features</h3> -->
                    
                    <div class="col-md-12">
                      <?= $this->session->flashdata('success_msg');
                      $this->session->unset_userdata('success_msg'); ?>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form role="form" action="<?php echo base_url('Admin/ControllerUploadDocument/insertDocument'); ?>" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="category">Select Category</label>
                          <select name="category" id="category" class="form-control select2" data-placeholder="Select a State" style="width: 100%;" required>
                            <option value="">---Select Category---</option>
                            <option value="Property document">Property documents</option>
                            <option value="MHO Document">MHO Documents</option>
                            <option value="Normal documents">Normal documents</option>
                          </select>
                      </div>
                      <div class="form-group">
                        <label for="hotel">Select Hotel</label>
                          <select name="hotel" id="hotel" class="form-control select2" data-placeholder="Select a State" style="width: 100%;" required>
                            <option value="">---Select Hotel---</option>
                            <option value="11">All</option>
                            <?php
                            if(isset($list) && !empty($list)){
                              foreach ($list as $value) {
                                ?>
                                  <option value="<?php echo $value->id_property; ?>"><?php echo $value->tbl_property_name; ?></option>
                                <?php
                              }
                            }
                            ?>
                          </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">File Upload</label>
                        <input type="file" name="files[]" multiple id="files" required="">
                      </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                      <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

     
    <script src="<?= base_url('asset/admin/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('asset/admin/'); ?>plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>