<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{

    public function showUserName(){

        return 'ma7mod';
    }


    public function getIndex(){

       /* $obj = new \stdClass();

        $obj -> name = 'ahmed';
        $obj -> id = 5;
        $obj -> gender = 'male';*/

       $data=[];
    //    $data['id']=5;
    //    $data['name']='mahmood banat';

            return view (  view: 'welcome') ->with ('name' , 'mahmood banat');
        // return view('welcome',compact('data')) ;
    }
}
