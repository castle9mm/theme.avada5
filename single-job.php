<?php


$post = get_post();


?>
<style>
div, a, p, span,h1,h2,h3,h4{
		
		font-family: "Myriad-Pro", arial, sans-serif !important;
	}
	h1{
		text-align: center;
		font-size: 40px;
		color: #cc0000;
	}
	.content div{
		margin-bottom:10px;
	}
	
</style>
<div style="padding:10px">
	<h1><?php echo $post->post_title; ?></h1>
	
	<div class="content">
		<?php echo $post->post_content; ?>
		</div>
		
	</div>
	
	
	<?php
?>