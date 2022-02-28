<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Http\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends BaseController
{
    public function __construct()
    {
        $this->model = Setting::class;
        $this->prefix = "admin.setting";
        $this->routePath="setting.index";
    }

    public function storee(Request $request)
    {
        // dd($request->all());
        if($request->has('logo')){
            $image = $request->file('logo');
            $im = $image->store('setting', 'public');

            Setting::updateOrCreate([
                'code'=>'logo'
            ],['value'=>$im]);
        }
        if($request->has('wa1')){
            Setting::updateOrCreate([
                'code'=>'wa1'
            ],['value'=>$request->wa1]);
        }
        if($request->has('wa2')){
            Setting::updateOrCreate([
                'code'=>'wa2'
            ],['value'=>$request->wa2]);
        }

        // foreach ($request->settings as $key=>$value){
        //     Setting::updateOrCreate([
        //         'code'=>$key
        //     ],['value'=>$value]);
        // }
        return redirect()->route($this->routePath)->with('message', 'Success input.');
    }
}
