@extends('blog.layouts.site')

@section('content')

    <body class="no-sidebar">

        <div id="page-wrapper">

            @include('blog.partials.menu')

            <div id="main-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="12u">

                                @if(isset($tag->page_image))
                                    <a href="#" class="image featured">
                                        <img src="{{ page_image($tag->page_image) }}" alt="{{ $tag->name }}">
                                    </a>
                                @endif


                                <header class="major">
                                    <h2>Postagens</h2>
                                </header>

                                <?php $count = 1 ?>
                                <?php $max = count($posts) ?>

                                @foreach ($posts as $key => $post)

                                    @if($count == 1)
                                        <div class="row">
                                    @endif

                                        <div class="4u 12u(mobile)">
                                            <section class="box">

                                                <a href="{{ $post->url($tag) }}" class="image featured">
                                                    <img src="{{ page_image($post->page_image) }}" alt="{{ $post->title }}" />
                                                </a>

                                                <a href="{{ $post->url($tag) }}">
                                                    <header>
                                                        <h3>{{ $post->title }}</h3>

                                                        @if ($post->subtitle)
                                                            <p>{{ $post->subtitle }}</p>
                                                        @endif

                                                    </header>
                                                </a>

                                                <p>
                                                    Postado {{ $post->published_at->diffForHumans() }}
                                                    @if ($post->tags->count())
                                                        em
                                                        {!! join(', ', $post->tagLinks()) !!}
                                                    @endif
                                                </p>

                                                <footer>
                                                    <a href="{{ $post->url($tag) }}" class="button alt">Ver mais</a>
                                                </footer>

                                            </section>
                                        </div>

                                    @if($count == 3 or $key + 1 == $max)
                                        </div>
                                    @endif

                                <?php
                                        if($count == 3) {
                                            $count = 1;
                                        } else {
                                            $count++;
                                        }
                                 ?>

                                @endforeach
                        </div>
                    </div>
                </div>
            </div>

@stop