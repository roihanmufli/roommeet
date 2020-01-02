@extends('layouts.master')

@section('sidebar')

@endsection

@section('content')
<div class="container">
    <h1 class="text-center">Form Peminjaman</h1>
    @if ($message = Session::get('failed') )
        <div class="alert alert-danger">
            <p>{{ $message}}</p>
        </div>
    @endif
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message}}</p>
        </div>

    @endif
    <form method="post" action="{{url('formpeminjaman')}}">
        {{ csrf_field() }}
        <div class="form-group w-50">
            <label for="nim">NIM</label>
            <input type="text" name="nim_nrp" class="form-control" id="nim" value="{{ Auth::user()->nim_nrp }}" disabled>
        </div>
        <div class="form-group w-50">
            <input type="hidden" name="user_id" class="form-control" id="id" value="{{ Auth::user()->id }}">
        </div>
        <div class="form-group w-50">
            <label for="name">Nama</label>
            <input type="text" name="nama"class="form-control" id="name" value="{{ Auth::user()->name }}" disabled>
        </div>
        <div class="form-group w-50">
            <label for="choose">Pilih Ruangan</label>
            <select id="choose" name="id_room" class="form-control">
                <option value="">Pilih Ruangan...</option>
                @foreach ($rooms as $room)
                <option value="{{$room->id_room}}">{{$room->kode_ruangan}}({{$room->lokasi}})</option>
                @endforeach
            </select>
        </div>
        <div class="form-group w-50">
            <label for="tanggal">Tanggal Peminjaman</label>
            <input class="form-control" type="date" id="tanggal" name="tgl_pinjam">
        </div>
        <div class="form-group w-50">
            <label for="jam_awal">Waktu Mulai</label>
            <input class="form-control" type="time" id="jam_awal" name="jam_awal">
        </div>
        <div class="form-group w-50">
            <label for="jam_akhir">Waktu Berakhir</label>
            <input class="form-control" type="time" id="jam_akhir" name="jam_akhir">
        </div>
        <div class="form-group w-50">
            <label for="alasan">Tujuan Peminjaman</label>
            <input type="text" name="alasan" class="form-control" id="alasan" >
        </div>
        <div class="form-group w-50">
            <input type="hidden" name="created_at" class="form-control" value="{{now()}}">
        </div>
        <div class="form-group w-50">
            <input type="hidden" name="updated_at" class="form-control" value="{{now()}}">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
