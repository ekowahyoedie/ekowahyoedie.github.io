<?php



  echo file_get_contents("https://bali-airport.com/data-airline/arr/domestic/"); 

        $headers[] = 'Access-Control-Allow-Origin: https://bali-airport.com/en/arrival-terminal/index'; 
        $headers[] = 'Access-Control-Allow-Credentials: true'; 
        $headers[] = 'Accept: image/gif, image/x-bitmap, image/jpeg, image/pjpeg,text/html,application/xhtml+xml'; 
        $headers[] = 'Connection: Keep-Alive'; 
        $useragent = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 4.0)'; 
        
?>        
