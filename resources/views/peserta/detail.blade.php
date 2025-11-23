@extends('layout')

@section('content')

<div class="body px-4 mx-auto w-50">
    <div class="d-flex justify-content-center py-4">
        <button type="button" class="btn btn-dark" onclick="getElementById('update').submit()">
            Update Peserta
        </button> 
        <form id="update" action="{{ route('UpdatePeserta') }}">
            @csrf
            <input type="hidden" name="peserta" value="{{ $p->id }}">
        </form>
    </div>

    <div class="my-4">
        <h4>Nama Peserta</h4>
        <p>{{ $p->name }}</p>
    </div>

    <div class="my-4">
        <h4>Tanggal Lahir</h4>
        <p>{{ $p->dob }}</p>
    </div>

    <div class="my-4">
        <h4>Grade</h4>
        <p>{{ $p->grade }}</p>
    </div>

    <div class="my-4">
        <h4>Email</h4>
        <p>{{ $p->email }}</p>
    </div>

    <div class="my-4">
        <h4>Nomor Telepon</h4>
        <p>{{ $p->phone_number }}</p>
    </div>

    <div class="my-4">
        <h4>Asal Negara</h4>
        <p>{{ $p->country_of_origin }}</p>
    </div>

    <div class="my-4">
        <h4>Sekolah</h4>
        <p>{{ $p->school }}</p>
    </div>

    <div class="my-4">
        <h4>Alamat</h4>
        <p>{{ $p->address }}</p>
    </div>

</div>

@endsection