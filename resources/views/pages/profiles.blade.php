@extends('layouts.app')

    @section('content')

        <h1>{{$title}}</h1>
        @if(count($profiles) > 0)
            <ul class = "list-group">
                @foreach ($profiles as $image)
                    <li class="list-group-item">
    <img class="rounded-circle" width="150" src="{{ url('/img/jeremy lin.jpg') }}">    
        <input id="name" type="name" class="name"> 
        
       

                </li>
                @endforeach   
            </ul>
        @endif
    @endsection

