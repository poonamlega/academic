<?php 

   include("includes/connection.php");
    
    $batch_id = $_GET['batch_id'];

    $delete_batch = "delete from batch where batch_id = '$batch_id'";
    if($run_delete = mysqli_query($con,$delete_batch)){
    	echo "<script>
    	      alert('Batch Deleted Successfully !!');
    	      window.open('all_batches.php','_self');
         </script>

    	";
    }



 ?>