<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\User;
use App\Http\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class CategoryController extends BaseController
{
    public function __construct()
    {
        $this->model = Category::class;
        $this->prefix = "admin.category";
        $this->routePath="cate.index";
    }  

    public function dataForIndex(): array
    {
        return array(
            'publish'=> Category::get(),
            'publish_role'=> Category::where('publish_id', Auth::user()->id)->get()
        );
    }

    public function dataForCreate(): array
    {
        return array(
            'publish'=> User::where('role_id', 2)->pluck('name','id')
        );
    }

    public function dataForEdit($id): array
    {
        return array(
            'publish'=> User::where('role_id', 2)->pluck('name','id')
        );
    }

    
}
