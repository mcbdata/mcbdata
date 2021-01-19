<div class='ml-md-1 ml-lg-3'>
	<h3>Categories</h3>
	<?php foreach(get_categories() as $category) { 
		echo "<div><h4><a href='/category/".$category->slug."'>".$category->name."</a><hr style='height:2px;border-width:0;color:lightgray;background-color:lightgray'></h4></div>"; 
	} ?>
</div>
