<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Http\Models\Category;
use App\Http\Models\Script;
use App\Http\Models\Slider;
use App\Http\Models\CategoryPublisher;
use App\Http\Models\Other;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use App\Http\Models\Segment;
use Mail;
use Cookie;
use App\Http\Models\Keyword;

class HomeController extends Controller
{
    public function index(){
        $script = Script::where('user_id', Auth::user()->id)->get();
        return view('client.naskah', compact('script'));
    }

    public function landing(){
        $data['slider'] = Slider::orderBy('id', 'DESC')->get();
        return view('client.landing',compact('data'));
    }

    public function tambahNaskah(){
        $cate = User::where('role_id', 2)->get();
        return view('client.tambahNaskah', compact('cate'));
    }

    public function category(Request $r){
        $cate = Category::where('publish_id', $r->id)->get();
        return $cate;
    }
    
    public function store(Request $r){
        // dd($r->file('pdf'));
        $script = new Script();
        $script->user_id = Auth::user()->id;
        $script->judul = $r->judul;
        $script->sinosis = $r->sinopsis;
        $script->pengarang = Auth::user()->name;
        $script->selling = $r->selling;
        if($r->hasFile('pdf')){
            $file = $r->file('pdf')->store('naskah', 'public');
            $script->pdf = $file;
        } 
        $script->save();

        $pengarang = $r->pengarang_lain;
        if(!empty($pengarang)){
            foreach($pengarang as $p){
                $other = new Other();
                $other->naskah_id = $script->id;
                $other->nama = $p;
                $other->save();
            }
        }
        

        $category = $r->category_id;

        foreach ($category as $v) {
           $singleCategory = category::where('id', $v)->first();
           
           $pubCategroy = new CategoryPublisher();
           $pubCategroy->naskah_id = $script->id;
           $pubCategroy->category_id = $v;
           $pubCategroy->publisher = $singleCategory->publish->name;
           $pubCategroy->name = $singleCategory->name;
           $pubCategroy->save();
        }

        $seg = $r->segment;
        foreach ($seg as $v) {
            $segmented = new Segment();
            $segmented->naskah_id = $script->id;
            $segmented->name = $v;
            $segmented->save();
        }

        $tag = explode(",",$r->tags);
        foreach ($tag as $v) {
            $segmented = new Keyword();
            $segmented->naskah_id = $script->id;
            $segmented->name = $v;
            $segmented->save();
        }

        return redirect()->route('homes.index')->with('status', 'Naskah Berhasil Dikirim');
    }

    public function captcha(){
        return response()->json(['captcha'=>captcha_img()]);
    }

    public function sendReset(Request $r){
        $mail = $r->email;
        $user = User::where('email', $mail)->first();
        if(!isset($user)){
            return back()->with('error', 'User Tidak terdaftar');
        }
        $minutes = 30;
        $token = Crypt::encryptString($mail);
        Cookie::queue("tokens_mizan", json_encode($token), $minutes);
        Mail::send('client.resetEmail', ['dataMail' => $token], function ($message) use($mail) {
            $message->subject('Reset Email Mizan');
            $message->from('info@mizanpublishing.com', 'Mizan Admin');
            $message->to($mail);
        });
        return back()->with('status', 'Silahkan Check Email Anda');
    }

    public function ressetPas($token){
        $test = Crypt::decryptString($token);
        return view('client.resetPage', compact('test'));
    }

    public function resetMail($mail, Request $r){
        $validated = $r->validate([
            'password' => 'required|confirmed',
        ]);
        $user = User::where('email', $mail)->first();
        $user->password = bcrypt($r->password);
        $user->save();

        \Cookie::queue(Cookie::forget('tokens_mizan'));
        return redirect()->route('login')->with('success', 'Password Berhasil Di perbarui');
    }
}


