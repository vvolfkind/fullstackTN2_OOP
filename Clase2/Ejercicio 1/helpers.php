<?php

function dump($param)
{
    echo '<pre>';
    var_dump($param);
    echo '</pre>';
}

function dd($param)
{
    die(dump($param));
}
