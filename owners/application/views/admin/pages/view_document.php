      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            View Uploaded Document
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?= base_url('Dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">View Uploaded Document</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <a href="<?= base_url('AddDocument'); ?>" class="btn btn-lg btn-primary" style="margin-bottom: 5px;float: right;" >Upload New Document</a>
            </div>
          </div>
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
                <form role="form" action="<?php echo htmlspecialchars(current_url()) ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="hotel">Select Hotel</label>
                        <select name="hotel" id="hotel" class="form-control select2" data-placeholder="Select a State" style="width: 100%;" required="">
                          <option value="">---Select Hotel---</option>
                          <?php
                          if(isset($list) && !empty($list)){
                            foreach ($list as $value) {
                              ?>
                                <option <?php if(isset($h_name) && $h_name == $value->id_property){echo "selected";} ?> value="<?php echo $value->id_property; ?>"><?php echo $value->tbl_property_name; ?></option>
                              <?php
                            }
                          }
                          ?>
                        </select>
                    </div>
                    <div class="box-footer">
                      <button type="submit" name="view" id="view" class="btn btn-primary">View</button>
                    </div>
                </form>
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Sr.No.</th>
                        <th>Category Name</th>
                        <th>Document Name</th>
                        <th>Document</th>
                        <th>Upload Date</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $i=1;
                      if(isset($get_list) && !empty($get_list)){
                        foreach ($get_list as $value) {
                          ?>
                          <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $value->category; ?></td>
                            <td><?php echo $value->docs; ?></td>
                            <td><a href="<?php echo base_url('asset/document/').$value->docs; ?>" onclick="window.open('<?php echo base_url('asset/document/').$value->docs; ?>','targetWindow', 'toolbar=no, location=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1090px, height=550px, top=25px left=120px'); return false;"> Click to View Or Download </a></td>
                            <td><?php echo $value->created_at; ?></td>
                            <!--<td><img src="<?php echo base_url('asset/document/').$value->docs; ?>" width="50" height="50"></td>-->
<!--                             <td> <a href="<?php echo base_url('asset/document/').$value->docs; ?>" target="_blank"> <img  src="<?php echo base_url('asset/document/').$value->docs; ?>" width="50" height="50"> </a> -->
                                <td><a title="Delete this Document" onclick="return(confirm('Are you sure ? Want to delete this Document.'))" href="<?php echo base_url();?>Admin/ControllerUploadDocument/delete_document/<?php echo $value->id; ?>" class='btn btn-mini btn-danger'><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                              </td>
                          </tr>
                          <?php
                        }
                      }
                      ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Sr.No.</th>
                        <th>Category Name</th>
                        <th>Document Name</th>
                        <th>Document</th>
                        <th>Upload Date</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  </table>
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