<?php
  if ($display_left_panel)
  {
    $left_content = array();
    require(DBC);
    $prds = mysqli_query ($dbc, "CALL ls_prd()");
    if (mysqli_num_rows($prds) > 0) 
    {
    	mysqli_next_result($dbc);
      while ($row = mysqli_fetch_array($prds, MYSQLI_ASSOC)) 
      {
        array_push($left_content, $row);
      }
      //echo '<pre>'; print_r($left_content); echo '</pre>';	
    }
  	 include('./views/update-left.html');
  }
