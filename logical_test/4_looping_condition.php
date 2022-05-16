<?php

for($i=1; $i<=50; $i++){
    $wew = '';
    if(($i%3  == 0) && ($i%5  == 0) ){ 
        $wew = 'FooBar';
    }
    else{
        if($i%3 == 0) $wew = 'Foo';
        else if($i%5  == 0) $wew = 'Bar';
    }
    
    echo $i.$wew.'<br>';
}

?>