@extends('layouts.index')

@section('content')
<!-- top-rated-hotel -->
<div class="top-rated-hotel tr-hotel-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center mb-50">
                    <h2 class="title">Choose Your Hotel</h2>
                </div>
            </div>
        </div>
        <button><a href="add">Add Hotels</a></button>
        <div class="row justify-content-start">
                @foreach ($data as $hotel)
                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer">
                <div class="hotel-item mb-60">
                    <div class="hotel-poster">
                        <a href="detail/{{ $hotel->id }}"><img src="{{ asset('/image/cover/'.$hotel->image) }}" alt=""></a>
                    </div>
                    <div class="hotel-content">
                        <div class="top">
                            <h5 class="title"><a href="detail/{{ $hotel->id }}">{{ $hotel->name }}</a></h5>
                            <span class="date">{{ $hotel->location }}</span>
                        </div> 
                    </div>
                </div>
                </div>
                @endforeach
            </div>
    </div>
</div>
<!-- top-rated-hotel-end -->
@endsection