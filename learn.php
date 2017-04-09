<?php
if (isset($_POST['greetings'])){
    
    
$french = array('Allo','Je t\'aime','Au Revoir');

$chinese = array('Nî Hao','Wô ai nî','Zài Jiàn');

$spanish = array('xx', 'xx', 'xx');

$korean = array('annyeong', 'xxx', 'xxx');

if ($_POST['language']==0) {

    $hello = $french[$_POST['greetings']];
       
}

if ($_POST['language']==1) {

    $hello = $chinese[$_POST['greetings']];
       
}

if ($_POST['language']==2) {

    $hello = $spanish[$_POST['greetings']];
       
}

if ($_POST['language']==3) {

    $hello = $korean[$_POST['greetings']];
       
}


echo $hello;
}
?>