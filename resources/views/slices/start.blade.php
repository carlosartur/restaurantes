<header style="background-image: url('{{ asset('images/header.jpg') }}');">
    <div class="header-content">
        <div class="header-content-inner">
            <h1 id="homeHeading" style="color:#222222 !important;">{{ $cache->titulo_principal }}</h1>
            <hr>
            <p style="color:#222222 !important;">{{ $cache->descricao }}</p>
            <a href="#about" class="btn btn-primary btn-xl page-scroll">{{ $cache->texto_botao }}</a>
        </div>
    </div>
</header>
