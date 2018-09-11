<?php 
/**
 * The template for displaying all property posts
 */

get_header(); ?>

<?php get_template_part( 'parts/content', 'header' ); ?>

			
<div class="content">

    <main id="inner-content" role="main">
    	
    	
    <div class="row columns small-padding">
        <a href="<?php echo get_page_link(24); ?>" class="button">&#8592; Back to Listings</a>
    </div>
    
    
    <?php $sellType = get_post_meta($post->ID, 'property_sell_type', true); ?>
    
    <div class="row columns">
        <h2><?php if ($sellType == Sale) {echo 'For Sale by Owner';} elseif ($sellType == Rent){echo 'For Rent by Owner';} ?></h2>
        <h4><?php echo get_post_meta($post->ID, 'property_address', true ); ?></h4>
    </div>
    <div class="row">
        <div class="columns">
            <?php get_template_part('parts/content', 'gallery') ?>
        </div>
    </div>
    <hr>
    <div class="row section-padding">
        <div class="columns small-12 large-8">
            <div class="text-section">
                <h3>Description</h3>
                <p><?php echo get_post_meta($post->ID, 'property_description', true ); ?></p>
            </div>
        </div>
        <div class="columns small-12 large-4">
            <table class="unstriped hover">
                <thead>
                    <tr>
                        <th colspan="3" scope="colgroup"><?php if ($sellType == Sale) {echo 'Sale Information';} elseif ($sellType == Rent){echo 'Rental Information';} ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><span class="icon-home"></span></td>
                        <td>
                           <?php echo get_post_meta($post->ID, 'property_address', true ); ?>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="icon-dollarsign"></span></td>
                        <td>
                            <?php echo get_post_meta($post->ID, 'property_price', true ); ?>
                            <?php if ($sellType == Rent){echo '/month';} ?>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="icon-enlarge2"></span></td>
                        <td>
                            <?php echo get_post_meta($post->ID, 'property_size', true ); ?> sqr/ft
                        </td>
                    </tr>
                    <tr>
                        <td><i class="icon-users"></i></td>
                        <td><?php echo get_post_meta($post->ID, 'property_bedrooms', true ); ?> Bedrooms</td>
                    </tr>
                    <tr>
                        <td><span class="icon-tiolet_icon"></span></td>
                        <td><?php echo get_post_meta($post->ID, 'property_bathrooms', true ); ?> Bath</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <?php
    
    if ($sellType == Rent) {
        get_template_part( 'parts/content', 'listingActionRent' );
    }
    if($sellType == Sale){
        get_template_part( 'parts/content', 'listingActionSale');
    }
    
    ?>

    
    </main>
    <!-- end #main -->

</div> <!-- end #content -->

<?php get_footer(); ?>