		<!-- SECTION CASE OF STUDY -->
		<?php $caseofstudy = get_field('section_case_of_study'); ?>
		<?php if($caseofstudy){ ?>
		<section class="box-text-top container-normal pink-ball">
			<div class="container">
				<ul class="list-boxes-two align-left">
					<?php forEach($caseofstudy as $single_case){ ?>
					<li>
						<article class="box box-case">
							<figure>
								
								<div class="brand-absolute">
									<div class="center-element">
										<div class="the-element">
											<?php
												$attachment_id = $single_case['case_of_study_brand_logo'];
												$size = "case_study_logo";
												$image = wp_get_attachment_image_src( $attachment_id, $size );
											?>
											<img src= "<?php echo $image[0]; ?>" alt="" class="responsive">
										</div>
									</div>
								</div>

								<!-- USE FILL ATRIBUTTE FOR CHANGE THE COLOR. SEE JEREMY COMMENTS HERE: https://brandaid.basecamphq.com/projects/13941570-solvvy-website-internal/posts/103319255/comments -->

								<svg id="Layer_1" class="wave-study" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 415.33 138.75"><title>wave-top</title><path d="M580.79,161.82V34.69C448.9,14.75,312.42,15.39,166,77.74l-.55,84.08Z" transform="translate(-165.46 -23.07)" style="fill:<?php echo $single_case['case_of_study_background_1'] ?>"/></svg>

								<!-- USE FILL ATRIBUTTE FOR CHANGE THE COLOR. SEE JEREMY COMMENTS HERE: https://brandaid.basecamphq.com/projects/13941570-solvvy-website-internal/posts/103319255/comments -->

								<svg id="Layer_1" class="wave-study backend" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 456.91 238.96"><title>wave</title><path d="M1800,6.74c-137.86-19.91-297.31,20.47-456.91,52.37v181.3H1800Z" transform="translate(-1343.09 -1.45)" style="fill:<?php echo $single_case['case_of_study_background_2'] ?>;opacity:0.3499999940395355;isolation:isolate"/></svg>
								<?php
									$attachment_id = $single_case['case_of_study_image'];
									$size = "case_study";
									$image = wp_get_attachment_image_src( $attachment_id, $size );
								?>
								<img src= "<?php echo $image[0]; ?>" alt="" class="responsive">
							</figure>
							<div class="content">
								<h3><a href="<?php echo $single_case['case_of_study_button_destination'] ?>"><?php echo $single_case['case_of_study_title'] ?></a></h3>
								<p><?php echo $single_case['case_of_study_description'] ?></p>
								<a href="<?php echo $single_case['case_of_study_button_destination'] ?>" class="button-tn"><?php echo $single_case['case_of_study_cta_button_text'] ?></a>
							</div>
						</article>
					</li>
					<?php } ?>
				</ul>

			</div>
		</section>
		<?php } ?>