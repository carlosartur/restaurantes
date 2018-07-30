
<section class="no-padding" id="portfolio">
    <div class="container-fluid">
        <div class="row no-gutter popup-gallery">
            @foreach ($combos as $combo)
                <div class="col-lg-4 col-sm-6">
                    <a href="{{ asset('images/' . $combo->foto) }}" class="portfolio-box">
                        <img style="max-width: 400px;" src="{{ asset('images/' . $combo->foto) }}" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    {{ $combo->name }}
                                </div>
                                <div class="project-name">
                                    {{ $combo->stringPrintValues() }}
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

<aside class="bg-dark">
    <div class="container text-center">
        <div class="call-to-action">
            <h2>{{ $cache->titulo_promocoes }}</h2>
            <a href="mailto:{{ $cache->email }}" class="btn btn-default btn-xl sr-button">{{ $cache->texto_botao_promocoes }}</a>
        </div>
    </div>
</aside>
