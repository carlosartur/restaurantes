<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Cardápio</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @if(count($flavour_retrieve) == 0)
                <div class="alert alert-info" role="alert">Nenhum sabor encontrado com a sua pesquisa.</div>
            @else
                <div class="bs-example">
                    <div class="panel-group" id="accordion">
                        @foreach ($flavour_retrieve as $key => $category)
                            @php
                                $id = str_replace(' ', '_', $key);
                            @endphp
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="acordeon_title" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $id }}">
                                            {{ $key }}
                                            <span class="glyphicon glyphicon-chevron-down"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div>
                                    <div id="collapse{{ $id }}" class="panel-collapse collapse">
                                        <div class="panel-body">
                                        @foreach ($category as $flavour)
                                            <p style="float: left;">{{ $flavour->name }}</p>
                                            @if ($flavour->new_value)
                                                <p style="float: right;">{{ "Promoção! De R$"
                                                    . number_format($flavour->old_value, 2, ',', '.')
                                                    . " por apenas R$ "
                                                    . number_format($flavour->new_value, 2, ',', '.') }}</p>
                                            @else
                                                <p style="float: right;">R$ {{ number_format($flavour->old_value, 2, ',', '.') }}</p>
                                            @endif
                                            <p style="clear: both;"></p>
                                            <hr>
                                        @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
