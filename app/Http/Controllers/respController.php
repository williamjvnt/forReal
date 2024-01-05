<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\Resp;

class respController extends Controller
{
    // public function create(){
    //     return view('')
    // }

    public function store(Request $request)
    {
        $this->validate($request, ['respon' => 'required']);
        Resp::create([
            'email' => $request->title,
            'respon' => $request->respon
        ]);
        return view('about');
    }
}
