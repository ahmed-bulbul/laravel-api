<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    function list($id=null){
        return $id?Device::find($id):Device::all();
    }

    function add(Request $request){
        $device = new Device();
        $device->name=$request->name;
        $device->model=$request->model;
        $result = $device->save();
        if($result){
            return ["Result"=>"Data as been Saved"];
        }else{
            return ["Result"=>"Operation failed"]; 
        }
        
    }
}
 