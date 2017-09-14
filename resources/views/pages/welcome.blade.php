@extends('main')

@section('title', '| Homepage')

@section('content')
            <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron">
                        <h1>Hello, world!</h1>
                        <p class="lead">Thank you so much for writing. This is my test website built with Laravel. Please read my popular post! </p>
                        <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
                    </div>
                </div>
            </div> <!-- end of header .row -->

            <div class="row">
                <div class="col-md-8">
                    <div class="post">
                        <h3>Post Title</h3>
                        <p>Laravel is a powerful MVC PHP framework, designed for developers who need a simple and elegant toolkit to create full-featured web applications. Laravel was created by Taylor Otwell.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>

                    <hr>

                    <div class="post">
                        <h3>Post Title</h3>
                        <p>Laravel is a powerful MVC PHP framework, designed for developers who need a simple and elegant toolkit to create full-featured web applications. Laravel was created by Taylor Otwell.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>

                    <hr>

                    <div class="post">
                        <h3>Post Title</h3>
                        <p>Laravel is a powerful MVC PHP framework, designed for developers who need a simple and elegant toolkit to create full-featured web applications. Laravel was created by Taylor Otwell.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>

                    <hr>

                    <div class="post">
                        <h3>Post Title</h3>
                        <p>Laravel is a powerful MVC PHP framework, designed for developers who need a simple and elegant toolkit to create full-featured web applications. Laravel was created by Taylor Otwell.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>

                    <hr>

                </div>
                <div class="col-md-3 col-md-offset-1">
                    <h2>Sidebar</h2>
                </div>
            </div>
@endsection


