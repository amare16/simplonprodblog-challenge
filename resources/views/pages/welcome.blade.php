@extends('main')

@section('title', '| Homepage')

@section('content')
            <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron">
                        <h1>Qui est Victor Hugo?</h1>
                        <p class="lead">Ce blog vous raconte les plus grands et les plus connus écrivains français, Victor Hugo. Ici vous pouvez trouver différents articles sur lui. </p>

                    </div>
                </div>
            </div> <!-- end of header .row -->

            <div class="row" id="row-home">
                <div class="col-md-12">

                    @foreach($posts as $post)

                    <div class="post">
                        <h3>{{ $post->title }}</h3>
                        <p>{{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 300 ? "..." : "" }}</p>
                        <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a><br>
                        <p>Posted In: {{ $post->created_at }}</p>
                    </div>

                    <hr>

                    @endforeach

                    <br><br>

                </div>
            </div>
@endsection


