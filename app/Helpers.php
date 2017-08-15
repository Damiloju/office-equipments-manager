<?php

function currency()
{
    return '&#8358;';
}

function currencyFormatter($value) {
	return '&#8358;'. number_format($value);
}

function flash($title = null, $message = null)
{
    $flash = app('App\Http\Flash');

    if(func_num_args() == 0){
        return $flash;
    }

    return $flash->info($title, $message);
}