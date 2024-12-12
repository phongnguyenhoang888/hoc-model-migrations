<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\support\Facades\DB;
use App\Models\cauthu; // phuong thuc goi model 



class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


}
