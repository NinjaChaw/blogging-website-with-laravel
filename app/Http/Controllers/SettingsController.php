<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index() {

        $setting = Setting::first();

        return view('admin.settings.settings', compact('setting'));
    }

    public function update() {

        $this->validate(\request(), [
            'site_name' => 'required',
            'contact_number' => 'required',
            'contact_email' => 'required|email',
            'address' => 'required'
        ]);

        $setting = Setting::first();

        $setting->site_name = request()->site_name;

        $setting->contact_number = request()->contact_number;

        $setting->contact_email = request()->contact_email;

        $setting->address = request()->address;

        $setting->save();

        Session::flash('success', 'Settings updated');

        return redirect()->back();
    }
}
