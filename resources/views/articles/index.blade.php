@extends('layout')



@section('content')
    <div id="wrapper">
        <div id="page" class="container">

            @forelse($articles as $article)
            <div id="content">
                <div class="title">

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

                </div>


                @empty
                    <p>No relevent article yet.</p>
                @endforelse
            </div>
        </div>
@endsection
