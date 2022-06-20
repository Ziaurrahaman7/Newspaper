@extends('admin.master')
@section('content')
<x-form.form>
    <h3>Create post</h3>
        <form method="post" action="/admin/post" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <x-form.input onload="convertToSlug(this.value)" onkeyup="convertToSlug(this.value)" name="title"/>
            <p id="slug-text" style="display:none;" class="text-danger"></p>
            <div class="col-md-6 mt-3">
            <label class="mt-3">Slug</label>
            <input class="form-control" id="inputslug" value="{{old('slug')}}" name="slug" type="text">
            @error('slug')
            <p style="color:red">{{$message}}</p>  
            @enderror
            </div>
            {{-- <x-form.input id="inputslug" name="slug"/> --}}
            <x-form.input type="file" name="feather_image"/>
            <x-form.input type="text" name="vedio"/>
            @error('slug')
            <p style="color:red">{{$message}}</p>  
            @enderror
            <x-form.textarea  name="description"/>
            <div class="col-md-6 mt-3">
                <label>Select Category</label>
            <select class="form-select" name="category_id">
                <option value="">Select</option>
           @foreach ($categories as $cat)
            <option value="{{$cat->id}}">{{$cat->title}}</option>
           @endforeach
        </select>
        @error('category_id')
        <p style="color:red">{{$message}}</p>  
        @enderror
        </div>
        <div class="col-md-6 mt-3">
                <label>Status</label>
                <select class="form-select" name="status">
                    <option value="1">Publish</option>
                    <option value="0">Un Publish</option>
                </select>
                @error('status')
                <p style="color:red">{{$message}}</p>  
                @enderror
        </div>
            <x-form.input name="seo_title"/>
            <x-form.input name="seo_keyword"/>
            <x-form.textarea  name="seo_description"/>
        </div>
        <div class="mt-4 mb-0">
           <x-form.button>Submit</x-form.button>
        </div>
    </form>
</x-form.form>

@endsection