<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin') ?>">
		<div class="sidebar-brand-icon">
	<img style="max-width:250px;" src="<?= base_url('img/identitas/logoaa.png') ?>">
		</div>
		<div class="sidebar-brand-text mx-2">Mother Hand</div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item active">
		<a class="nav-link" href="http://localhost/motherhand-school/admin">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span></a>
	</li>


	
	<li class="nav-item">
					<a class="nav-link collapsed" href="http://localhost/motherhand-school/" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse">
				<i class="fas fa-fw fa-school"></i>
				<span>Website Management</span>
			</a>

			<div id="collapse3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
				<div class="bg-white py-2 collapse-inner rounded">
				                    <a class="collapse-item" href="http://localhost/motherhand-school/sambutan">Quotes</a>
									<a class="collapse-item" href="http://localhost/motherhand-school/banner">Background</a>
									<a class="collapse-item" href="http://localhost/motherhand-school/fasilitas">Gallery</a>
									<a class="collapse-item" href="http://localhost/motherhand-school/berita">News & Events</a>
									<a class="collapse-item" href="http://localhost/motherhand-school/background">Banner</a>
								</div>
			</div>
				
	</li>


	
	<li class="nav-item">
					<a class="nav-link" href="http://localhost/motherhand-school/user">
				<i class="fas fa-fw fa-user"></i>
				<span>User Management</span>
			</a>
				
	</li>

	
	<li class="nav-item">
					<a class="nav-link" href="http://localhost/motherhand-school/">
				<i class="fas fa-fw fa-home"></i>
				<span>Website</span>
			</a>
				
	</li>



	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>
