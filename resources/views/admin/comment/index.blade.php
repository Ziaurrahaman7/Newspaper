@extends('admin.master')
@section('content')
<x-table link="/admin/comment"  name="Add post" title="Comment">
    @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif
<thead>
    <tr>
        <th>Comment</th>
        <th>User</th>
        <th>Post title</th>
        <th>Category</th>
        <th>Approved</th>
    </tr>
</thead>
<tbody>
    @foreach ($comments as  $comment)
        <tr>
            <td>{{ucwords($comment->comment)}}</td>
            <td>{{$comment->user->name }}</td>
            <td>{{$comment->post->title }}</td>
            <td>{{$comment->category->title }}</td>
            <td>@if ($comment->approved==0)
                <form method="POST" action="/admin/comment/{{$comment->id}}/edit/">
                    @csrf
                    <input type="hidden" value="1" name="approved">
                    <button type="submit" class="btn-danger btn ">Not Aprroved</button>
                </form>
              @else 
                <p style="color:green">Approved</p>
              @endif</td>
            {{-- <td> <a href="/admin/post/{{$post->id}}/edit/" target="_blank" rel="noopener noreferrer">Edit</a> | 
                
                <form action="/admin/post/{{$post->id}}" method="post">
                @csrf
                @method('delete')
                <button> Delete</button>
            </form> 
                </td> --}}
        </tr>
        @endforeach
</tbody>
</x-table>
@endsection