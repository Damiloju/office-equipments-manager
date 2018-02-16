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

function apiSuccess(string $msg, $data, array $meta=[], bool $sendUserInfo = true)
{

    $responder = config('app.apiResponse');
    $responder['status'] = 0;
    $responder['message'] = $msg;
    $responder['data'] = $data;

    return response()->json( $responder );
}

/**
 * A blueprint of a failed ajax request
 * @param $msg
 * @param $data
 * @param int $code
 * @return \Illuminate\Http\JsonResponse
 */
function apiFailure(string $msg, $data, int $code = 2)
{
    /**
     * 4 => validation error
     * 2 => internal error
     * -2 => unauthorized for action
     */
    $responder = config('app.apiResponse');
    $responder['status'] =  $code;
    $responder['message'] = $msg;
    $responder['data'] = $data;

    return response()->json($responder);
}