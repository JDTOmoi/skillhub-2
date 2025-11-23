@extends('layout')

@section('content')
    <div class="body px-4 mx-auto w-25 py-4 d-flex flex-column justify-content-center">
        <p>
            Apakah yakin mau hapus data {{$p->name}}?
        </p>

        <div class="d-flex flex-row justify-content-end">
            <a href="{{route('MenuPeserta')}}">
                <button type="button" class="btn btn-light mx-4">Batal</button>
            </a>

            <button type="button" class="btn btn-danger" onclick="getElementById('hapus').submit()">Hapus</button>

            <form id="hapus" method="POST" action="{{route('HapusPeserta')}}">
                @method('DELETE')
                @csrf
                <input type="hidden" name="peserta" value="{{$p->id}}">
            </form>
        </div>
    </div>
@endsection