@extends('layout')

@section('content')
    <div class="body px-4 mx-auto w-75 py-4 d-flex justify-content-center">
        <form method="POST" action="{{route('RegisterPendaftaranPost')}}">
            @csrf
            <div class="form-group my-4">
                <label for="nama">Peserta</label><br/>
                <select class="form-select" id="nama" name="peserta" required>
                    @foreach($p as $_p)
                        <option value="{{$_p->id}}">{{$_p->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group my-4">
                <label for="instruktur">Kelas</label><br/>
                @foreach($k as $_k)
                    <input type="checkbox" name="kelas[]" id="kelas-{{$_k->id}}" value="{{$_k->id}}">
                    <label for="kelas-{{$_k->id}}">{{$_k->name}}</label><br>
                @endforeach
            </div>

            <br/>
            <input type="submit" value="Submit">
        </form>
    </div>
@endsection