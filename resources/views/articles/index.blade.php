@extends('layout')



@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                @foreach($articles as $article)
                    <h3 class="heading has-text-weight-bold is-size-4">
                        <a href="/articles/{{ $article->id }}">{{ $article->title }}</a>
                    </h3>

                    <p>
                        <img
                            src="/images/banner.jpg"
                            alt=""
                            class="image image-full"
                        />
                    </p>







                    <p>{{ $article->excerpt }}</p>
                @endforeach
            </div>
        </div>
    </div>
@endsection
