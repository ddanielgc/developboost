@extends('blog.layouts.site', [
  'title' => $post->title,
  'meta_description' => $post->meta_description ?: config('blog.description'),
])

@section('content')
    <body class="no-sidebar">
        <div id="page-wrapper">

            @include('blog.includes.menu')

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

                            <span>Posted on {{ $post->published_at->format('F j, Y') }}
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


                       <!--
                        <section>
                            <header>
                                <h3>Something else</h3>
                            </header>
                            <p>
                                Elementum odio duis semper risus et lectus commodo fringilla. Maecenas sagittis convallis justo vel mattis.
                                placerat, nunc diam iaculis massa, et aliquet nibh leo non nisl vitae porta lobortis, enim neque fringilla nunc,
                                eget faucibus lacus sem quis nunc suspendisse nec lectus sit amet augue rutrum vulputate ut ut mi. Aenean
                                elementum, mi sit amet porttitor lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor
                                sit amet nullam consequat feugiat dolore tempus.
                                Elementum odio duis semper risus et lectus commodo fringilla. Maecenas sagittis convallis justo vel mattis.
                                placerat, nunc diam iaculis massa, et aliquet nibh leo non nisl vitae porta lobortis, enim neque fringilla nunc,
                                eget faucibus lacus sem quis nunc suspendisse nec lectus sit amet augue rutrum vulputate ut ut mi. Aenean
                                elementum, mi sit amet porttitor lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor.
                            </p>
                            <p>
                                Nunc diam iaculis massa, et aliquet nibh leo non nisl vitae porta lobortis, enim neque fringilla nunc,
                                eget faucibus lacus sem quis nunc suspendisse nec lectus sit amet augue rutrum vulputate ut ut mi. Aenean
                                elementum, mi sit amet porttitor lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor
                                sit amet nullam consequat feugiat dolore tempus.
                            </p>
                        </section>

                        <section>
                            <header>
                                <h3>So in conclusion ...</h3>
                            </header>
                            <p>
                                Nunc diam iaculis massa, et aliquet nibh leo non nisl vitae porta lobortis, enim neque fringilla nunc,
                                eget faucibus lacus sem quis nunc suspendisse nec lectus sit amet augue rutrum vulputate ut ut mi. Aenean
                                elementum, mi sit amet porttitor lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor
                                sit amet nullam consequat feugiat dolore tempus. Elementum odio duis semper risus et lectus commodo fringilla.
                                Maecenas sagittis convallis justo vel mattis.
                            </p>
                        </section>
                        -->

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
                                            <a href="{!! $post->olderPost($tag)->url($tag) !!}">
                                                <i class="fa fa-long-arrow-left fa-lg"></i>
                                                Previous {{ $tag->tag }} Post
                                            </a>
                                        </li>
                                    @endif
                                    @if ($post->newerPost($tag))
                                        <li class="next">
                                            <a href="{!! $post->newerPost($tag)->url($tag) !!}">
                                                Next {{ $tag->tag }} Post
                                                <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </li>
                                    @endif
                                @else
                                    @if ($post->newerPost($tag))
                                        <li class="previous">
                                            <a href="{!! $post->newerPost($tag)->url($tag) !!}">
                                                <i class="fa fa-long-arrow-left fa-lg"></i>
                                                Next Newer {{ $tag ? $tag->tag : '' }} Post
                                            </a>
                                        </li>
                                    @endif
                                    @if ($post->olderPost($tag))
                                        <li class="next">
                                            <a href="{!! $post->olderPost($tag)->url($tag) !!}">
                                                Next Older {{ $tag ? $tag->tag : '' }} Post
                                                <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </li>
                                    @endif
                                @endif
                            </ul>
                        </div>

                    </div>
@stop