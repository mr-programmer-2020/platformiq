@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>

                <div class="card-body">


                    @if(count($errors)>0)
                    <ul class="navbar-nav mr-auto">

                        @foreach ($errors->all() as $error)
                        <li class="nav-item active">
                            {{$error}}
                        </li>
                        @endforeach

                    </ul>
                    @endif

                    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="category_id">Category</label>
                            <select class="form-control" name="category_id" id="category">

                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="form-check">
                                @foreach ($tags as $tag) 
                                    <input class="form-check-input" type="checkbox" name="tags[]" value="{{$tag->id}}" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">{{$tag->tag}}</label>
                                    <br> 
                                @endforeach 
                        </div>

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter title">
                        </div>

                        <div class="form-group">
                            <label for="content">Description</label>
                            <textarea class="form-control" name="content" rows="8"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="featured">Photo</label>
                            <input type="file" class="form-control-file" name="featrued">
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection