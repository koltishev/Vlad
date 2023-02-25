<?php
/*
Template Name: главный шаблон
*/
?>
<?php
    get_header(); ?>

<?php
$image1 = get_field('slider1');
$image2 = get_field('slider2');
$image3 = get_field('slider3');
?>

    <div class="slider">
        <div>
            <img src="<?php echo $image1; ?>" alt="">
        </div>
        <div>
            <img src="<?php echo $image2; ?>" alt="">
        </div>
        <div>
            <img src="<?php echo $image3; ?>" alt="">
        </div>
    </div>
<?php
get_footer();
