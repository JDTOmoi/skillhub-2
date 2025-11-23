@extends('layout')

@section('content')
    @section('content')
    <div class="body px-4 mx-auto w-75 py-4 d-flex justify-content-center">
        <form method="POST" action="{{ route('UpdatePesertaPost') }}">
            @method('PUT')
            @csrf

            <div class="form-group my-4">
                <label for="nama">Nama Peserta</label><br/>
                <input type="text" id="nama" name="name" maxlength="40" value="{{$p->name}}" required>
            </div>

            <div class="form-group my-4">
                <label for="dob">Tanggal Lahir</label><br/>
                <input type="date" id="dob" name="dob" value="{{$p->dob}}" required>
            </div>

            <div class="form-group my-4">
                <label for="grade">Grade</label><br/>
                <input type="number" id="grade" name="grade" min="1" max="12" value="{{$p->grade}}" required>
            </div>

            <div class="form-group my-4">
                <label for="email">Email</label><br/>
                <input type="email" id="email" name="email" maxlength="191" value="{{$p->email}}" required>
            </div>

            <div class="form-group my-4">
                <label for="phone_number">Nomor Telepon</label><br/>
                <input type="text" id="phone_number" name="phone_number" maxlength="20" value="{{$p->phone_number}}" required>
            </div>

            <div class="form-group my-4">
                <label for="country_of_origin">Asal Negara</label><br/>
                @include('country_edit')
            </div>

            <div class="form-group my-4">
                <label for="school">Sekolah</label><br/>
                <input type="text" id="school" name="school" maxlength="64" value="{{$p->school}}" required>
            </div>

            <div class="form-group my-4">
                <label for="address">Alamat</label><br/>
                <textarea id="address" name="address" value="{{$p->address}}" required></textarea>
            </div>

            <br/>
            <input type="submit" value="Submit">
        </form>
    </div>
@endsection
@endsection