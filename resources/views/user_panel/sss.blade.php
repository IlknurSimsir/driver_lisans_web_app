@include('layouts.head')
@extends('user_panel.part.tema')
@section('content')
    @include('user_panel.part.banner', [
        'dynamicBannerText' => 'SSS',
    ])
    <div class="container p-3">
        <div class="accordion" id="accordionExample">
            @foreach ($sss as $data)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne{{ $data->id }}">
                        <button class="accordion-button btnsss" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne{{ $data->id }}" aria-expanded="true"
                            aria-controls="collapseOne">
                            {{ $data->question }}
                        </button>
                    </h2>
                    <div id="collapseOne{{ $data->id }}" class="accordion-collapse collapse "
                        aria-labelledby="headingOne{{ $data->id }}" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            {!! $data->answer !!}
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
@endsection
