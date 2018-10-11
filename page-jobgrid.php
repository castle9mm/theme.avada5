<?php

/* Template Name: Job Grid */
?>
<html>
	<head>
		 <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
	
		<style>
	
  
		a,p,div{
			font-family: "Myriad-Pro", arial, sans-serif !important;
		}
			.companies-section {
				display: flex;
				    flex-wrap: wrap;
			}
			.company-container {

				display: grid;
				text-align: center;
				border: 1px solid black;
				box-shadow: 2px 2px 5px #111;
				margin-left: 20px;
				margin-bottom: 10px;
				width: 18%;
				min-height: 400px;
				padding: 5px;
			}
			.company-container img {

				margin: auto;
				width: 100%;
				height: 100%;
				max-width: 100%;
			}
			.company-container a{
				
				font-weight: bold;
				color: black;
				font-size: 20px;
				text-decoration: none;
			}
			footer{
				
				height:80px;
				position: absolute;
				background-color: #000 !important;
			    border-top: 5px #cc0000 solid !important;
			    padding-bottom: 0px !important;
			    position: fixed;
			    left: 0;
			    bottom: 0;
			    width: 100%;
			    z-index: 9999;
			    padding-left: 10px !important;
			    padding-right: 10px !important;
			    padding-top: 0px !important;
			}
			footer img{
				
				height:80px;
				    width: auto;
			}
			#close {
				background-color: #ccc;
				width: 65px;
				position: relative;
				float: right;
				right: 13%;
				top: 30px;
				z-index: 999999;
				text-align: center;
				color: #cc0000;
				font-size: 22px;
				border: 2px solid;
			}
			#filter-sidebar{
				
				position: absolute;
				width:300px;
				z-index: 9999;
				border-right: 3px #CC0000 solid;
				height: 100%;
				top:0px;
				background-color: #FFFFFF;
				left:-300px;
				transition: 0.300s;
			}
			#filter-sidebar h2{
				text-align: center;
				font-size: 25px;
			}
			#filter-sidebar #filter-options{
				padding-left: 10px;
				display: grid;
				margin-top: 35px;
				    height: 800px;
    overflow-y: scroll;
			}
			#filter-sidebar div label{
				width: 100%;
				margin-bottom: 15px;
				font-size: 20px;
			    position:relative;
			    display:inline-block;    
    			vertical-align:middle; 
			}
			#filter-sidebar div label input{
				-webkit-appearance: none;
				background-color: #ffffff;
				border: 2px solid #CC0000;
				box-shadow: 0 1px 2px rgba(0,0,0,0.05), inset 0px -15px 10px -12px rgba(0,0,0,0.05);
				padding: 15px;
				border-radius: 0px;
				display: inline-block;
				position: relative;
				width:20px;
			    position:relative;
			    vertical-align:middle; 
				margin-right: 5px;
				
			}
			#filter-sidebar div label input:active, #filter-sidebar div label input:checked:active {
				box-shadow: 0 1px 2px rgba(0,0,0,0.05), inset 0px 1px 3px rgba(0,0,0,0.1);
			}
			
			#filter-sidebar div label input:checked {
				box-shadow: 0 1px 2px rgba(0,0,0,0.05), inset 0px -15px 10px -12px rgba(0,0,0,0.05), inset 15px 10px -12px rgba(255,255,255,0.1);
				color: #cc0000;
			}
			#filter-sidebar div label input:checked:after {
				content: '\2714';
				font-size: 24px;
				position: absolute;
				top: 0px;
				left: 3px;
				color: #CC0000;
						
			}
			
			.filter-expand{
				
				position: absolute;
				width:100px;
				z-index: 9999;
				border: 3px #CC0000 solid;
				border-left:0px;
				height: 110px;
				top:40%;
				background-color: #ffffff;
				left:-0px;
				padding: 10px;
				padding-top: 20px;
				text-align: center;
				font-weight: bold;
				box-shadow: 4px 4px 5px gray;
				transition: 0.300s;
				border-radius: 0px 5px 5px 0px;
				font-size:20px;
			}
			#filter-button{
				display:none;
				background: #FFFFFF;
				padding: 15px 20px;
				font-weight: bold;
				border: 2px solid #CC0000;
				box-shadow: 2px 3px 5px gray;
				top:60%;
				left:65px;
				font-size:20px;
				position:absolute;
				margin: auto;
				
			}
			#filter-button-remove{
				/*display:none;*/
				background: #FFFFFF;
				padding: 15px 20px;
				font-weight: bold;
				border: 2px solid #CC0000;
				box-shadow: 2px 3px 5px gray;
				top:85%;
				left:45px;
				font-size:20px;
				position:absolute;
				margin: auto;
				
			}
			
			#filter-cover{
				width:100%;
				height:100%;
				z-index: 999;
				background-color: rgba(51, 51, 51, 0.7);
				position: absolute;
				top:0;
				left:0;
				display: none;
				transition: 0.200s;
				
			}
		</style>
	</head>
	<body>
		
		<div id="modal-container" style="display:none;">
			<div id="close" style="">
				x
				<br>
				Close
			</div>
			<div id="modal" style="display:none;"></div>
		</div>
		<div id="main-container">
			<?php 
			get_list_companies(true,[],false);
			?>
		</div>
		
	
<div id="filter-cover" onclick="expandFilter();"></div>
<div id="filter-sidebar" >
	<h2 style="color:#cc0000">Filter Options</h2>
	
	<div id="filter-options">
		
	<?php
	$partners_obj = get_terms('jobType', array('hide_empty' => false));

	$partners;
	foreach ($partners_obj as $partner) {
		$partners[$partner -> term_id] = array('id'=>$partner->term_id,'name' => $partner -> name, 'slug' => $partner -> slug, 'description' => $partner -> description, );
	}
?>
<style>
	
	.radio{
		order: 1;
		
	}
	.check{
		order: 99;
	}
	.radio-label{
		order:0;
	}
	.check-label{
		order:50;
	}
</style>
<label class="radio-label"><b>Mayors</b></label>
<label class="check-label"><b>Type</b></label>
<?php
	foreach ($partners as $key => $value) {
		
		if($value['name']=="Internship" || $value['name']=="Full Time" || $value['name']=="Part Time"){
				?>
		<label class="check"><input class="checkbox" type="checkbox" name="checkbox" value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>	
			
			<?php
			
		}else{
			?>
		<label class="radio"><input class="checkbox" type="radio" name="checkbox" style="border-radius: 100%" value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
		
		<?php
		}
	}
	?>
		</div>
		<input id="filter-button" type="button" value="Submit" onclick="updateList();"/>
		<input id="filter-button-remove" type="button" value="Clear Selection" onclick="unselectCheckboxs()"/>
	</div>
<div id="filter-expand"  class="filter-expand" onclick="expandFilter();">
	Filter for your next Job or Internship >>
	</div>
	<input id="filter-status" type="hidden" value="0" />
<footer>
	<img src="https://eccles.utah.edu/programs/undergraduate/wp-content/uploads/2018/08/Untitled-2.png" width="800" height="104" alt="" title="Untitled-2" class="img-responsive wp-image-8897" srcset="https://eccles.utah.edu/programs/undergraduate/wp-content/uploads/2018/08/Untitled-2-200x26.png 200w, https://eccles.utah.edu/programs/undergraduate/wp-content/uploads/2018/08/Untitled-2-400x52.png 400w, https://eccles.utah.edu/programs/undergraduate/wp-content/uploads/2018/08/Untitled-2-600x78.png 600w, https://eccles.utah.edu/programs/undergraduate/wp-content/uploads/2018/08/Untitled-2.png 800w" sizes="(max-width: 800px) 100vw, 600px">
	<script>
		function expandFilter(){
			var text = jQuery('#filter-status').val();
			
			if(text=="0"){
				jQuery('#filter-expand').css('left', '300px');
				jQuery('#filter-sidebar').css('left', '0px');
			
				jQuery('#filter-expand').empty();
				jQuery('#filter-expand').append("Filter for your next Job or Internship <<");
				
				jQuery('#filter-status').val("1");
				jQuery('#filter-cover').css('display', 'block');
			}else{
				jQuery('#filter-expand').css('left', '0px');
				jQuery('#filter-sidebar').css('left', '-300px');
			
				jQuery('#filter-expand').empty();
				jQuery('#filter-expand').append("Filter for your next Job or Internship >>");
				
				jQuery('#filter-status').val("0");
				jQuery('#filter-cover').css('display', 'none');
				
			}
		}
		
	</script>
	<script>
			
			jQuery(document).on('click', 'a', function(e) {
				e.preventDefault();
				e.stopImmediatePropagation();
				return false;
			});

		</script>
	<script>
			function updateList(){
				var filters=[];
				var selected = [];
				$('#filter-options input:checked').each(function() {
				  filters.push($(this).attr('value'));
				  
				});
				//alert(filters);
				//expandFilter();
				jQuery(document).ready(function($) {

					var data = {
						'action': 'search_companies',
						'job_types': filters
					};
			 		 var ajaxurl = "<?php echo admin_url('admin-ajax.php') ?>";
			 		 //alert(ajaxurl);
					// since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
						jQuery.post(ajaxurl, data, function(response) {
						jQuery('#main-container').empty();
						jQuery('#main-container').append(response);
					});
				});
				
			}
			 $('.checkbox').change(function(){
			 	
			 	updateList();
			 });
			function modal(id) {
				var href = $('#'+id).attr('href');
				//alert(href);

				jQuery('#modal-container').css('position', 'fixed');
				jQuery('#modal-container').css('z-index', '99999');
				jQuery('#modal-container').css('width', '100%');
				jQuery('#modal-container').css('height', '100vh');
				jQuery('#modal-container').css('background-color', 'rgba(51, 51, 51, 0.7)');
				jQuery('#modal-container').css('top', '0px');
				jQuery('#modal-container').css('left', '0px');

				jQuery('#modal').css('display', 'block');
				jQuery('#modal').css('position', 'fixed');

				jQuery('#modal').css('background-color', '#fff');
				jQuery('#modal').css('border', '5px solid #333');
				jQuery('#modal').css('width', '70%');
				jQuery('#modal').css('padding-top', '5px');
				jQuery('#modal').css('height', '900px');
				jQuery('#modal').css('top', '50px');
				jQuery('#modal').css('left', '15%');
				jQuery('#modal').css('z-index', '9999');

				jQuery('#modal').empty();
				jQuery('#modal').append('<iframe id="iframe-post" src="' + href + '" style="border:0px; z-index:9999"></iframe>');
				jQuery('#modal iframe').css('width', '100%');
				jQuery('#modal iframe').css('height', '100%');

				jQuery('#modal-container').css('display', 'block');

			}

			jQuery('#modal-container').click(function() {
				jQuery('#modal').empty();
				jQuery('#modal-container').css('display', 'none');
			});
			jQuery('#close').click(function() {
				jQuery('#modal').empty();
				jQuery('#modal-container').css('display', 'none');
			});

			function updateModal() {

				jQuery('#modal-container').css('display', 'none');
				jQuery('#modal').empty();
				unselectCheckboxs();
			}

			//setInterval(updateModal, 30000);
			
			var idleTime = 0;
			$(document).ready(function () {
			    //Increment the idle time counter every minute.
			    var idleInterval = setInterval(timerIncrement, 30000); // 0.5 minutes
			
			    //Zero the idle timer on mouse movement.
			    $(this).mousemove(function (e) {
			        idleTime = 0;
			    });
			    $(this).keypress(function (e) {
			        idleTime = 0;
			    });
			});
			
			function timerIncrement() {
			    idleTime = idleTime + 1;
			    if (idleTime > 1) { // 2 minutes
			    	updateModal();
			    	var text = jQuery('#filter-status').val();
			    	if(text=="1"){
			    		
			    		expandFilter();	
			    	}
			    	
			    }
			}
			//jQuery('a').addClass('modal-link');
			
			function unselectCheckboxs(){
				
				 $('.checkbox').each(function(){
                this.checked = false;
            	});
            	
            	updateList();
				
			}
			
		</script>
</footer>
	</body>
</html>