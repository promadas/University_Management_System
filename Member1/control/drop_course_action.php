<?php
  
  $drop=$successfulMessage=$errorMessage="";
  $isValid=true;

  if ($_SERVER['REQUEST_METHOD']==="POST")
  {
   
  	
       if($isValid)
      { 
        if($isValid)
  	   {
  	   $successfulMessage="dropped";
       }
        else
       {
    	 $errorMessage="not";
       }
 }
}
 function test_input($data)
		{
			$data=trim($data);
			$data=stripcslashes($data);
			$data=htmlspecialchars($data);
			return $data;
			
			
		}

?>




