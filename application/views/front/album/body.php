<?php $this->load->view('front/header'); ?>
<?php $this->load->view('front/navbar'); ?>

<div class="container">
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url() ?>">Home</a></li>
		<li><a href="<?php echo base_url('gallery/album') ?>">Venues</a></li>
		<li class="active"><?php echo $title ?></li>
	</ol>

	<div class="row">
		<div class="col-md-12"><h1><?php echo strtoupper($title) ?></h1><hr>
			<?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
			<div class="row">
				<?php foreach($album_all as $lapangan){ ?>
					<div class="col-lg-6">
						<div class="thumbnail">
							<?php
							if(empty($lapangan->foto)) {echo "<img class='card-img-top' src='".base_url()."assets/images/no_image_thumb.png'>";}
							else { echo "<img src='".base_url()."assets/images/lapangan/".$lapangan->foto."'> ";}
							?>
							<div class="caption">
								<p class="card-text"><b><?php echo $lapangan->nama_lapangan ?></b></p>
								<hr>
								<a href="<?php echo base_url('cart/buy/').$lapangan->id_lapangan ?>">
									<button class="btn btn-sm btn-primary"><i class="fa fa-shopping-cart"></i> Booking Sekarang!</button>
								</a>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
			<p>
			<div align="center"><?php echo $this->pagination->create_links() ?></div>
		</p>
	</div>
	<?php /* $this->load->view('front/sidebar'); */ ?>
</div>
</div>
<?php $this->load->view('front/footer'); ?>