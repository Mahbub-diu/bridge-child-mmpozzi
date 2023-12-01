<?php if ( has_post_thumbnail() ) { ?>
  
        <a itemprop="url" href="<?php the_permalink(); ?>" target="_self" title="<?php the_title_attribute(); ?>">
		  <span class="image">
            <?php the_post_thumbnail($thumb_size); ?>
			</span>
        </a>
    
<?php } ?>