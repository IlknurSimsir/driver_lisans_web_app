@extends('user_panel.part.tema')
@section('content')
    @include('user_panel.part.banner', [
        'dynamicBannerText' => 'Güzergahlar',
    ])
    <div class="container">
        @foreach ($routes as $route)
            <div class="routeCard">
                <div class="row">
                    <div class="col-lg-3 col-sm-12">
                        <img src="img\mainPage.png" alt=""class="p-1 routeImg">
                    </div>
                    <div class="col-lg-9 col-sm-12">
                        <h6>{{ $route->title }}</h6>
                        <p>{!! $route->content !!}
                        </p>

                        <div class=" row">
                            @if ($route->videoUrl != '')
                                <div class="col-1 col-md-1 borderTop halfCircle bg-danger">
                                    <a href="{{ $route->videoUrl }}"><i class="fas fa-play"></i></a>
                                </div>
                            @endif
                            <div class="col-1 col-md-1 borderTop halfCircle bg-success">
                                <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($route->mapUrl) }}"
                                    target="_blank"><i class="fas fa-globe"></i></a>
                            </div>

                            <div class="col-1 col-md-1 borderTop halfCircle bg-warning">
                                <a href="/vehicles"><i class="fas fa-car"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
