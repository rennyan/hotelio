@extends('layouts.index')

@section('content')
<div class="col-xl-6 col-lg-8">
    <div class="col">
        <table class="table table-borderless">
            <td style="width: 90%"></td>
            <td>
            <td style="width: 5%"><a href="/edit/{{ $hotel->id }}" class="btn"><button>Edit</button></a></td>
            <td style="width: 5%">
                <form method="POST" action="{{ url('detail', $hotel->id ) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn">Delete</button>
                </form>
            </td>
        </table>
    </div>
    <div class="container">
        <div class="row align-items-center position-relative">
            <div class="col-xl-3 col-lg-4">
                <div class="hotel-details-img">
                    <img src="{{ asset('image/cover/'. $hotel->image )}}" alt="">
                </div>
            </div>
                <div class="hotel-details-content">
                    <h2><span>{{ $hotel->name}}</span></h2>
                    <div class="col bg-dark">
                        <br>
                    <div class="banner-meta">
                        <ul>
                            <li class="quality">
                                <span>{{ $hotel->location}}</span>
                            </li>
                            <li class="category">{{ $hotel->price}}</li>
                        </ul>
                    </div>
                    <br>
                    <p>{{ $hotel->facilitate}}</p>
                    <p>{{ $hotel->synopsis}}</p>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection