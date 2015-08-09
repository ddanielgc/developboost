@extends('blog.layouts.site')

@section('content')
    <body class="homepage">
    <div id="page-wrapper">

        <!-- Header -->
        @section('menu_add')
            <!-- Banner -->
            <section id="banner">
                <header>
                    <h2>{{ config('blog.main_title') }}</h2>
                    <p>{{ config('blog.main_subtitle') }}</p>
                </header>
            </section>

        @overwrite


        @include('blog.partials.menu')


        <!-- Main -->
        <div id="main-wrapper">
            <div class="container">

                <div class="row">
                    <div class="12u">

                        <!-- Blog -->
                        <section>

                            <header class="major">
                                <h2>The Blog</h2>
                            </header>

                            <div class="row">
                                @foreach ($posts as $key => $post)

                                    @if ($key >= 2)
                                        @break
                                    @endif

                                    @include('blog.partials.home_article')

                                @endforeach
                            </div>

                        </section>

                    </div>
                </div>

            </div>
        </div>
@stop