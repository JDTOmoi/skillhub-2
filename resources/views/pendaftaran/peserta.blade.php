@extends('layout')

@section('content')

<div class="body px-4 mx-auto w-50">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pnd as $_pnd)
            <tr>
                <th scope="row">{{$_pnd->kelas->id}}</th>
                <td>{{$_pnd->kelas->name}}</td>   
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection