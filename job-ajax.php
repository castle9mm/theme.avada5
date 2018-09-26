<?php



function search_companies() {
	global $wpdb;
 	$job_types = $_POST['job_types'];
	
	//print_r($job_types);
	if($job_types){
		$list = get_list_id_posts_by_taxonomy_category("jobType", $job_types);
		get_list_companies(true,$list,true);
	}else{
		get_list_companies(true,[],false);
	}	
	

	wp_die();
	// this is required to terminate immediately and return a proper response
}
function get_list_id_posts_by_taxonomy_category($taxonomy,$job_types){
		
	$args = array(
		'post_type' => 'job',
		'tax_query' => array(
			array(
				'taxonomy' => $taxonomy,
				'terms'    => $job_types,
				'operator' => 'AND',
			),
		),
	);
	$query = new WP_Query( $args );
	
	$id_posts_filtered;
	foreach ($query->posts as $key => $value) {
		$id_posts_filtered[$key]=$value->ID;
		
	}
	
	return $id_posts_filtered;
	
}
function get_list_companies($aux=true,$post_list=[],$fitered) {
	

	$partners_obj = get_terms('companies', array('hide_empty' => $aux));

	$partners;
	foreach ($partners_obj as $partner) {
		$partners[$partner -> term_id] = array('id'=> $partner->term_id,'name' => $partner -> name, 'slug' => $partner -> slug, 'description' => $partner -> description, );
	}

	echo "<div class='companies-section'>";
	
	$found_position = false;
	
	foreach ($partners as $key => $value) {
			
		$list_post_from_cat = get_list_id_posts_by_taxonomy_category("companies",$value['id']);
		$has_post=false;
		foreach ($post_list as $key2 => $value_job) {
			
			foreach ($list_post_from_cat as $key3 => $value_comp) {
				if($value_job==$value_comp){
					$has_post=true;
					break;
				}
			}
			if($has_post==true): break; endif;
		}
		
		if($has_post || !$fitered){
			echo "<div class='company-container'  onclick='modal(".$key.");' >";
			echo "<div style='height:350px'>".$value['description']."</div>";
			$link = get_term_link($key);
			if($fitered){
				$post_list_aux = implode(",", $post_list);
				echo '<div style="border-top: 0px solid black; padding-top: 10px"><a id="'.$key.'" onclick="modal('.$key.');" href="'.$link.'?posts='.$post_list_aux.'"  >' . $value['name'] . '</a></div>';
			}else{
				
				echo '<div style="border-top: 0px solid black; padding-top: 10px"><a id="'.$key.'" onclick="modal('.$key.');" href="'.$link.'"  >' . $value['name'] . '</a></div>';
			}
			
			$found_position=true;
			echo "</div>";
			
		}
	}
		if(!$found_position){
					
					echo "<h1 style='text-align:center;     width: 100%;'>Sorry there are no positions with the selected options.</h1>";
			
		}
	echo "</div>";
}
?>