<?php

$target = 'C:/xampp/htdocs/unnmfb/unnmfb/storage/app/public';
$link = 'C:/xampp/htdocs/unnmfb/unnmfb/storage';

if(file_exists($target)){
    if(symlink($target, $link)){
        echo 'link created';
    }else{
        echo 'cannot create link';
    }
}else{
    echo 'file path does not exist';
}
