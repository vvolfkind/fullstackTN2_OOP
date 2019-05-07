<?php

function dd($pollo)
{
    echo '<pre>';
    die(var_dump($pollo));
}

function flashMessage($message)
{
    echo '<span>' . $message . '</span>';
}
