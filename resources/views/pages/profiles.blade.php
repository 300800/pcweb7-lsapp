@extends('layouts.app')

    @section('content')

        <h1>{{$title}}</h1>
        @if(count($profiles) > 0)
            <ul class = "list-group">
                @foreach ($profiles as $image)
                    <li class="list-group-item">{{$image}}</li>   

    <div class="form-group row">
        <label for="name" class="col-md-6 col-form-label>{{ __('Name') }}</label>
    <div class="col-md-20">
        <input id="name" type="name" class="name">

                @endforeach   
            </ul>
        @endif
    @endsection

