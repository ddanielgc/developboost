<!-- Header -->
<div id="header-wrapper">
    <div id="header">

        <!-- Logo -->
        <h1>
            <a href="/blog/home">{{ config('blog.name') }}</a>
        </h1>

        <!-- Nav -->
        <nav id="nav">
            <ul>
                <li>
                    <a href="/blog/home">Home</a>
                </li>

                <li>
                    <a href="/blog/posts">Postagens</a>
                </li>

                <li>
                    <a href="/contact">Contato</a>
                </li>
            </ul>
        </nav>

        @section('menu_add')

        @show

    </div>
</div>