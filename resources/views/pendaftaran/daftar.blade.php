@extends('layout')

@section('content')

<div class="d-flex justify-content-center py-4">
    <a href="{{route('RegisterPendaftaran')}}">
        <button type="button" class="btn btn-dark">
            Register Peserta
        </button> 
    </a>
</div>

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
            @foreach ($p as $_p)
            <tr>
                <th scope="row">{{$_p->id}}</th>
                <td>{{$_p->name}}</td>
                <td>
                    <a href="{{route('PesertaPendaftaran', ['peserta' => $_p->id])}}"><button type="button" class="btn btn-primary">Detail</button></a>
                </td>   
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

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
            @foreach ($k as $_k)
            <tr>
                <th scope="row">{{$_k->id}}</th>
                <td>{{$_k->name}}</td>
                <td>
                    <a href="{{route('KelasPendaftaran', ['kelas' => $_k->id])}}"><button type="button" class="btn btn-primary">Detail</button></a>
                </td>   
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection