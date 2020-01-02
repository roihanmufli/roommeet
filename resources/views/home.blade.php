@extends('layouts.master')

@section('sidebar')

@endsection

@section('content')
<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No Peminjaman</th>
                <th>Ruangan</th>
                <th>Tanggal Pinjam</th>
                <th>Jam Awal</th>
                <th>Jam Akhir</th>
            </tr>

        </thead>
        <tbody>

            @foreach ($book as $bookings)
            {{$bookings->with(['rooms'])->get()}}
            <tr>
                <td>{{$bookings->id_booking}}</td>
                <td>{{$bookings->rooms->kode_ruangan}}</td>
                <td>{{$bookings->tgl_pinjam}}</td>
                <td>{{$bookings->jam_awal}}</td>
                <td>{{$bookings->jam_akhir}}</td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
@endsection
