<?php get_header(); ?>

<main class="introduction-page">
    <div class="container hero_container">
        <img
            src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/milenium_hero.png' ); ?>"
            alt=""
            id="hero"
        >
    </div>

    <?php
    $repeater_one = get_field( 'home_page_introduction_section_type_1' );
    $repeater_two = get_field( 'home_page_introduction_section_type_2' );

    $repeater_one = is_array( $repeater_one ) ? $repeater_one : [];
    $repeater_two = is_array( $repeater_two ) ? $repeater_two : [];

    $count_one = count( $repeater_one );
    $count_two = count( $repeater_two );
    $total     = $count_one + $count_two;

    $index_one = 0;
    $index_two = 0;

    for ( $i = 0; $i < $total; $i++ ) :

        if ( $i % 2 === 0 ) :

            if ( isset( $repeater_one[ $index_one ] ) ) :
                $row   = $repeater_one[ $index_one ];
                $group = $row['section_group'] ?? [];
                $text  = $group['section_text'] ?? '';
                $image = $group['section_image'] ?? null;
                ?>
                <section class="container introduction-section align-items-center">
                    <div class="info-container">
                        <?php echo wp_kses_post( $text ); ?>
                     </div>    
                    <img width="550px" height="450px" src="<?php echo esc_url( $image ); ?>">
                </section>
                <?php
                $index_one++;
            endif;

        else :

            if ( isset( $repeater_two[ $index_two ] ) ) :
                $row   = $repeater_two[ $index_two ];
                $group = $row['section_group'] ?? [];
                $text  = $group['section_text'] ?? '';
                $image = $group['section_image'] ?? null;
                ?>
                <section class="container introduction-section-2 align-items-center">
                    <img width="550px" height="450px" src="<?php echo esc_url( $image ); ?>">
                    <div class="info-container">
                        <?php echo wp_kses_post( $text ); ?>
                    </div>    
                </section>
                <?php
                $index_two++;
            endif;

        endif;

    endfor;
    ?>



   <?php
$booking_section = get_field( 'booking_section' );

$booking_section = is_array( $booking_section ) ? $booking_section : [];

$booking_text   = $booking_section['booking_section_text'] ?? '';
$image_1        = $booking_section['booking_section_image_1'] ?? '';
$image_2        = $booking_section['booking_section_image_2'] ?? '';
$image_3        = $booking_section['booking_section_image_3'] ?? '';
$image_4        = $booking_section['booking_section_image_4'] ?? '';
?>

<section class="container d-flex booking-section align-items-center">
    <div class="info-container me-lg-5">

        <?php if ( ! empty( $booking_text ) ) : ?>
            <div class="booking-section-text">
                <?php echo wp_kses_post( $booking_text ); ?>
            </div>
        <?php endif; ?>

        <button class="btn">See more</button>
    </div>

    <div class="booking-section-image-container">
        <?php if ( ! empty( $image_1 ) ) : ?>
            <img src="<?php echo esc_url( $image_1 ); ?>" alt="">
        <?php endif; ?>

        <div class="d-flex gap-sm-3 gap-lg-5">
            <?php if ( ! empty( $image_2 ) ) : ?>
                <img src="<?php echo esc_url( $image_2 ); ?>" alt="">
            <?php endif; ?>

            <?php if ( ! empty( $image_3 ) ) : ?>
                <img src="<?php echo esc_url( $image_3 ); ?>" alt="">
            <?php endif; ?>
        </div>

        <?php if ( ! empty( $image_4 ) ) : ?>
            <img src="<?php echo esc_url( $image_4 ); ?>" alt="">
        <?php endif; ?>
    </div>
</section>
</main>

<?php get_footer(); ?>