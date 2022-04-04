@extends('layouts.app')

@section('layouts.header')
    @include('layouts.header')
@endsection

@section('content')

    <body id="body-main">
        {{-- Short description of the reason and purpose of creation application --}}
        <p id="box-1">
            To meet today's troubled times, when the price of gasoline is influenced by many, rapidly changing factors, this
            simple application calculate the price of gasoline that will appear at gas stations.
        </p>

        {{-- Three buttons redirecting to pages with the calculation of prices of petrol, oil and LPG --}}
        <div id="fuel-links">
            <a class="link-1" href="/petrol/create" role="button"><span class="text">Petrol</span></a>
            <a class="link-1" href="/diesel" role="button"><span class="text">Diesel</span></a>
            <a class="link-2" href="/lpg" role="button"><span class="text">LPG</span></a>
        </div>
    </body>
@endsection