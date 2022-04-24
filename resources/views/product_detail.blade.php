@extends('layouts.main')

@section('content')
    {{-- Start List --}}
    <div class="rounded-3">
        <div class="container pb-5">
            <h2 class="text-center pb-3 under-line">360 Virtual Tour {{ $region }}</h2>
            <div class="row">
                @foreach ($product_list as $item)
                    <div class="col-lg-4 py-1 service">
                        <a href="{{ $item->link }}">
                            <img src="{{ asset('assets/files/pictures/SEMARANG.jpg') }}" class="rounded h-100 w-100 service-image" alt="...">
                            <div class="service-caption">
                                <div class="caption-text">
                                    <h2>{{ $item->name }}</h2>
                                    <h4>Virtual Tour 360</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{-- End List --}}

    {{-- Start Modal --}}

    {{-- End Modal --}}
@endsection
