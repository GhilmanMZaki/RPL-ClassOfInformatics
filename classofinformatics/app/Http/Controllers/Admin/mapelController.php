<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mapel;
class mapelController extends Controller
{
    public function createMapel(Request $request){
        $validation = $request->validate([
            'mapel'=>'required|string',
            'mahasiswa'=>'required',
            'mentor'=>'required',
        ]);
        Mapel::create($validation);
        return redirect('/');
    }
}
