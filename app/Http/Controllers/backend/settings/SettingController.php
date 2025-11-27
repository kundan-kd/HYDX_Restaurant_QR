<?php

namespace App\Http\Controllers\backend\settings;

use App\Http\Controllers\Controller;
use App\Models\HotlrConfiguration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class SettingController extends Controller
{
    public function setting(){
        $hotlr = HotlrConfiguration::get();
        $prefix = $hotlr[0]->invoice_prefix;
        $suffix_length = $hotlr[0]->suffix_length;
        return view('backend.modules.settings.setting',compact('prefix','suffix_length','hotlr'));
    }

    public function store(Request $request){
        // dd($request->all());
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'name' => ['required'],
                'gst' => ['required'],
            ]);

            if ($validator->fails()) {
                return response()->json(['error_validation' => $validator->errors()->all()], 200);
            }
        }
        $update = HotlrConfiguration::where('id',1)->update([
            'name' => $request->name,
            'address' => $request->address,
            'state' => $request->state,
            'pincode' => $request->zipcode,
            'gst' => $request->gst,
            'mobile' => $request->contact,
            'email' => $request->email,
            'country' => $request->country,
            'website' => $request->website,
            'city' => $request->city,
        ]);

        $imagedata = $request->file('logo');
        if ($imagedata) {
            $imageName = time() . '.' . $imagedata->getClientOriginalExtension();
            $destinationPath = public_path('/backend/');
            $imagedata->move($destinationPath, $imageName);

            $update = HotlrConfiguration::where('id',1)->update([
                'logo' => $imageName,
            ]);
        }
        if($update){
            return response()->json(['success' => 'Data Updated Successfully'],200);
        }else{
            return response()->json(['success' => 'Data not updated']);
        }
    }

    public function storeEInvoice(Request $request){

        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'einvoice_url' => ['required'],
                'einvoice_email' => ['required'],
                'einvoice_username' => ['required'],
                'einvoice_ipaddress' => ['required'],
                'einvoice_clientid' => ['required'],
                'einvoice_clientsecret' => ['required'],
                'einvoice_gst' => ['required'],
            ]);

            if ($validator->fails()) {
                return response()->json(['error_validation' => $validator->errors()->all()], 200);
            }
        }
        
        $update = HotlrConfiguration::where('id',1)->update([
            'einvoice_url' => $request->einvoice_url,
            'einvoice_email' => $request->einvoice_email,
            'einvoice_username' => $request->einvoice_username,
            'einvoice_password' => $request->einvoice_password,
            'einvoice_ipaddress' => $request->einvoice_ipaddress,
            'einvoice_clientid' => $request->einvoice_clientid,
            'einvoice_clientsecret' => $request->einvoice_clientsecret,
            'einvoice_gst' => $request->einvoice_gst,
        ]);
        if($update){
            return response()->json(['success' => 'Data Updated Successfully'],200);
        }else{
            return response()->json(['success' => 'Data not updated']);
        }
    }
}
