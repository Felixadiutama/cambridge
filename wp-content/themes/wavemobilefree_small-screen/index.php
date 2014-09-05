<?php get_header(); ?>
<?php if ( ! have_posts() ) : ?>  
        <h1>Not Found</h1>  
            <p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post</p>  
<?php endif; ?>  
<div class="loop clearfix">
<?php 
$count=1;
while ( have_posts() ) : the_post(); ?>
 		  
        <div class="post-loop no-thumb<?php if($count%2==0) echo " even" ?>">
        <a href="<?php the_permalink(); ?>" class="post-link">
        
        <div class="post-info">
        <div class="post-details-top">  
                        <span class="category"><?php 					
						$categories = get_the_category();
						$seperator = ' ';
						$output = '';
						if($categories){
							foreach($categories as $category) {
								$output .= $category->cat_name.$seperator;
							}
						echo trim($output, $seperator);
} 
						
						
						?></span> 
                    </div>  
                <h1><?php the_title(); ?></h1>
               
                <?php 
				$text=get_the_excerpt();
				$text=explode(" ",$text);
				$words=25;
				$excerpt="";
				for($i=0;$i<$words;$i++)
				{
					$excerpt.=$text[$i]." ";	
				}
				?>
                <p>
                <?php
				if(sizeof($text)>$words)
					$excerpt.="[...]";
				echo trim($excerpt);
				?>  
                </p>
  
                <?php //if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>  
                        <?php //the_excerpt(); ?>  
                <?php //else : ?>  
                        <?php //the_content('Read More'); ?>  
                <?php //endif; ?>
                
                <?php
				if($_51d['IsMobile']!="True") {
					//the_excerpt();
				  }
				
				 ?>  
                <div class="dots"></div>
           </div>
           </a>
            </div><!-- post-loop -->  

<?php
$count++;
 endwhile; ?>
</div>
<div class="clearfix">
<?php
if(get_next_posts_link()!=NULL)
{
?>
<div id="older-posts"><?php next_posts_link('Older Posts'); ?></div>
<?php
}
if(get_previous_posts_link()!=NULL)
{
?>
<div id="newer-posts"><?php previous_posts_link('Newer Posts'); ?></div> 
<?php
}
?>
</div> 
  
<?php get_sidebar(); ?>  