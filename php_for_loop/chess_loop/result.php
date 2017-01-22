<?php

$user_input = $_POST["number"];

echo '<table width="300px" cellspacing="0px" cellpadding="0px" border="1px">';

      for($row=1;$row<=$user_input;$row++)
	  {
         echo "<tr>";
          for($col=1;$col<=$user_input;$col++)
		  	{
          		$total=$row+$col;
          		if($total%2==0)
		 		{
         			 echo "<td height=30px bgcolor=#FFF></td>";
          		}
		 		 else
		  		{
          			echo "<td height=30px bgcolor=#000></td>";
          		}
          	}
         echo "</tr>";
    }
	echo "</table>";