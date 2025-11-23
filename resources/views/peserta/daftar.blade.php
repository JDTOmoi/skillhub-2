@extends('layout')

@section('content')

<div class="body px-4 mx-auto w-50">
    <div class="d-flex justify-content-center py-4">
        <a href="{{route('AddKelas')}}">
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
                    <a href="{{route('DetailKelas', ['kelas' => 1])}}"><button type="button" class="btn btn-primary">Detail</button></a>
                    <button type="button" class="btn btn-danger" onclick="getElementById('close-{{$_p->id}}').submit()">Hapus</button>
                    <form id="close-{{$_p->id}}" action="{{route('ConfirmDeleteKelas')}}"> 
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