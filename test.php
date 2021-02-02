<?php 
require_once 'supportive_php/connection.php';

											$id = 1;
											$actimg = mysqli_query($conn ,"SELECT bin_date,filetype FROM imgactivity WHERE imgActivityIndex=1 ");
											$display_actimg = mysqli_fetch_array($actimg);
											$data = $display_actimg['bin_date'];
											$type = $display_actimg['filetype'];
											Header('Content-Type: $type');
											echo $data;


?>

<div style= "width:50px; height:60px; text-align:center>
Header('Content-Type: $type');
	<?php echo $data ?>
</div>