<?php
/**
Template Name: Home
*/
$site_title                             = get_field('site_title');
$site_description                   = get_field('site_description');
$dog_image_1                      = get_field('dog_image_1');
$dog_name_1                       = get_field('dog_name_1');
$dog_breed_1                       = get_field('dog_breed_1');
$dog_description_1                = get_field('dog_description_1');
$dog_image_2                      = get_field('dog_image_2');
$dog_name_2                       = get_field('dog_name_2');
$dog_breed_2                       = get_field('dog_breed_2');
$dog_description_2                = get_field('dog_description_2');
$dog_image_3                      = get_field('dog_image_3');
$dog_name_3                       = get_field('dog_name_3');
$dog_breed_3                       = get_field('dog_breed_3');
$dog_description_3                = get_field('dog_description_3');
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <section id="featured-hero">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10 offset-md-1 text-center">
                            <h1 class="text-center"><?php echo $site_title; ?></h1>
                            <p class="lead"><?php echo $site_description; ?></p>
                        </div>
                    </div>
                </div>
            </section>
            <section id="featured-dogs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card shadow-lg">
                                <img src="<?php echo $dog_image_1['url']; ?>" alt="<?php echo $dog_image_1['alt']; ?>" class="card-img-top">
                                <div class="card-content p-3">
                                    <h3 class="card-title text-center"><?php echo $dog_name_1; ?></h3>
                                    <p class="text-center"><i><?php echo $dog_breed_1; ?></i></p>
                                    <p class="card-text"><?php echo $dog_description_1; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card shadow-lg">
                                <img src="<?php echo $dog_image_2['url']; ?>" alt="<?php echo $dog_image_2['alt']; ?>" class="card-img-top">
                                <div class="card-content p-3">
                                    <h3 class="card-title text-center"><?php echo $dog_name_2; ?></h3>
                                    <p class="text-center"><i><?php echo $dog_breed_2; ?></i></p>
                                    <p class="card-text"><?php echo $dog_description_2; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card shadow-lg">
                                <img src="<?php echo $dog_image_3['url']; ?>" alt="<?php echo $dog_image_3['alt']; ?>" class="card-img-top">
                                <div class="card-content p-3">
                                    <h3 class="card-title text-center"><?php echo $dog_name_3; ?></h3>
                                    <p class="text-center"><i><?php echo $dog_breed_3; ?></i></p>
                                    <p class="card-text"><?php echo $dog_description_3; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
?>