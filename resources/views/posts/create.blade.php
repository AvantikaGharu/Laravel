@extends('layouts.app')

  

@section('content')

<div class="container">

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

            <h2><u><strong>Add New Post</h2></u></strong>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-right">

            <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>

        </div>

    </div>

</div>

   

@if ($errors->any())

    <div class="alert alert-danger">

        <strong>There were some problems with your input.</strong> 

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

   

<form action="{{ route('posts.store') }}" method="POST">

    @csrf

  
<div class="container">

     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Title</strong>

                <input type="text" name="title" class="form-control" placeholder="Post title here">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Description:</strong>

                <textarea class="form-control" style="height:150px" name="description" placeholder="Post description"></textarea>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

        </div>


    </div>

   </div>

</form>

</div>
@endsection
