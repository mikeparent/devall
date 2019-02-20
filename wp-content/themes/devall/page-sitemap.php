<?php

	/* Template Name: Sitemap */

	$pages = array(
		'home' => array(
			'link' => home_url(),
			'text' => 'Home Page',
			'status' => 'for-review'
		),
		'our-heritage' => array(
			'link' => home_url() . '/our-heritage',
			'text' => 'Our Heritage',
			'status' => 'for-review'
		),
		'testimonials' => array(
			'link' => home_url() . '/testimonials',
			'text' => 'Testimonials',
			'status' => 'for-review'
		),
		'maintenance-repairs' => array(
			'link' => home_url() . '/maintenance-repairs',
			'text' => 'Maintenance &amp; Repairs',
			'status' => ''
		)
	);

?>

<?php get_header(); ?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="container">
	<div class="row">
		<div class="col-12 col-tablet-4">
			<h1>All Pages</h1>
			<ul>
				<?php foreach ($pages as $page) { ?>
					<li>
						<a href="<?php echo $page['link']; ?>/"><?php echo $page['text']; ?></a>
					</li>
				<?php } ?>
			</ul>
		</div>
		<div class="col-12 col-tablet-4">
			<h1>For Review</h1>
			<ul>
				<?php foreach ($pages as $page) { ?>
					<?php if($page['status'] == 'for-review'){ ?>
						<li>
							<a href="<?php echo $page['link']; ?>/"><?php echo $page['text']; ?></a>
						</li>
					<?php } ?>
				<?php } ?>
			</ul>
		</div>
		<div class="col-12 col-tablet-4">
			<h1>Signed Off</h1>
			<ul>
				<?php foreach ($pages as $page) { ?>
					<?php if($page['status'] == 'signedoff'){ ?>
						<li>
							<a href="<?php echo $page['link']; ?>/"><?php echo $page['text']; ?></a>
						</li>
					<?php } ?>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>

<br>
<br>
<br>
<br>

<?php get_footer(); ?>