@extends('layout')



@section('content')
    <div id="wrapper">
        <div id="page" class="container">

            <div id="content">
                <div class="title">
                    <h2>Welcome to our website</h2>
                    <span class="byline">Mauris vulputate dolor sit amet nibh</span> </div>
                <p><img src="images/banner.jpg" alt="" class="image image-full" /> </p>


                <p style="margin: 1em">
                    @foreach($article->tags as $tag)
                        <a href="/articles?tag={{ $tag->name }}">{{ $tag->name }}</a>
                    @endforeach
                </p>

            </div>
        </div>
    </div>
@endsection
