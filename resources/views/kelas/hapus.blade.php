@extends('layout')

@section('content')
    <div class="body px-4 mx-auto w-25 py-4 d-flex flex-column justify-content-center">
        <p>
            Apakah yakin mau hapus data {{$k->name}}?
        </p>

        <div class="d-flex flex-row justify-content-end">
            <a href="{{route('MenuKelas')}}">
                <button type="button" class="btn btn-light mx-4">Batal</button>
            </a>

            <button type="button" class="btn btn-danger" onclick="getElementById('hapus').submit()">Hapus</button>

            <form id="hapus" method="POST" action="{{route('HapusKelas')}}">
                @method('DELETE')
                @csrf
                <input type="hidden" name="kelas" value="{{$k->id}}">
            </form>
        </div>
    </div>
@endsection