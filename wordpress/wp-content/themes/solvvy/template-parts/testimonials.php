<!-- SECTION TESTIMONIALS -->

<?php $testimonials = get_field('section_customer_testimonials'); ?>
<?php $i = 0; if($testimonials){ ?>
<section class="box-customers">
	<div class="container">
		<ul class="list-boxes-three align-left">
			<?php forEach($testimonials as $single_testimonial): ?>
			<li class="<?php echo testimonial_counter($i); ?>">
				<div class="customers-box">
					<p><?php echo $single_testimonial['customer_testimonial_'] ?></p>
					<?php
						$attachment_id = $single_testimonial['customer_brand'];
						$size = "case_study_logo";
						$image = wp_get_attachment_image_src( $attachment_id, $size );
					?>
					<img src= "<?php echo $image[0]; ?>" alt="" class="responsive">
					<h4><?php echo $single_testimonial['customer_name'] ?></h4>
					<small><?php echo $single_testimonial['customer_position'] ?></small>
				</div>
			</li>
			<?php $i++; endforeach; ?>
		</ul>
	</div>
</section>
<?php } ?>

<?php
	function testimonial_counter($i) {
		$size = sizeof(get_field('section_customer_testimonials'));

		if( ($size-$i == 2) && ($size%3 == 2) ) {
			return 'test-cols-2';
		}
		else if( ($size-$i == 1) && ($size%3 == 2) ) {
			return 'test-cols-2';
		}
		else if( ($size-$i == 1) && ($size%3 == 1) ) {
			return 'test-cols-1';
		}
		else {
			return null;
		}
	}
?>