<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AfrimetaController extends Controller
{
   public function index ()
   {
       return User::all();
   }
}
