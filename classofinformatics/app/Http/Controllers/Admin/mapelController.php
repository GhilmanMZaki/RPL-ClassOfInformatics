<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mapel;
use App\Models\User;
class mapelController extends Controller
{
    public function createMapel(Request $request){
        $mahasiswa = User::where('name',$request->mahasiswa) -> first();
        $mentor = User::where('name',$request->mentor) -> first();
        $validation = $request->validate([
            'mapel'=>'required|string',
        ]);
        if ($mahasiswa != null and $mentor != null){
            $mapel = new Mapel;
            $mapel->mapel = $validation['mapel'];
            $mapel->mahasiswa = $request['mahasiswa'];
            $mapel->mentor = $request['mentor'];
            $mapel->save();
        }
        return redirect('/');
    }
}
