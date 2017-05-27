@extends('layouts.app')

@section('content')
<!-- jumbotron -->
    <div class="jumbotron">
        <div class="container text-center">
            <h2>Our App</h2>
            <p>Welcome Please Pick An Option Below</p>

            <div class="btn-group">
                <a href="\office" class="btn btn-lg btn-warning">View Offices</a>
                <a href="\equipment\new" class="btn btn-lg btn-default">Create Equipment</a>
                <a href="\add\office" class="btn btn-lg btn-warning">Add Office</a>
            </div>
        </div><!-- End Container -->
    </div><!-- End jumbotron -->
@endsection
