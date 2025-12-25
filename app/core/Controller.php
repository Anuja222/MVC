<?php

trait Controller
{
    public function view($name) //loads a view file. Act as a bridge between controller -> view
    {
        $filename = "../app/views/".$name.".view.php";
        if(file_exists($filename))
            {
                require $filename;
            }else
            {
                $filename = "../app/views/404.view.php";
                require $filename;
            }
    }
}