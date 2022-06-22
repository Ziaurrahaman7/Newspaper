@extends('admin.master')
@section('content')
<x-form.form>
    <h3>Edit post</h3>
        <form method="post" action="/admin/post/{{$post->id}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="row mb-3">
            <x-form.input  onload="convertToSlug(this.value)" onchange="convertToSlug(this.value)" onkeyup="convertToSlug(this.value)" name="title" :value="old('title',$post->title)"/>
                <p id="slug-text" style="display:none;" class="text-danger"></p>
                <div class="col-md-6 mt-3">
                    <label class="mt-3">Slug</label>
                    <input class="form-control" id="inputslug" value="{{old('slug', $post->slug)}}" name="slug" type="text">
                    @error('slug')
                    <p style="color:red">{{$message}}</p>  
                    @enderror
                    </div>
                <x-form.input type="file" name="feather_image"  :value="old('feather_image',$post->feather_image)"/>
                <img style="width:80px; height:80px" src="{{asset('storage/uploads/'.$post->feather_image)}}">
                <x-form.input name="vedio"  :value="old('vedio',$post->vedio)"/>
                <x-form.textarea  name="description">{{old('description',$post->description)}}</x-form.textarea> 
            <div class="col-md-6  mt-3">
                <div class="form-group">
                    <label for="role">Select Category</label>
                    <select name="category_id" class="form-select">
                    <option value="">Select</option>
                @foreach ($categories as $cat)
                    <option value="{{$cat->id}}" {{old($cat->id, $cat->id)==$post->category_id ? 'selected':''}}>{{$cat->title}}</option>
                @endforeach
                </select>
                @error('category_id')
                <p style="color:red">{{$message}}</p>  
                @enderror
                </div>
            </div>  
            <div class="col-md-6  mt-3">
                <div class="form-group">
                 <label class="mt-3" for="role">Status</label>
                 <select name="status" class="form-select">
                   <option value="1" {{old(1, $post->status)==1 ? 'selected':''}}>Published</option>
                   <option value="0" {{old(0, $post->status)==0 ? 'selected':''}}>Un-published</option>
                </select>
                </div>
            </div>
            <x-form.input name="seo_title" :value="old('seo_title',$post->seo_title)"/>
            <x-form.input name="seo_keyword" :value="old('seo_keyword',$post->seo_keyword)"/>
            <x-form.textarea  name="seo_description">{{old('seo_description',$post->seo_description)}}</x-form.textarea>
        <div class="mt-4 mb-0">
            <x-form.button>Update</x-form.button>
        </div>
    </form>
</x-form.form>
@endsection