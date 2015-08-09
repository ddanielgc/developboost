@extends('blog.layouts.site', [
  'title' => $post->title,
  'meta_description' => $post->meta_description ?: config('blog.description'),
])

@section('content')
    <body class="no-sidebar">
        <div id="page-wrapper">

            @include('blog.partials.menu')

            <!-- Main -->
            <div id="main-wrapper">
                <div class="container">

                    <!-- Content -->
                    <article class="box post">
                        <a href="#" class="image featured">
                            <img src="{{ page_image($post->page_image) }}" alt="" />
                        </a>


                        <header>
                            <h2>{{ $post->title }}</h2>
                            <h3>{{ $post->subtitle }}</h3>

                            <span>Postada em {{ $post->published_at->format('F j, Y') }}
                                @if ($post->tags->count())
                                    in
                                    {!! join(', ', $post->tagLinks()) !!}
                                @endif
                            </span>

                        </header>

                        <p>
                            <!--{!! nl2br(e($post->content)) !!}-->
                            {!! $post->content_html !!}
                        </p>



                    </article>

                    <!--<button class="btn btn-primary" onclick="history.go(-1)">
                        « Back
                    </button>
                    -->

                    {{-- The Pager --}}
                    <div class="container">
                        <div class="row">

                            <ul class="pager">

                                @if ($tag && $tag->reverse_direction)

                                    @if ($post->olderPost($tag))
                                        <li class="previous">
                                            <a class="button alt" href="{!! $post->olderPost($tag)->url($tag) !!}">
                                                <i class="fa fa-long-arrow-left fa-lg"></i>
                                                Previous {{ $tag->tag }} Post
                                            </a>
                                        </li>
                                    @endif

                                    @if ($post->newerPost($tag))
                                        <li class="next">
                                            <a class="button alt" href="{!! $post->newerPost($tag)->url($tag) !!}">
                                                Next {{ $tag->tag }} Post
                                                <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </li>
                                    @endif
                                @else

                                    @if ($post->newerPost($tag))
                                        <li class="previous">
                                            <a class="button alt" href="{!! $post->newerPost($tag)->url($tag) !!}">
                                                <i class="fa fa-long-arrow-left fa-lg"></i>
                                                Outra mais atual sobre {{ $tag ? $tag->tag : '' }}
                                            </a>
                                        </li>
                                    @endif

                                    <br />

                                    @if ($post->olderPost($tag))
                                        <li class="next">
                                            <a class="button alt" href="{!! $post->olderPost($tag)->url($tag) !!}">
                                               Outra mais antiga sobre {{ $tag ? $tag->tag : '' }}
                                                <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </li>
                                    @endif
                                @endif

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
@stop