@extends('blog.layouts.site', ['meta_description' => 'Contact Form'])

@section('content')
    <body class="no-sidebar">
    <div id="page-wrapper">

        @include('blog.partials.menu')

                <!-- Main -->
        <div id="main-wrapper">
            <div class="container">

                @include('admin.partials.errors')
                @include('admin.partials.success')

                <!-- Content -->
                <div style="margin-left: 30%;">


                    <header>
                        <h2>Contate-me</h2>
                        <h3>Sugestões e Perguntas ?</h3>
                    </header>

                    <form action="/contact" method="post">

                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                        <div class="row">
                            <div style="width:60%">
                                <label for="name">Nome</label>
                                <input type="text" id="name" name="name"
                                       value="{{ old('name') }}">
                            </div>
                        </div>

                        <div class="row">
                            <div style="width:60%">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="row">
                            <div style="width:60%">
                                <label for="phone">Número de telefone</label>
                                <input type="tel" id="phone" name="phone"
                                       value="{{ old('phone') }}">
                            </div>
                        </div>

                        <div class="row">
                            <div style="width:60%">
                                <label for="message">Mensagem</label>
                                <textarea rows="5" id="message" name="message">{{ old('message') }}</textarea>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div style="width:60%">
                                <button type="submit" class="btn btn-default">Send</button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>
        </div>
@stop