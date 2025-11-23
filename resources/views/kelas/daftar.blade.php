@extends('layout')

@section('content')

<div class="body px-4 mx-auto w-50">
    <div class="d-flex justify-content-center py-4">
        <a href="{{route('AddKelas')}}">
            <button type="button" class="btn btn-dark">
                Tambah Kelas
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
            @foreach ($k as $_k)
            <tr>
                <th scope="row">{{$_k->id}}</th>
                <td>{{$_k->name}}</td>
                <td>
                    <a href="{{route('DetailKelas', ['kelas' => $_k->id])}}"><button type="button" class="btn btn-primary">Detail</button></a>
                    <button type="button" class="btn btn-danger" onclick="getElementById('close-{{$_k->id}}').submit()">Hapus</button>
                    <form id="close-{{$_k->id}}" action="{{route('ConfirmDeleteKelas')}}"> 
                        @csrf
                        <input type="hidden" name="kelas" value="{{$_k->id}}">
                    </form>
                </td>   
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection