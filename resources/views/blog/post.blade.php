@extends('blog.layouts.site')

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
                            <img src="/images/pic01.jpg" alt="" />
                        </a>

                        <header>
                            <h2>{{ $post->title }}</h2>
                            <p>{{ $post->published_at->format('M jS Y g:ia') }}</p>
                        </header>

                        <p>
                            {!! nl2br(e($post->content)) !!}
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

                    <button class="btn btn-primary" onclick="history.go(-1)">
                        « Back
                    </button>

                </div>
            </div>

@stop