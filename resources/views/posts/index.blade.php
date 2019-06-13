@extends('layouts.app')

 

@section('content')

<div class="container">

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <h2><u><strong>USER BLOG</h2></u></strong>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-left">

                <a class="btn btn-success" href="{{ route('posts.create') }}"> Create New Post</a>

            </div>

        </div>

    </div>

   

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

   

    <table class="table table-bordered">

        <tr>

            <th>No.</th> 

            <th>Author Name</th> 
            
            <th>Title</th>

            <th>Description</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($posts as $post)

        <tr>

             <td>{{ ++$i }}</td> 

             <td>{{ $post->user->name }}</td>

            <td>{{ $post->title }}</td>

            <td>{{ $post->description }}</td>
             



            <td>

                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('posts.show',$post->id) }}">Show</a>

    

                    <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

</div>  

    {!! $posts->links() !!}

      

@endsection




