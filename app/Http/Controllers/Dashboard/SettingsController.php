<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function editshipping($type){
        if($type=='free')
        {
          $data =  Setting::where('key' , 'free_shipping_label')->first();
        }
        elseif ($type=='inner') {
            $data =  Setting::where('key' , 'local_label')->first();
        }
        else {
            $data =  Setting::where('key' , 'outer_label')->first();
        }

        return view('dashboard.settings.shippings.edit',compact('data'));

    }
    public function updateshipping(Request $request,$id){


    }
}
