

@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <h2><u><strong>Show Post</h2></u></strong>

            </div>

           <div class="col-xs-12 col-sm-12 col-md-12 text-right">

            <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>

        </div>

        </div>

    </div>
</div>
   
<div class= "container">

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Title:</strong>

                {{ $post->title }}

            </div>

        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Author:</strong>

                {{ $post->user->name }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Description:</strong>

                {{ $post->description }}

            </div>

        </div>

    </div>
</div>
@endsection