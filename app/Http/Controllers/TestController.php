<?php namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller {

	public function getLogin()
    {
        $data = [
            'email' => 'fernandof1987@gmail.com',
            'password' => 123456
        ];

        //if(Auth::attempt($data)) {
        //    return 'logou';
        //}

       // if(Auth::check()) {
        //    return "logado";
       // }

        dd(Auth::user());

        return 'falhou';
    }


}
