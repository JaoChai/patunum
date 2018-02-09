<?php

namespace App\Http\Controllers;

use App\Setting;
use Session;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('admin.setting.index')->with('settings', Setting::first());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        //

        //dd(request()->all());

        $this->validate($request,[
          'logo' => 'required|image',
          'sitetitle' => 'required',
          'meta_des' => 'required',
          'meta_key' => 'required',
          'chat' => 'required',
          'address' => 'required',
          'phone' => 'required|numeric',
          'email' => 'required|e-mail',
          'facebook' => 'required',
          'twitter' => 'required',
          'google' => 'required',
          'line' => 'required'


        ]);

        $logo = $request->logo;

        $logo_new_name = time().$logo->getClientOriginalName();

        $logo->move('uploads/setting', $logo_new_name);

        Setting::where('id', $setting->id)
                  ->update([

                    'logo' => 'uploads/setting'. $logo_new_name,
                    'sitetitle' => $request->input('sitetitle'),
                    'meta_des' => $request->input('meta_des'),
                    'meta_key' => $request->input('meta_key'),
                    'chat' => $request->input('chat'),
                    'address' => $request->input('address'),
                    'phone' => $request->input('phone'),
                    'email' => $request->input('email'),
                    'facebook' => $request->input('facebook'),
                    'twitter' => $request->input('twitter'),
                    'google' => $request->input('google'),
                    'line' => $request->input('line')

                  ]);

                  Session::flash('success', 'Setting updated successfully');

                  return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
