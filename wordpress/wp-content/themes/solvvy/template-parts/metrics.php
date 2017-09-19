<!-- SPHERES METRICS-->

<?php $metrics = get_field('section_metrics'); ?>
<?php if($metrics){ ?>
<section class="box-text-top align-center container-normal bkg-none">
	<div class="container">
		<h2><?php echo $metrics['metrics_title']; ?></h2>
		<p><?php echo $metrics['metrics_copy'] ?></p>
		<!--<div id="cy"></div> -->

	</div>
	<?php if($metrics['metrics_bubles']){ ?>
	<div id="bubbles-scene" class="bubble-container">
		
	</div>
	<?php } ?>
</section>

<?php } ?>
<style type="text/css">
	.bubble-container{
		position: relative;
		height: 100vh;
		width: 100%;
	}
	/* circles library */
	.bubbles{
	    position: absolute;
	}


	.bubbles > div {
	    overflow:hidden;
	    float:left;
	    width:auto;
	    height:auto;
	    position: relative;
	    border-radius:50%;
	    -moz-border-radius:50%;
	    -webkit-border-radius: 50%;
	    -khtml-border-radius: 50%;
	    padding: 50%;
	}

	.bubbles > div > div {
	    position: absolute;
	    top: 0;
	    right: 0;
	    bottom: 0;
	    left: 0;
	}
	.bubbles > div > div > div {
	    display: table;
	    width: 100%;
	    height: 100%;
	}
	.bubbles > div > div > div > div {
	    display: table-cell;
	    text-align: center;
	    vertical-align: middle;
	}
	.bubbles span{
	    display: block;
	    color: #FFF;
	}
	.bubbles span.percent{
	    font-size: 80px;
	}
	.bubbles span.description{
	    font-size: 40px;
	}
</style>
<script type="text/javascript">
	var bubblesArray = <?php echo json_encode( $metrics['metrics_bubles'] ) ?>;
</script>
