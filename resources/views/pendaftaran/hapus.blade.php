@extends('layout')

@section('content')
    <div class="body px-4 mx-auto w-25 py-4 d-flex flex-column justify-content-center">
        <p>
            Apakah yakin mau membatalkan pendaftaran tersebut?
        </p>

        <div class="d-flex flex-row justify-content-end">
            <a href="{{route('MenuPendaftaran')}}">
                <button type="button" class="btn btn-light mx-4">Batal</button>
            </a>

            <button type="button" class="btn btn-danger" onclick="getElementById('hapus').submit()">Hapus</button>

            <form id="hapus" method="POST" action="{{route('HapusPendaftaran')}}">
                @method('DELETE')
                @csrf
                <input type="hidden" name="pendaftaran" value="{{$pnd->id}}">
            </form>
        </div>
    </div>
@endsection