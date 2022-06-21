<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sitesettings = SiteSetting::all();
        return view('admin.sitesetting.index', compact('sitesettings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sitesetting = SiteSetting::first();
        if(isset($sitesetting)){
            return view('admin.sitesetting.update', compact('sitesetting'));
        }
        return view('admin.sitesetting.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, SiteSetting $sitesetting)
    {
        $sitesetting = request()->validate([
            'title'=>'string|nullable',
            'logo'=>'image|nullable',
            'favicon'=>'image|nullable',
            'phone'=>'required|min:11|max:11',
            'email'=>'required|email',
            'address'=>'required',
            'facebook'=>'required',
            'twitter'=>'string|nullable',
            'youtube'=>'string|nullable',
            'linkdin'=>'string|nullable',
            'instagram'=>'string|nullable',
            'whatsapp'=>'string|nullable',
            'map'=>'string|nullable',
            'copyright'=>'string|nullable',
            'seo_title'=>'string|nullable',
            'seo_keyword'=>'string|nullable',
            'seo_content'=>'string|nullable',
        ]);
    //   dd($sitesetting);
        $id = Sitesetting::pluck('id')->first();
        if(isset($sitesetting['logo'])){
            $file = $request->file('logo');
            $name = $file->hashName();
            request()->file('logo')->store('public/uploads');
            $sitesetting['logo'] = $name;
           }
        if(isset($sitesetting['favicon'])){
            $file = $request->file('favicon');
            $name = $file->hashName();
            request()->file('favicon')->store('public/uploads');
            $sitesetting['favicon'] = $name;
        }
        Sitesetting::updateOrCreate(['id'=>$id], $sitesetting);
        return redirect('admin/sitesetting')->with('success', 'Successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
