<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
            Dashboard
            <small>Admin</small>
          </h1>
	



		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Dashboard</li>
		</ol>
	</section>
	<section class="content">
		<div class="box-header">
<!--                   <h3 class="box-title">Data Table With Full Features</h3> -->
                    
                    <div class="col-md-12">
                      <?= $this->session->flashdata('success_msg');
                      $this->session->unset_userdata('success_msg'); ?>
                  </div>
                </div>
		<div class="row">
			<div class="col-xs-4">
				<div class="small-box bg-info">
					<div class="inner">
						
						<p>Total Hotels:</p>
						<h3> <?= $hotels[0]['total'] ?></h3>
						
						<p>In Systems: <strong><?= $hotels[0]['in_system'] ?></strong> <strong>|</strong> Lead: <strong><?= $hotels[0]['in_lead'] ?></strong></p> 
					</div>
					<div class="icon">
						<i class="glyphicon glyphicon-th"></i>
					</div>
					<a href="<?= base_url('View-Hotels'); ?>" class="small-box-footer">
					More info <i class="glyphicon glyphicon-plus"></i>
				  	</a>
				
				</div>
			</div>

			<div class="col-xs-4">
				<div class="small-box bg-info">
					<div class="inner">
						<p>Total Users:</p>
						<h3><?= $users[0]['total'] ?></h3>
						<p>Active : <strong><?= $users[0]['active_users'] ?></strong> &nbsp;<strong>|</strong>&nbsp; Inactive : <strong><?= $users[0]['inactive_users'] ?></strong></p>
					</div>
					<div class="icon">
						<i class="glyphicon glyphicon-user"></i>
					</div>
					<a href="<?= base_url('ViewUser'); ?>" class="small-box-footer">
					More info <i class="glyphicon glyphicon-plus"></i>
				  	</a>
				
				</div>
			</div>

			<div class="col-xs-4">
				<div class="small-box bg-info">
					<div class="inner">
						<p>Assigned Hotels:</p>
						<h3><?= $assigned[0]['Assigned'] ?></h3>
						<?php
							$unassigned = $hotels[0]['total'] - $assigned[0]['Assigned'];
						?>
						
						<p> Unassigned Hotels: <?= $unassigned ?></p>
					</div>
					<div class="icon">
						<i class="glyphicon glyphicon-user"></i>
					</div>
					<a href="<?= base_url('View-HotelAssign'); ?>" class="small-box-footer">
					More info <i class="glyphicon glyphicon-plus"></i>
				  	</a>
				
				</div>
			</div>
		</div>
	</section>

</div>