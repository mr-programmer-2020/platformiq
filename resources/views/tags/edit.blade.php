@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            

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

                    <form action="{{ route('tag.update',['id' =>$tag->id])  }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                        <label >tag</label>

                                @foreach ($tag as $tg)
                                  
                                @endforeach
                            
                        </div>

                        <div class="form-group">
                            <label for="title">Tag</label>
                        <input type="text" class="form-control" name="tag" value="{{$tg->tag}}">
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection