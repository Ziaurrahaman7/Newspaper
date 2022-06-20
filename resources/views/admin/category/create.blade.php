@extends('admin.master')
@section('content')
<x-form.form>
    <h3>Create category</h3>
        <form method="post" action="/admin/category" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <x-form.input name="title"/>
            <div  class="col-md-6  mt-3">
                <div class="form-group">
                <label class="mt-3" for="role">Status</label>
                 <select name="status" class="form-select">
                    <option value="1">Publish</option>
                    <option value="0">Unpublish</option>
                 </select>
                </div>
            </div>
        </div>
        <div class="mt-4 mb-0">
           <x-form.button>Submit</x-form.button>
        </div>
    </form>
</x-form.form>
@endsection