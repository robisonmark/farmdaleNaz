<?php

function render($template, $data = array())
{
    $path = './views' . $template . '.php';
    if (file_exists($path))
    {
        // extract($data);
        require_once($path);
    }
//    echo $path;
}
 

?>