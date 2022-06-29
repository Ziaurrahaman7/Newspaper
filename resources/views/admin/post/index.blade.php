@extends('admin.master')
@section('content')
<x-table link="/admin/post/create" name="Add post" title="Post">
    @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif
<thead>
    <tr>
        <th>Title</th>
        <th>Short Description</th>
        <th>Repoter/user</th>
        <th>Status</th>
        <th>Category</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    @foreach ($posts as  $post)
        <tr>
            <td><strong>{{ucwords(Str::limit($post->title,40,'...'))}}</strong></td>
            <td>{{Str::limit($post->description,70,'...') }}</td>
            <td>{{$post->user_id }}</td>
            <td>{{$post->status }}</td>
            <td>{{$post->category_id }}</td>
            <td> <a href="/admin/post/{{$post->id}}/edit/" target="_blank" rel="noopener noreferrer">Edit</a> | 
                
                <form action="/admin/post/{{$post->id}}" method="post">
                @csrf
                @method('delete')
                <button> Delete</button>
            </form> 
                </td>
        </tr>
        @endforeach
</tbody>
</x-table>
@endsection