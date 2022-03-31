<style>
    body {
    background-color: #000
}

.contact-clean {
    background: #000;
    padding: 80px 0
}

@media (max-width:767px) {
    .contact-clean {
        padding: 20px 0
    }
}

.contact-clean form {
    max-width: 480px;
    width: 90%;
    margin: 0 auto;
    background-color: #ffffff;
    padding: 40px;
    border-radius: 4px;
    color: #505e6c;
    box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1)
}

@media (max-width:767px) {
    .contact-clean form {
        padding: 30px
    }
}

.contact-clean h2 {
    margin-top: 5px;
    font-weight: bold;
    font-size: 28px;
    margin-bottom: 36px;
    color: inherit
}

.contact-clean .form-group:last-child {
    margin-bottom: 5px
}

.contact-clean form .form-control {
    background: #fff;
    border-radius: 2px;
    box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.05);
    outline: none;
    color: inherit;
    padding-left: 12px;
    height: 42px
}

.contact-clean form .form-control:focus {
    border: 1px solid #b2b2b2
}

.contact-clean form textarea.form-control {
    min-height: 100px;
    max-height: 260px;
    padding-top: 10px;
    resize: vertical;
    resize: none
}

.contact-clean form .btn {
    padding: 16px 32px;
    border: none;
    background: none;
    box-shadow: none;
    text-shadow: none;
    opacity: 0.9;
    text-transform: uppercase;
    font-weight: bold;
    font-size: 13px;
    letter-spacing: 0.4px;
    line-height: 1;
    outline: none !important
}

.contact-clean form .btn:hover {
    opacity: 1
}

.contact-clean form .btn:active {
    transform: translateY(1px)
}

.contact-clean form .btn-primary {
    background-color: #000000;
    margin-top: 15px;
    color: #fff
}
</style>

@extends('layouts.index')
@section('content')

<div class="contact-clean">
    <form action="{{ url('edit', $hotel->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h2 class="text-center">Edit Hotel Form</h2>
        <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="Input name in here..." value="{{$hotel->name}}">
        </div>
        <br>
        <div class="form-group">
            <input class="form-control" id="location" type="text" name="location" placeholder="Input location in here..." value="{{$hotel->location}}">
        </div>
        <br>
        <div class="form-group">
            <input class="form-control" id="price" type="text" name="price" placeholder="Input price/night in here..." value="{{$hotel->price}}">
        </div>
        <br>
        <div class="form-group">
            <input class="form-control" id="image" type="file" name="image" placeholder="Input image in here..." value="{{$hotel->image}}"> 
        </div>
        <br>
        <div class="form-group">
            <textarea class="form-control" name="facilitate" placeholder="Input facilitate in here..." rows="14">{{$hotel->facilitate}}</textarea>
        </div>
        <br>
        <div class="form-group">
            <textarea class="form-control" name="synopsis" placeholder="Input synopsis in here..." rows="14">{{$hotel->synopsis}}</textarea>
        </div>
        <br>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Send </button></div>
    </form>
</div>

@endsection