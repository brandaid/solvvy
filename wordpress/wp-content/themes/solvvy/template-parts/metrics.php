<!-- SPHERES METRICS-->

<?php $metrics = get_field('section_metrics'); ?>
<?php if($metrics){ ?>
<section class="box-text-top align-center container-normal bkg-none">
	<div class="container">
		<h2><?php echo $metrics['metrics_title']; ?></h2>
		<p><?php echo $metrics['metrics_copy'] ?></p>
		<?php if($metrics['metrics_bubles']){ ?>
		<div id="bubbles-scene" class="bubble-container">
			
		</div>
		<?php } ?>
	</div>
</section>

<?php } ?>
<script type="text/javascript">
	var bubblesArray = <?php echo json_encode( $metrics['metrics_bubles'] ) ?>;
</script>
