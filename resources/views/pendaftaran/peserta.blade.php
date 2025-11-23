@extends('layout')

@section('content')

<div class="body px-4 mx-auto w-50">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pnd as $_pnd)
            <tr>
                <th scope="row">{{$_pnd->kelas->id}}</th>
                <td>{{$_pnd->kelas->name}}</td>   
                <td>
                    <button type="button" class="btn btn-danger" onclick="getElementById('close-{{$_pnd->id}}').submit()">Hapus</button>
                    <form id="close-{{$_pnd->id}}" action="{{route('ConfirmDeletePendaftaran')}}"> 
                        @csrf
                        <input type="hidden" name="pendaftaran" value="{{$_pnd->id}}">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection