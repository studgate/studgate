<?php
	if ($page == 0):
?>
<div class="col-md-4">
	<article class="product-id" id="product-id">
		<?php if (isset($node->field_product_picture[$node->language][0]['uri'])) { ?>
	    <figure class="product-image">

			<?php
				 $img_url = $node->field_product_picture[$node->language][0]['uri'];
				 print '<img src="'. image_style_url("product_images", $img_url). '" />';
		   ?>
	    </figure>
		<?php } else {
			print '<a href="' . $node_url . '">
          <img src="'. base_path() . path_to_theme() .'/assets/img/image_coming_soon2.png">
     	</a>';
		} ?>
	    <div class="product-info">
			 <div class="product-name">
				 <h3><a href="<?php print $node_url; ?>"  title="<?php print $node->title; ?>"><?php print $node->title; ?></a></h3>
			 </div>
	       <div class="product-summary">
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
	       </div>
	       <a class="btn btn-primary" href="<?php print $node_url; ?>"  title="<?php print $node->title; ?>">Learn More <span class="glyphicon glyphicon-chevron-right"></span></a>
	    </div>
	</article>
</div>
<?php
else :

	print render($content);

endif;
?>
