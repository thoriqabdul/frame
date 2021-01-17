<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Http\Models\CategoryPublisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NaskahController extends BaseController
{
    public function __construct()
    {
        $this->model = CategoryPublisher::class;
        $this->prefix = "admin.naskah";
        $this->routePath="nas.index";
    }  

    public function dataForIndex(): array
    {
        return array(
            'publish'=> CategoryPublisher::where('status', 0)->get(),
            'publish_role'=> CategoryPublisher::where('status', 0)->whereHas('category',function($q){
                $q->where('publish_id', Auth::user()->id);
            })->get()
        );
    }
    // public function index(){
    //     $naskah = CategoryPublisher::where('status', 0)->get();
    //     return view('admin.naskah.index',compact('naskah'));
    // }
}
