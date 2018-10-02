<?php

/**
 * Template used for pages.
 *
 * 
 * 
 */
//get_header(); 
?>
<style>

	body{
		
		margin-left: 15px;
		margin-right: 15px;
	}
	div, a, p, span,h1,h2,h3,h4{
		
		font-family: "Myriad-Pro", arial, sans-serif !important;
	}
	a{
		text-decoration: none;
		color: black;
		
	}
	a h2{
		color: #cc0000;
		
	}
	h1{
		text-align: center;
		font-size: 40px;
		color: #cc0000;
	}
	.post-section{
		
		width:auto;
		
		max-height:215px;
		background-color: #FFFFFF;
		border: 1px #000 solid;
		box-shadow: 2px 3px 5px #111;
		padding:10px;
		padding-top:0px;
		margin-bottom: 10px;
		
	}
	
</style>
<body>
<?php
	$terms = get_terms([
	    'taxonomy' => get_queried_object()->taxonomy,
	    'parent'   => get_queried_object_id(),
	]);
	
	$slug= get_queried_object()->slug;
	$id = (get_queried_object()->term_id);
	echo "<h1>".get_queried_object()->name."</h1>";

	$args = array(get_query_var( 'taxonomy' ) => get_query_var( 'term' ), 'post_type' =>  'job' ); 
    $postslist = get_posts( $args );  
	$filtered_post =  $_GET['posts'];
	$filtered=false;
	if($filtered_post!=""){
		$filtered=true;
	} 
	$filtered_post = explode(',', $filtered_post);
    foreach ($postslist as $post) :  setup_postdata($post); 
		if(in_array($post->ID,$filtered_post)  || !$filtered){
	    ?>      
	    <a href="<?php the_permalink(); ?>">
	    	
	    	<div class="post-section" >
	    	<h2><?php the_title(); ?></h2> 
	    	<?php
			$post_categories = 	wp_get_post_terms($post->ID,'jobType', array('hide_empty' => false));
			echo "<div>";
			foreach ($post_categories as $i => $value) {
					if($i>0){
						echo "<b> - ".$value->name."</b>";
					}else{
						echo "<b>".$value->name."</b>";
					}
				
				
			}
				echo "</div>";
					the_excerpt();
			?>
	    	</div>
	    	</a>
		<?php
		}
	endforeach;
    ?> 
</body>