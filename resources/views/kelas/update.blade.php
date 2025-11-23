@extends('layout')

@section('content')
    <div class="body px-4 mx-auto w-75 py-4 d-flex justify-content-center">
        <form method="POST" action="{{route('UpdateKelasPost')}}">
            @method('PUT')
            @csrf

            <input type="hidden" name="kelas" value="{{$k->id}}">

            <div class="form-group my-4">
                <label for="nama">Nama Kelas</label><br/>
                <input type="text" id="nama" name="name" value="{{$k->name}}" required>
            </div>

            <div class="form-group my-4">
                <label for="instruktur">Nama Instruktur</label><br/>
                <input type="text" id="instruktur" name="instructor" value="{{$k->instructor}}" required>
            </div>

            <div class="form-group my-4">
                <label for="deskripsi">Deskripsi Singkat</label><br/>
                <textarea id="deskripsi" name="description" row="5" required>{{$k->description}}</textarea>
            </div>
            <br/>
            <input type="submit" value="Submit">
        </form>
    </div>
@endsection