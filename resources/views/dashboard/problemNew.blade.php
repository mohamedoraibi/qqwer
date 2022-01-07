@extends('layouts.master')


@section('content')
    <div class="card card-full">
        <div class="card-body">
            <h4 class="card-title">{{$Translates->where('key', '=', 'add_new_problem')->pluck(app()->getLocale())->first()}}</h4>
            <p class="card-description">
                {{$Translates->where('key', '=', 'addNewProblem_please_fill_the_following_details')->pluck(app()->getLocale())->first()}}

            </p>
            @if($errors->count()>0)
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="material-icons">close</i>
                    </button>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
            @endif
            <form class="forms-sample" action="/{{app()->getLocale()}}/problem/add/save" method="POST" enctype="multipart/form-data">

                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">{{$Translates->where('key', '=', 'addNewProblem_problem_title')->pluck(app()->getLocale())->first()}}</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="{{$Translates->where('key', '=', 'addNewProblem_problem_title_placeholder')->pluck(app()->getLocale())->first()}}">
                </div>
                <div class="form-group">
                    <label for="description">{{$Translates->where('key', '=', 'addNewProblem_description')->pluck(app()->getLocale())->first()}}</label>
                    <input type="text" class="form-control" name="description" id="description"
                           placeholder="{{$Translates->where('key', '=', 'addNewProblem_problem_description_placeholder')->pluck(app()->getLocale())->first()}}">
                </div>
                <div class="form-group">
                    <label for="gov_id">{{$Translates->where('key', '=', 'addNewProblem_governorate')->pluck(app()->getLocale())->first()}}</label>
                    <input type="text" class="form-control" name="gov_id" id="gov_id" placeholder="">
                </div>
                <div class="form-group">
                    <label for="dist_id">{{$Translates->where('key', '=', 'addNewProblem_district')->pluck(app()->getLocale())->first()}}</label>
                    <input type="text" class="form-control" name="dist_id" id="dist_id" placeholder="">
                </div>
                <div class="form-group">
                    <label for="image1">{{$Translates->where('key', '=', 'addNewProblem_image')->pluck(app()->getLocale())->first()}}</label>
                    <input type="file" class="form-control" name="image1" id="image1" >
                </div>


                <button type="submit" class="btn btn-primary mr-2">{{$Translates->where('key', '=', 'submit')->pluck(app()->getLocale())->first()}}</button>
                <button class="btn btn-light">{{$Translates->where('key', '=', 'cancel')->pluck(app()->getLocale())->first()}}</button>
            </form>
        </div>
    </div>

@endsection
