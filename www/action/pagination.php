<?php
include_once('../config.php');


//getting number of rows and calculating no of pages
$sql = "select * from custom_reviews";
$rsd = mysql_query($sql);
$count = mysql_num_rows($rsd);
$pages = ceil($count/$per_page)
?>
	<script type="text/javascript">
	$(document).ready(function(){
		
	//Display Loading Image
	function Display_Load()
	{
	    $("#loading").fadeIn(900,0);
		$("#loading").html("<img src='./action/bigLoader.gif' />");
	}
	//Hide Loading Image
	function Hide_Load()
	{
		$("#loading").fadeOut('slow');
	};

   //Default Starting Page Results
   
	$("#pagination li:first").css({'color' : '#33CC33'}).css({'border' : 'none'});
	
	Display_Load();
	
	$("#contentMy").load("./action/pagination_data.php?page=1", Hide_Load());



	//Pagination Click
	$("#pagination li").click(function(){
			
		Display_Load();
		
		//CSS Styles
		$("#pagination li")
		.css({'border' : 'none'})
		.css({'color' : '#555555'});
		
		$(this)
		.css({'color' : '#33CC33'})
		.css({'border' : 'none'});

		//Loading Data
		var pageNum = this.id;
		
		$("#contentMy").load("./action/pagination_data.php?page=" + pageNum, Hide_Load());
	});
	
	
});
	</script>

	<div align="center">
    <div id="loading" ></div>
	<div id="contentMy">

	</div>
				
	
	<table width="400px ">
	<tr><Td>
			<ul id="pagination">
				<?php
				//Show page links
				for($i=1; $i<=$pages; $i++)
				{
					echo '<li id="'.$i.'">'.$i.'</li>';
				}
				?>
	</ul>	
	</Td></tr></table>
</div>