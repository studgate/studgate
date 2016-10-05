<?php
if ($page == 0):

	$blogAuthor = node_load(array("nid" => $node->field_blog_author[0][nid]));

	if (drupal_is_front_page()):
		// make a custom title teaser to use for the home blog
		$titletease = strip_tags($node->title);

		if (strlen($titletease) > 37) :
			print '<p class="title">'. drupal_substr($titletease, 0, 37) . '</p>';
		else :
			print '<p class="title">'. $node->title . '</p>';
		endif;

		// make a custom teaser to use for the blog
		$teaseMe = strip_tags($node->content['body']['#value']);
		$readMore = '... <a href="' . $node_url . '" title="' . $title . '">Read more</a>';

		if (strlen($teaseMe) > 75) :
		 	print '<p>' . drupal_substr($teaseMe, 0, 75) . $readMore . '</p>';
		else :
			print '<p>' . $teaseMe . $readMore . '</p>';
		endif;

	else : ?>

		<?php $blogAuthor = node_load(array("nid" => $node->field_blog_author[0][nid])); ?>
		<div class="blog-item">
			<h2><a href="<?php print $node_url; ?>" title=""><?php print $node->title; ?></a></h2>
			<div class="categories">
				<span class="posted-in">Posted in:</span>

				<?php
			          $terms = taxonomy_node_get_terms_by_vocabulary($node, 4); // vid=4, need categories list
			          if(!empty($terms)) {
			            print '<ul class="categories">';
			            foreach($terms as $term) {
						  $lterm = l($term->name, 'taxonomy/term/'.$term->tid);
			              print '<li>' . $lterm . '</li>';
			            }
			            print '</ul>';
			          }
			      ?>
			</div>
			<?php
				$teaseMe = strip_tags($node->content['body']['#value']);
				$readMore = '... <a href="' . $node_url . '" title="' . $title . '">Read more</a>';

				if (strlen($teaseMe) > 350) :
				 	print '<p>' . drupal_substr($teaseMe, 0, 350) . $readMore . '</p>';
				else :
					print '<p>' . $teaseMe . '</p>';
				endif;
			?>

			<div class="social">
				<a href="http://twitter.com/share" class="twitter-share-button" data-count="vertical" data-url="<?php $curr_url = check_plain("http://" .$_SERVER['HTTP_HOST'] .$node_url); echo $curr_url; ?>" data-text="<?php echo $title ." | devlogicinc.com"; ?>" data-via="devlogicinc">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
				<iframe id="iframe_like" name="fbLikeIFrame_0" class="social-iframe" scrolling="no" frameborder="0" src="http://www.facebook.com/widgets/like.php?width=100&amp;show_faces=false&amp;layout=box_count&amp;colorscheme=light&amp;href=<?php $curr_url = check_plain("http://" .$_SERVER['HTTP_HOST'] .$node_url); echo $curr_url; ?>" width="350" height="65"></iframe>
			</div>
			<div class="info">
					<?php print theme('imagecache', 'blog-posted', $blogAuthor->field_staff_picture[0][filepath], $blogAuthor->title, $blogAuthor->title) ?>
				<a href="<?php print drupal_lookup_path('alias',"node/".$blogAuthor->nid); ?>" title="" class="name">
					<?php print $blogAuthor->title; ?>
					</a>
				<span class="date"><?php print format_date($node->created, 'custom', 'F j, Y \a\\t g:i a' ); ?></span>

				<div class="discuss">
					<?php
					print theme('disqus_comments_num', $node->disqus['domain'], drupal_get_path_alias('node/'. $node->nid));
					?>
				</div>

			</div>
		</div>

	<?php endif;

else :
		$blogAuthor = node_load(array("nid" => $node->field_blog_author[0][nid]));
		?>
		<div id="blog-inner">
			<div id="metadata">
				<div class="info-inner">
					<div class="name-date">
						By <a href="<?php print drupal_lookup_path('alias',"node/".$blogAuthor->nid); ?>" title="" class="name">
							<?php print $blogAuthor->title; ?>
							</a> on
						<?php print format_date($node->created, 'custom', 'F j, Y \a\\t g:i a' ); ?>
					</div>
					<div class="posted-in">
						<span>Posted in:</span>
						<?php
					          $terms = taxonomy_node_get_terms_by_vocabulary($node, 4); // vid=4, need categories list
					          if(!empty($terms)) {
					            print '<ul class="categories">';
					            foreach($terms as $term) {
								  $lterm = l($term->name, 'taxonomy/term/'.$term->tid);
					              print '<li>' . $lterm . '</li>';
					            }
					            print '</ul>';
					          }
					      ?>
					</div>
				</div>

				<div class="social-inner">
						<a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-url="<?php $curr_url = check_plain("http://" .$_SERVER['HTTP_HOST'] .$node_url); echo $curr_url; ?>" data-text="<?php echo $title ." | devlogicinc.com"; ?>" data-via="devlogicinc">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
				<iframe src="http://www.facebook.com/plugins/like.php?href=<?php $curr_url = check_plain("http://" .$_SERVER['HTTP_HOST'] .$node_url); echo $curr_url; ?>&amp;layout=button_count&amp;show_faces=true&amp;width=400&amp;action=like&amp;font=trebuchet+ms&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:400px; height:21px;" allowTransparency="true"></iframe>

				<!-- <iframe id="iframe_like" name="fbLikeIFrame_0" class="social-iframe" scrolling="no" frameborder="0" src="http://www.facebook.com/widgets/like.php?width=200&amp;show_faces=false&amp;layout=button_count&amp;colorscheme=light&amp;href=<?php //$curr_url = check_plain("http://" .$_SERVER['HTTP_HOST'] .$node_url); echo $curr_url; ?>" width="350" height="65"></iframe> -->
				</div>
				<div class="comments">
					<?php
					print theme('disqus_comments_num', $node->disqus['domain'], drupal_get_path_alias('node/'. $node->nid));
					?>
				</div>
			</div>

			<div id="blog-content">
				<?php print $node->content['body']['#value']; ?>
			</div>

			<div id="blog-author">
				<div class="top"></div>
				<div class="photo">
					<?php print theme('imagecache', 'blog-staff', $blogAuthor->field_staff_picture[0][filepath], $blogAuthor->title, $blogAuthor->title) ?>
				</div>
				<h2>Blog Author</h2>
				<a href="/<?php print drupal_lookup_path('alias',"node/".$blogAuthor->nid); ?>" title="" class="name"><?php print $blogAuthor->title; ?></a> <?php //print $blogAuthor->field_staff_title[0][value]; ?>
				<!-- <a href="" title="" class="twitter">Follow User on Twitter!</a> -->
				<?php
					$teaseMe = strip_tags($blogAuthor->body);
					$readMore = '... <a href="/' . drupal_lookup_path('alias',"node/".$blogAuthor->nid) . '" title="' . $blogAuthor->title . '">Read more</a>';

					if (strlen($teaseMe) > 250) :
					 	print '<p>' . drupal_substr($teaseMe, 0, 250) . $readMore . '</p>';
					else :
						print '<p>' . $teaseMe . '</p>';
					endif;
				?>
				<div class="bottom"></div>
			</div>

			<div id="comments">
				<h2 class="title">Comments</h2>
				<?php print $blog_comments; ?>
			</div>

		</div>

<?php
endif;
?>
