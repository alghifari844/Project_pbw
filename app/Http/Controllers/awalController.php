<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class awalController extends Controller
{
    public function awal(){
        return view('awal');
    }
}