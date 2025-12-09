<?php $this->load->view('front/header'); ?>
<?php $this->load->view('front/navbar'); ?>

<div class="container">
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url() ?>">Home</a></li>
		<li><a href="#">Events</a></li>
		<li class="active">All Events</li>
	</ol>

	<div class="row">
		<div class="col-md-12"><h1>ALL EVENTS</h1><hr>
			<?php foreach($event_all as $event){ ?>
				<h2><a href="<?php echo base_url('event/').$event->slug_event ?>"><?php echo $event->nama_event ?></a></h2>
				<a href="<?php echo base_url("event/$event->slug_event ") ?>">
					<?php
					if(empty($event->foto)) {echo "<img style='width: 100%; height: 400px; object-fit: cover;' src='".base_url()."assets/images/no_image_thumb.png'>";}
					else { echo " <img style='width: 100%; height: 400px; object-fit: cover;' src='".base_url()."assets/images/event/".$event->foto.'_thumb'.$event->foto_type."'> ";}
					?>
				</a>
				<p>
					<i class="fa fa-user"></i> <?php echo $event->created_by ?>
					<i class="fa fa-calendar"></i> <?php echo date("j F Y", strtotime($event->created_at)); ?>
				</p>
				<p><?php echo character_limiter($event->deskripsi,350) ?></p>
				<a class="btn btn-sm btn-primary" href="<?php echo base_url("event/$event->slug_event ") ?>">Read More <i class="fa fa-angle-right"></i></a>
		<?php } ?>
		<div align="center"><?php echo $this->pagination->create_links() ?></div>
	</div>
	<?php /* $this->load->view('front/sidebar'); */ ?>
</div>
</div>
<?php $this->load->view('front/footer'); ?>