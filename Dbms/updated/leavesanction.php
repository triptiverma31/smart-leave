<?php
		session_start();		
		$pempid=$_POST['empid'];
		$pstatus=$_POST['ustatus'];
                                    $prem=$_POST['remainedleave'];
	 $link = mysqli_connect("localhost", "root", "", "leave");

		if( $link===false)
		{       
				 die("Couldn't connect to the database");
		}
$sql=("UPDATE child_adoption_leave SET status='$pstatus' where Empid='$pempid'") ;
				
 if(mysqli_query($link, $sql))
{
          header('Location:padoption.php');
     
       // echo 'Records were updated successfully.';//

  } 
else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }

     

    // Close connection

    mysqli_close($link);
			
?>