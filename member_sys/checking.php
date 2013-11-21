 <? function checking($value) {
     if (function_exists ( 'get_magic_quotes_gpc' )){
       if (get_magic_quotes_gpc())  
         $value = stripslashes($value); 
       }   
       if (!is_numeric($value)) 
         $value = "'" . mysql_real_escape_string($value) . "'";  
       else
         $value =mysql_real_escape_string($value);  		 
     return $value; }  ?>