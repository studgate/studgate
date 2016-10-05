<?php
	if ($page == 0):
?>
<div class="col-md-5">
	<h3><a href="<?php print $node_url; ?>"  title="<?php print $node->title; ?>"><?php print $node->title; ?></a></h3>
	<h4><?php print format_date($node->created, 'custom', 'F j, Y \a\\t g:i a' ); ?></h4>
	<?php
		$body = field_get_items('node',$node, 'body');
		$teaseMe = strip_tags($body[0]['value']);
		$readMore = '... ';

		if (strlen($teaseMe) > 200) :
			print '<p>' . drupal_substr($teaseMe, 0, 200) . $readMore . '</p>';
		else :
			print '<p>' . $teaseMe . '</p>';
		endif;
	?>
	<a href="<?php print $node_url; ?>"  title="<?php print $node->title; ?>" class="btn btn-primary">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
</div>
<div class="col-md-7">
	<?php
	print theme('image', array(
	'path' => file_create_url($field_image[0]['uri']),
	'alt' => check_plain($node->title),
	));
	?>
</div>

<?php
else :

	print render($content);

endif;
?>
