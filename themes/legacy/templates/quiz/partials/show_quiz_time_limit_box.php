<?php
/**
 * Displays Quiz Time Limit Box
 *
 * Available Variables:
 *
 * @var object  $quiz_view      WpProQuiz_View_FrontQuiz instance.
 * @var object $quiz           WpProQuiz_Model_Quiz instance.
 * @var array  $shortcode_atts Array of shortcode attributes to create the Quiz.
 *
 * @since 3.2.0
 *
 * @package LearnDash\Templates\Legacy\Quiz
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div style="display: none;direction:rtl; " class="wpProQuiz_time_limit bg-white">
	<div class="time">
		<?php
		echo wp_kses_post(
			SFWD_LMS::get_template(
				'learndash_quiz_messages',
				array(
					'quiz_post_id' => $quiz->getID(),
					'context'      => 'quiz_quiz_time_limit_message',
					'message'      => esc_html__( 'Time limit', 'learndash' ) . ': <span>0</span>',
				)
			)
		);
		?>
	</div>
	<div class="wpProQuiz_progress  shadow-sm" style="background-image:linear-gradient(90deg, rgb(42, 146, 162), rgb(70, 119, 173));"></div>
</div>
