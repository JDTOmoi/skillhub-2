@extends('layout')

@section('content')
    @section('content')
    <div class="body px-4 mx-auto w-75 py-4 d-flex justify-content-center">
        <form method="POST" action="{{ route('AddPesertaPost') }}">
            @csrf

            <div class="form-group my-4">
                <label for="nama">Nama Peserta</label><br/>
                <input type="text" id="nama" name="name" maxlength="40" required>
            </div>

            <div class="form-group my-4">
                <label for="dob">Tanggal Lahir</label><br/>
                <input type="date" id="dob" name="dob" required>
            </div>

            <div class="form-group my-4">
                <label for="grade">Grade</label><br/>
                <input type="number" id="grade" name="grade" min="1" max="12" required>
            </div>

            <div class="form-group my-4">
                <label for="email">Email</label><br/>
                <input type="email" id="email" name="email" maxlength="191" required>
            </div>

            <div class="form-group my-4">
                <label for="phone_number">Nomor Telepon</label><br/>
                <input type="text" id="phone_number" name="phone_number" maxlength="20" required>
            </div>

            <div class="form-group my-4">
                <label for="country_of_origin">Asal Negara</label><br/>
                @include('country')
            </div>

            <div class="form-group my-4">
                <label for="school">Sekolah</label><br/>
                <input type="text" id="school" name="school" maxlength="64" required>
            </div>

            <div class="form-group my-4">
                <label for="address">Alamat</label><br/>
                <textarea id="address" name="address" required></textarea>
            </div>

            <br/>
            <input type="submit" value="Submit">
        </form>
    </div>
@endsection
@endsection