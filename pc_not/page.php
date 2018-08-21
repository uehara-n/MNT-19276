<?php get_header();
$title = apply_filters( 'the_title', get_queried_object()->post_title );
the_post();
?>

<!-- ======================コンテンツここから======================= -->
<div class="content">

<!-- ======================右コンテンツここから======================= -->
<div class="c_right">

				<ul id="pankuzu" class="clearfix">
					<?php the_pankuzu_keni( ' &gt; ' ); ?>
				</ul>

				<h2 id="page_main_image">
					<?php
					if ( $post->post_parent ) {
						$root = get_post( min( get_post_ancestors( $post ) ) );
						$slug = $root->post_name;
						$alt  = apply_filters( 'the_title', $root->post_title );
					} else {
						$slug = gr_get_pagename();
						$alt = $title;
					}
					printf(
						'<img src="%1$s/page_image/%2$s_title.gif" alt="%3$s" width="730" height="100" />',
						get_stylesheet_directory_uri(),
						$slug,
						$alt
					);
					?>
				</h2>

				<!--page_comment_area-->
				<div id="page_comment_area01">

					<?php
					remove_filter('the_content', 'wpautop');
					the_content();
					add_filter('the_content', 'wpautop');
					?>

			  </div>
				<!--page_comment_area-->

				<?php if(is_page('book') || is_page('contact')): ?>
				<?php else: ?>
				<?php gr_contact_banner();
				arigatou_foot(); ?>
				<?php endif; ?>
</div>
<!-- ======================右コンテンツここまで======================= -->

		<!--↓↓↓ 左サイドバー ↓↓↓-->
		<?php get_sidebar(); ?>
		<!--↑↑↑ 左サイドバー ↑↑↑-->

</div>
<!-- ======================コンテンツここまで======================= -->


<?php get_footer(); ?>
