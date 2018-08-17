<?php get_header(); ?>
<div class="page_contant"> 
	<?php
		//pages content
		$post_about = get_post(10);
		$post_Contact = get_post(12);

		// ACF Field
		$image = get_field('images', 10);
		$image_contact = get_field('images', 12); 
	?>
	<div id="section1" class="first_about_part">

		<div class="left_images_part">
			<div class="img_width_part"><img src="<?php echo $image; ?>" /></div> 
		</div>

		<div class="right_contant_part_about">
			<div class="contant_width_part">
				<h2 style="color: #687780;"><?php echo $post_about->post_title; ?></h2>
				<p><?php echo $post_about->post_content; ?></p>
			</div>
		</div>

	</div>

	<div id="section2" class="secound_contact_part">

		<div class="right_contant_part_about">
			<div class="contant_width_part">
				<h2><?php echo $post_Contact->post_title; ?></h2>
				<?php echo $post_Contact->post_content; ?>
			</div>
		</div>

		<div class="left_images_part">
			<div class="img_width_part"><img src="<?php echo $image_contact; ?>" /></div>
		</div>

	</div>

    <?php
        // $page_data = get_page_by_path('about');
        // echo $page_data->post_content;

        // $page_data = get_page_by_path('contact');
        // echo $page_data->post_content; 
    ?>

</div> 

<?php get_footer(); ?>