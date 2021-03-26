    @extends('layouts.app')

    @section('content')
        
        <div class="jumbotron text-center">
        <a class="btn btn-primary btn-lg" href="/about" role="button">About</a>        
        <a class="btn btn-primary btn-lg" href="/services" role="button">Servives</a>
        <a class="btn btn-primary btn-lg" href="/profiles" role="button">Profiles</a>
        <a class="btn btn-primary btn-lg" href="contact" role="button">Contact Us</a>
        <br>
        <h1>Welcome to Graces Manpower Agency!</h1>

        <h2><p>Your one-stop portal for your domestic needs!</p></h2>
        <h3><p>Why Graces?</p></h3>
        <h4><p>Graces Manpower Agency has been in operation since 1994.  We provide domestic helpers from the Philippines who are adaptable, hardworking and reliable. 
        Over the years there are many satisfied customers whose helpers went on, some to achieve awards, letters of commendations, 
        and moved on to work in other countries.  Login to view the helpers of your choice.</p></h4>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a><p> 
        </div>
    @endsection