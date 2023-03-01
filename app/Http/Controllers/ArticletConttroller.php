<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticletConttroller extends Controller
{
    public function article($id){
        return 'Article dengan id ' . $id;
    }
}
