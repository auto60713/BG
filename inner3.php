 <? 
   $link = @mysqli_connect('localhost','root','123456','activity');
   if ( !$link ) 
   {
    echo "³sµ²¿ù»~°T®§: ".mysqli_connect_error()."<br>";
    exit(); 
   }   
   mysqli_query($link,'set names utf8');   
   function checking($link,$value) 
   {
    if (function_exists ( 'get_magic_quotes_gpc' ))
	{
    if (get_magic_quotes_gpc( ))  
	   {
        $value = stripslashes($value);       
        } 
	}
    if (!is_numeric($value)) 
      $value = "'" .mysqli_real_escape_string($link,$value) . "'";  
    else
      $value =mysqli_real_escape_string($link,$value);
    return $value; 
	} 
 ?> 