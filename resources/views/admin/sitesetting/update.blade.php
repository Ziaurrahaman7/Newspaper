@extends('admin.master')
@section('content')
<x-form.form>
    <h3>Create sitesetting</h3>
        <form method="post" action="/admin/sitesetting" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <x-form.input name="title" :value="old('title',$sitesetting->title)"/>
            <x-form.input name="logo" type="file" :value="old('logo',$sitesetting->logo)"/>
            <img style="width:80px; height:80px" src="{{asset($sitesetting->logo)}}">
            <x-form.input name="favicon" type="file" :value="old('favicon',$sitesetting->favicon)"/>
            <img style="width:80px; height:80px" src="{{asset($sitesetting->favicon)}}">
            <x-form.input name="phone" :value="old('phone',$sitesetting->phone)"/>
            <x-form.input name="email"  :value="old('email',$sitesetting->email)"/>
            <x-form.input name="address"  :value="old('address',$sitesetting->address)"/>
            <x-form.input type="url" name="facebook"   :value="old('facebook',$sitesetting->facebook)"/>
            <x-form.input type="url" name="twitter"   :value="old('twitter',$sitesetting->twitter)"/>
            <x-form.input type="url" name="youtube"   :value="old('youtube',$sitesetting->youtube)"/>
            <x-form.input type="url" name="linkdin"   :value="old('linkdin',$sitesetting->linkdin)"/>
            <x-form.input type="url" name="instagram"   :value="old('instagram',$sitesetting->instagram)"/>
            <x-form.input  name="whatsapp"   :value="old('whatsapp',$sitesetting->whatsapp)"/>
            <x-form.textarea  name="map">{{old('map',$sitesetting->map)}}</x-form.textarea>
            <x-form.input   name="copyright"   :value="old('copyright',$sitesetting->copyright)"/>
            <x-form.input   name="seo_title"   :value="old('seo_title',$sitesetting->seo_title)"/>
            <x-form.input   name="seo_keyword"   :value="old('seo_keyword',$sitesetting->seo_keyword)"/>
            <x-form.textarea  name="seo_content">{{old('seo_content',$sitesetting->seo_content)}}</x-form.textarea>
        </div>
        <div class="mt-4 mb-0">
           <x-form.button>Submit</x-form.button>
        </div>
    </form>
</x-form.form>
@endsection