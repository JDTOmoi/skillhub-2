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
            @foreach ($p as $_p)
            <tr>
                <th scope="row">{{$_p->id}}</th>
                <td>{{$_p->name}}</td>   
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection