<?php
/**
 * Template part for displaying listings
 */
?>

<?php

$sellType = get_post_meta($post->ID, 'property_sell_type', true);

$thumbnail =  pods_image_url( get_post_meta($post->ID, 'property_thumbnail_image', true), 'medium' );

?>

 <div class="cell <?php if ($sellType == 'Sale') { echo 'forSale'; } elseif ($sellType == 'Rent') {echo 'forRent'; } ?>">
        <div class="card card-product">
          <div class="card-product-img-wrapper">
            <a href="<?php echo get_post_permalink() ?>" class="button expanded"><?php if ($sellType == 'Sale') { echo 'View Sale';} elseif ($sellType == 'Rent') {echo 'View Rental';} ?></a>
            <a href="<?php echo get_post_permalink() ?>"><img src="<?php echo $thumbnail ?>"></a>
          </div>
          <table class="unstriped hover">
            <thead>
              <tr>
                <th></th>
                <th><?php if ($sellType == 'Sale') { echo 'For Sale';} elseif ($sellType == 'Rent') {echo 'For Rent';} ?></th>
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
                <td>
                   <?php echo get_post_meta($post->ID, 'property_bedrooms', true ); ?> Bedrooms
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>