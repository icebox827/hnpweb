<?php
/**
 * @package The7
 */

defined( 'ABSPATH' ) || exit;

! isset( $follow_link ) && $follow_link = '';
! isset( $caption ) && $caption = '';
! isset( $icon ) && $icon = '';
! isset( $icon_position ) && $icon_position = 'after';
?>

<a class="post-details details-type-btn dt-btn-s dt-btn" href="<?php echo esc_url( $follow_link ) ?>"><?php
	if ( $icon_position === 'before' ) {
		echo $icon;
	}

	echo '<span>' . esc_html( $caption ) . '</span>';

	if ( $icon_position === 'after' ) {
		echo $icon;
	}
	?></a>