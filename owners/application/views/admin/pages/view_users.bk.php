      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Tables
            <small>advanced tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
             <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>
                    
                    <div class="col-md-12">
                      <?= $this->session->flashdata('success_msg');
                      $this->session->unset_userdata('success_msg'); ?>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Sr.No.</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>User Image</th>
                        <th>Reg. Date</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                  <?php 

                  //echo "<pre>";print_r($get_users[0]->user_name);die;
                  $i =1;
                  foreach ($get_users as $item):?>
                      <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $item->user_name; ?></td>
                        <td><?= $item->user_email; ?></td>
                        <td><img src="<?= base_url('upload/users/').$item->user_image;?>" width="100px;"></td>
                        <td><?= $item->reg_date; ?></td>
                        <td><?= ($item->is_active==1)?'<b>Active</b>':'<b>Block</b>'; ?></td>
                        <td>
                          <?= ($item->is_active == 1) ? '<a href="'.base_url("UpdateUser/").$item->id.'/'.$item->is_active.'" class="btn btn-danger">Block</a>' : '<a href="'.base_url("UpdateUser/").$item->id.'/'.$item->is_active.'" class="btn btn-primary">Active</a>';
                           ?>
                          </td>
                      </tr>
                  <?php endforeach;?>
                      
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Sr.No.</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>User Image</th>
                        <th>Reg. Date</th>
                        <th>Status</th>
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