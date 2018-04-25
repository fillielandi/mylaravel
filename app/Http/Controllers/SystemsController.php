<?php

namespace App\Http\Controllers;

use App\System;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SystemsController extends Controller
{
    
    public function edit($id){
        //return($id);
       $system = System::find($id);
       return view('systems.edit')->with('system', $system);
       //return "system";
    }

    public function update(Request $request){
        //dd($request->all());

        $system = System::find($request['id']);
        $system->name = $request['name'];
        $system->imageFileName = $request['imageFileName'];
        $system->updated_at = Carbon::now()->toDateTimeString();
        $system->save();
        $system = System::find($request['id']);
        return view('systems.edit')->with('system', $system);

    }

    
    public function destroy($id){
        System::destroy($id);
        
        $systems = System::all();
        return view('home', compact('systems'));
    }
    

}
