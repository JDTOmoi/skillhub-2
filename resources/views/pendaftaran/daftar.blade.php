@extends('layout')

@section('content')

<div class="d-flex justify-content-center py-4">
    <button type="button" id="toggler" class="btn btn-dark mx-2">
        Peserta
    </button> 

    <a href="{{route('RegisterPendaftaran')}}" class="mx-2">
        <button type="button" class="btn btn-dark">
            Register Peserta
        </button> 
    </a>
</div>

<div class="body px-4 mx-auto w-50">

    <table class="table" id="peserta">
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

    <table class="table d-none" id="kelas">
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

<script> //Hacky but it works.
    document.addEventListener('DOMContentLoaded', function() {
        const toggler = document.getElementById('toggler');
        const kelas = document.getElementById('kelas');
        const peserta = document.getElementById('peserta');

        toggler.addEventListener('click', function(e) {
            if (kelas.classList.contains('d-none')) {
                kelas.classList.remove('d-none');
                peserta.classList.add('d-none');
                toggler.textContent = "Kelas";
            } else {
                peserta.classList.remove('d-none');
                kelas.classList.add('d-none');
                toggler.textContent = "Peserta";
            }
        })
    });
</script>

@endsection