@extends('admin.master')
@section('content')
<x-form.form>
    <h3>Create sitesetting</h3>
        <form method="post" action="/admin/sitesetting" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">		  
            <x-form.input  name="title"/>
            <x-form.input type="file" name="logo"/>
            <x-form.input type="file" name="favicon"/>
            <x-form.input name="phone"/>
            <x-form.input name="email"/>
            <x-form.input name="address"/>
            <x-form.input type="url" name="facebook"/>
            <x-form.input type="url" name="twitter"/>
            <x-form.input type="url" name="youtube"/>
            <x-form.input type="url" name="linkdin"/>
            <x-form.input type="url" name="instagram"/>
            <x-form.input  name="whatsapp"/>
            <x-form.textarea  name="map"/>
            <x-form.input   name="copyright"/>
            <x-form.input  name="seo_title"/>
            <x-form.input  name="seo_keyword"/>
            <x-form.textarea  name="seo_content"/>
        </div>
        <div class="mt-4 mb-0">
           <x-form.button>Submit</x-form.button>
        </div>
    </form>
</x-form.form>
@endsection