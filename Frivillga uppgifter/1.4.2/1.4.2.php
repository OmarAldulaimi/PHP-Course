<?php 
    header("Content-type: multipart/x-mixed-replace; boundary=endofsection"); 

    echo "\n--endofsection\n"; 
    
    $count = 10;

    while ($count > 0) 
    {     
        $count--;

        echo "Content-type: text/plain\n\n"; 
        echo "Time: " . date("D, d M Y H:i:s") . "\n";
        echo "Ner: $count";  
        echo "--endofsection\n"; 

        ob_flush(); 
        flush(); 

        sleep(1);
    } 

?>