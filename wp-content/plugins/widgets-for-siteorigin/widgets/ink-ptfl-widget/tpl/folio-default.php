<?php
global $wpinked_widget_count;

$ink_post = $instance['design'];

if( !empty($instance['title']) ) echo $args['before_title'] . esc_html($instance['title']) . $args['after_title'];

$icon_styles = array();
if(!empty($instance['styling']['icon'])) $icon_styles[] = 'color: '.$instance['styling']['icon'];
$icon_styles[] = 'font-size: 35px';

$project_class = ( $instance['design']['sorting'] ? 'mix iw-so-project-container' : 'no-mix iw-so-project-container' );

$align = 'iw-text-' . $instance['styling']['align'];

$first = true;

$unique = 'folio-' . ++$wpinked_widget_count;
?>

<?php if ( $ink_post['sorting'] ): ?>

	<div class="iw-so-folio-terms-container">
		<ul class="iw-so-folio-terms">
			<?php if( $instance['design']['show-all'] ) {
				echo '<li><a class="' . $unique . '-term" data-filter="all" title="' . sanitize_title( $instance['design']['all'] ) . '">' . esc_html( $instance['design']['all'] ) . '</a></li>';
			}

			$taxonomy = 'jetpack-portfolio-type';
			$tax_terms = get_terms( $taxonomy );

			foreach ( $tax_terms as $tax_term ) {
				if( !$instance['design']['show-all'] && $first ) {
					$active_item = '.' . $tax_term->slug;
					$first = false;
				}
				echo '<li><a class="' . $unique . '-term" data-filter=".' . $tax_term->slug . '" title="' . $tax_term->slug . '">' . $tax_term->name .'</a></li>';
			}
			$active_item = ( $active_item ) ? $active_item : 'all';
			?>
		</ul>
	</div>

<?php endif; ?>

<?php
// Setting up posts query

$post_selector_pseudo_query = $instance['portfolio'];

$processed_query = siteorigin_widget_post_selector_process_query( $post_selector_pseudo_query );

$query_result = new WP_Query( $processed_query );
?>

<?php
// Looping through the posts

if($query_result->have_posts()) : ?>

	<div  id="<?php echo $unique . '-container'; ?>" class="iw-so-folio-grid iw-so-folio-default">

		<?php while($query_result->have_posts()) : $query_result->the_post(); ?>

				<?php
				// get Jetpack Portfolio taxonomy terms for portfolio filtering
				$terms = get_the_terms( $post->ID, 'jetpack-portfolio-type' );

				if ( $terms && ! is_wp_error( $terms ) ) :

					$filtering_links = array();

					foreach ( $terms as $term ) {
						$filtering_links[] = $term->slug;
					}

					$filtering = join( ", ", $filtering_links );

					$types = join( " ", $filtering_links );
				?>

				<div class="<?php echo $project_class; ?> <?php echo $types; ?>">
					<article class="iw-so-project-article">

						<?php  if ( '' != get_the_post_thumbnail() ) : ?>
							<div class="iw-so-project-image">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail( 'folio' ); ?>
									<?php echo siteorigin_widget_get_icon( $instance['design']['icon'], $icon_styles ); ?>
								</a>
							</div>
						<?php endif; ?>

						<?php do_action( 'wpinked_folio_default_above_content' ); ?>

						<h3 class="iw-so-project-title <?php echo $align; ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p class="iw-so-project-type <?php echo $align; ?>"><?php echo $filtering; ?></p>

						<?php do_action( 'wpinked_folio_default_below_content' ); ?>

					</article>
				</div>

				<?php
				endif; ?>

		<?php endwhile; wp_reset_postdata(); ?>

	</div>

<?php endif; ?>

<script type="text/javascript">
( function($) {

	$(document).ready( function() {

		$( '#<?php echo $unique . '-container'; ?>' ).mixItUp({
			selectors: {
				filter: '.<?php echo $unique . '-term'; ?>'
			},
			load: {
				filter: '<?php echo $active_item; ?>'
			}
		});

	});

})( jQuery );
</script>
