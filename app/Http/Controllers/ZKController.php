<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Rats\Zkteco\Lib\Zkteco;


class ZKController extends Controller
{

    public function index(){

        $zk = new ZKTeco('192.168.1.44',4370);
        $zk->connect();   
        // $zk->disableDevice();
        $users = $zk->getUser();
        $time = $zk->getTime(); 
        $version = $zk->version(); 
        return view('zkteco',compact('users','time','version'));

    }

}

?>