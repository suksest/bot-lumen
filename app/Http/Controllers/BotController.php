<?php

namespace App\Http\Controllers;

class BotController extends Controller
{
    /**
     * Main Bot Controller.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function hello()
    {
        $res = array(
            'code' => 200,
            'message' => "hello world from bot controller"
        );

        return response($res);
    }

}
