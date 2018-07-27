<?php
/**
 * Template Name: Template Contact Us
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
get_header();
$rows = get_field('first_section');
$first_row = $rows[0];
$rows2 = get_field('second_row');
$second_row = $rows2[0];
$bannerBg = get_field('banner_image');  
 
?>

<section>
    <div class="inner-banner dis-flex relative mr-bt70" <?php if($bannerBg) : ?>style="background-image:url(<?php echo  $bannerBg;?>)" <?php endif; ?>>
        <h1><?php the_title(); ?></h1>
    </div>
    <div class="actual-content-section bg-white pd-bt40">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">

                    <figure class="pd-tp40 pd-rt40 mr-bt30 relative"><img class="flwdth" src="<?php echo $first_row['first_image']['url']; ?>" alt=""><img class="abso-img" src="<?php echo $first_row['second_image']['url']; ?>" alt=""></figure>
                </div>
                <div class="col-sm-4">
                    <div class="actual-content mr-bt30">
                        <h2 class="inner-heading-text-h sky-blue-color pd-bt15 mr-bt15"><span class="dis-block"><?php echo $first_row['sub_title']; ?></span> <?php echo $first_row['title']; ?></h2>
                        <p><?php echo $first_row['content']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="professional-data-section bg-light">
        <div class="container">
            <div class="row dis-flex">
                <div class="col-sm-6">
                    <div class="actual-content pd-tp30 pd-bt30">
                        <h2 class="inner-heading-text-h sky-blue-color pd-bt15 mr-bt15"><span class="dis-block">House Features</span> <?php echo $second_row['title']; ?></h2>
                        <p class="mr-bt35"><?php echo $second_row['content']; ?></p>
                        <ul class="ul-st">
                            <?php echo $second_row['content_list']; ?>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <figure><img class="flwdth" src="<?php echo $second_row['image']['url']; ?>" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
    <div class="graphic-design-section text-center pd-bt60">
        <div class="container">
            <div class="page-header border0 pd-bt0">
                <p><?php echo get_field("bottom_content"); ?></p>
            </div>
            <div class="row custom-row">
                <?php
                if (have_rows('gallery')):
                    while (have_rows('gallery')): the_row();
                        $image = get_sub_field('image');
                        ?>
                        <div class="col-xs-4">
                            <figure><img src="<?php echo $image['url']; ?>" alt=""></figure>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>
