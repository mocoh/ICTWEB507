<?php


$emails = ['xx@xx.com', 'xxx@xxx.com', 'xxxx@xxxx.com', 'xxx@xxx.com'];


function listWrapper($content){
    echo '<li>' . $content . '</li>';
}


echo '<ul>';
foreach($emails as $email){
    listWrapper($email);
}
echo '<ul>';