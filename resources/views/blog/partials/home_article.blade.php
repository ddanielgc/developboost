<div class="6u 12u(mobile)">

    <section class="box">

        <a href="#" class="image featured">
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
            Posted on {{ $post->published_at->format('F j, Y') }}
            @if ($post->tags->count())
                in
                {!! join(', ', $post->tagLinks()) !!}
            @endif
        </p>

        <footer>
            <ul class="actions">
                <li><a href="#" class="button icon fa-file-text">Continue Lendo</a></li>
                <li><a href="#" class="button alt icon fa-comment">33 comments</a></li>
            </ul>
        </footer>

    </section>
</div>