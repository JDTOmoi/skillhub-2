@extends('layout')

@section('content')

<div class="body px-4 mx-auto w-50">
    <div class="d-flex justify-content-center py-4">
        <a href="{{route('AddPeserta')}}">
            <button type="button" class="btn btn-dark">
                Tambah Peserta
            </button> 
        </a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($p as $_p)
            <tr>
                <th scope="row">{{$_p->id}}</th>
                <td>{{$_p->name}}</td>
                <td>
                    <a href="{{route('DetailPeserta', ['peserta' => $_p->id])}}"><button type="button" class="btn btn-primary">Detail</button></a>
                    <button type="button" class="btn btn-danger" onclick="getElementById('close-{{$_p->id}}').submit()">Hapus</button>
                    <form id="close-{{$_p->id}}" action="{{route('ConfirmDeletePeserta')}}"> 
                        @csrf
                        <input type="hidden" name="peserta" value="{{$_p->id}}">
                    </form>
                </td>   
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection