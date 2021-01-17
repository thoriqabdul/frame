<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Models\CategoryPublisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        return view('admin.landing');
    }

    public function terima(){
        if(Auth::user()->role_id == 1){
            $terima = CategoryPublisher::where('status', 1)->get();
        }else{
            $terima = CategoryPublisher::where('status', 1)->whereHas('category',function($q){
                $q->where('publish_id', Auth::user()->id);
            })->get();
        }
        return view('admin.terima.index',compact('terima'));
    }

    public function tolak(){
        if(Auth::user()->role_id == 1){
            $tolak = CategoryPublisher::where('status', 2)->get();
        }else{
            $tolak = CategoryPublisher::where('status', 2)->whereHas('category',function($q){
                $q->where('publish_id', Auth::user()->id);
            })->get();
        }
        return view('admin.tolak.index',compact('tolak'));
    }
}
