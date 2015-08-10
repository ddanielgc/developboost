 <!-- Footer -->
    <div id="footer-wrapper">
        <section id="footer" class="container">
            <div class="row">
                <div class="8u 12u(mobile)">
                    <section>
                        <header>
                            <h2>Mais Postagens</h2>
                        </header>

                        <ul class="dates">

                            @foreach($posts as $key => $post)
                                @if($key >= 6)
                                    @break
                                @endif

                                <li>
                                    <a href="{{ $post->url($tag) }}">
                                        <span class="date">{{ $post->published_at->format('M') }} <strong>{{ $post->published_at->format('jS') }}</strong>
                                        </span>
                                    </a>

                                    <h3>
                                        <a href="{{ $post->url($tag) }}">
                                            {{ $post->title }}
                                        </a>
                                    </h3>


                                        @if ($post->subtitle)
                                            <a href="{{ $post->url($tag) }}">
                                                <p>{{ $post->subtitle }}</p>
                                            </a>
                                        @endif
                                </li>

                            @endforeach
                        </ul>

                        <footer>
                            <a href="/blog/posts" class="button">Ver Todas</a>
                        </footer>

                    </section>
                </div>

                <div class="4u 12u(mobile)">
                    <section>

                        <header>
                            <h2>Qual a nossa motivação ?</h2>
                        </header>

                        <a href="#" class="image featured">
                            <img src="/images/cut_draw.jpg" alt="Develop Boost" />
                        </a>

                        <p>
                            Esse é o <strong>{{ config('blog.title') }}</strong> {{ config('blog.subtitle') }}
                        </p>

                        <footer>
                            <a href="#" class="button">Saiba Mais</a>
                        </footer>
                    </section>
                </div>
            </div>

            <div class="row">
                <div class="4u 12u(mobile)">
                    <section>

                        <header>
                            <h2>Tags</h2>
                        </header>

                        <ul class="divided">

                            @foreach($tags as $key => $tag)
                                <li>
                                    <i class="fa fa-tag" style="float: left; margin:5px;"></i>

                                    <a href="posts?tag={{ urlencode($tag->tag) }}">
                                        <h4>{{ $tag->title }}</h4>

                                        <h5>{{ $tag->subtitle }}</h5>
                                    </a>
                                </li>
                            @endforeach

                        </ul>

                    </section>
                </div>


                <div class="4u 12u(mobile)">
                    <!--
                    <section>

                        <header>
                            <h2>Ipsum et phasellus</h2>
                        </header>

                        <ul class="divided">
                            <li><a href="#">Lorem ipsum dolor sit amet sit veroeros</a></li>
                            <li><a href="#">Sed et blandit consequat sed tlorem blandit</a></li>
                            <li><a href="#">Adipiscing feugiat phasellus sed tempus</a></li>
                            <li><a href="#">Hendrerit tortor vitae mattis tempor sapien</a></li>
                            <li><a href="#">Sem feugiat sapien id suscipit magna felis nec</a></li>
                            <li><a href="#">Elit class aptent taciti sociosqu ad litora</a></li>
                        </ul>

                    </section>
                    -->
                </div>

                <div class="4u 12u(mobile)">

                    <section>
                        <header>
                            <h2>Links Sociais</h2>
                        </header>

                        <ul class="social">
                            <li><a class="icon fa-facebook" href="{{ config('blog.link_facebook') }}"><span class="label">Facebook</span></a></li>
                            <li><a class="icon fa-twitter" href="{{ config('blog.link_twitter') }}"><span class="label">Twitter</span></a></li>
                            <li><a class="icon fa-github" href="{{ config('blog.link_github') }}"><span class="label">BitBucket</span></a></li>
                            <li><a class="icon fa-linkedin" href="{{ config('blog.link_linkedin') }}"><span class="label">LinkedIn</span></a></li>
                            <li><a class="icon fa-rss" href="{{ url('rss') }}"><span class="label">RSS</span></a></li>
                        </ul>

                        <ul class="contact">

                            <li>
                                <h3>Endereço</h3>

                                <p>
                                    Rio De Janeiro<br/>
                                </p>
                            </li>

                            <li>
                                <h3>E-Mail</h3>
                                <p><a href="#">{{ config('blog.email') }}</a></p>
                            </li>

                        </ul>
                    </section>
                </div>
            </div>


            <div class="row">
                <div class="12u">

                    <!-- Copyright -->
                    <div id="copyright">
                        <ul class="links">
                            <li>&copy; Develop Boost. 2015 - Todos os direitos reservados.</li><li>Autor: {{ config('blog.author') }}</li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>
    </div>

</div>