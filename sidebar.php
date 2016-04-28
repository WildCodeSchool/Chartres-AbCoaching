<div class="sidebar"> 
	<ul>
		<li>
			<h2>Archives</h2>
			<ul>

				<?php

				//snipplr.com/view/67166/

				global $wpdb, $wp_locale;
				$catid = get_cat_ID('Articles');
				$query = "select YEAR(post_date) AS `year`, MONTH(post_date) AS `month`, count(ID) as `posts` from $wpdb->posts,  $wpdb->term_taxonomy, $wpdb->term_relationships 
					WHERE $wpdb->posts.post_status = 'publish' 
						AND $wpdb->posts.post_type = 'post'
						AND $wpdb->term_taxonomy.term_id = $catid
						AND $wpdb->posts.ID = $wpdb->term_relationships.object_id
						AND $wpdb->term_taxonomy.term_id = $wpdb->term_relationships.term_taxonomy_id
						GROUP BY YEAR(post_date), MONTH(post_date) ORDER BY post_date DESC"; 
				$arcresults = $wpdb->get_results($query); 
				
				foreach ($arcresults as $arcresult) :
					$nb_posts = ($arcresult->posts);
					$text = sprintf(('%1$s %2$d'), $wp_locale->get_month($arcresult->month), $arcresult->year, $arcresult->posts);?>
					<li>
						<a href="<?php bloginfo('url') ?>/index.php/<?php echo $arcresult->year; ?>/<?php echo str_pad($arcresult->month, 2, '0', STR_PAD_LEFT); ?>">
						<?php echo $text;  ?>
						</a>
						<?php print "(".$nb_posts.")";  ?>
					</li>

				<?php endforeach; ?> 

			</ul>

		</li>
	</ul> 
</div>