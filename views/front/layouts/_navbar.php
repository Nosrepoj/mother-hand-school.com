<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="logo">
		<a class="navbar-brand" href="<?= base_url() ?>">
			<img style="max-width:140px;" src="<?= base_url('img/identitas/4.png') ?>">
		</a>
		</div>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item <?php if($title == 'Home') echo "active"; ?>">
				<a class="nav-link" href="<?= base_url() ?>">Home</a>
				</li>
				<li class="nav-item dropdown <?php if($title == 'Sejarah' || $title == 'Visi & Misi' || $title == 'Struktur' || $title == 'Fasilitas') echo "active"; ?>">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					About Us
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="<?= base_url('profil/sejarah') ?>">History</a>
					<a class="dropdown-item" href="<?= base_url('profil/visimisi') ?>">Mission & Vision</a>
					
				</div>
				</li>
				<li class="nav-item <?php if($title == 'Fasilitas') echo "active"; ?>">
				<a class="nav-link" href="<?= base_url('profil/fasilitas') ?>">Gallery</a>
				
				<li class="nav-item <?php if($title == 'Berita') echo "active"; ?>">
				<a class="nav-link" href="<?= base_url('blog') ?>">News & Event</a>
				</li>
				<li class="nav-item <?php if($title == 'Tata Tertib') echo "active"; ?>">
				<a class="nav-link" href="<?= base_url('tatatertib') ?>">Contact Us</a>
				</li>
				<form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
				
			</ul>
		</div>
	</div>
</nav>
