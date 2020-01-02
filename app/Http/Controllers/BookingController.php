<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Booking;
use Carbon\Carbon;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rooms = Room::all();
        return view('formpeminjaman')->with('rooms',$rooms);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'id_room' => 'required',
            'tgl_pinjam' => 'required',
            'jam_awal' => 'required',
            'jam_akhir' => 'required',
            'alasan' => 'required'
        ]);


        $booking = new Booking([
            'user_id' => $request->get('user_id'),
            'id_room' => $request->get('id_room'),
            'tgl_pinjam' => $request->get('tgl_pinjam'),
            'jam_awal' => $request->get('jam_awal'),
            'jam_akhir' => $request->get('jam_akhir'),
            'alasan' => $request->get('alasan')
        ]);
            $book = Booking::all();


            if($book->where('id_room','=',$booking->id_room)->where('tgl_pinjam','=',$booking->tgl_pinjam)->where('jam_awal','=',$booking->jam_awal.":00")->where('jam_akhir','=',$booking->jam_akhir.":00")->first()){
                return redirect()->route('formpeminjaman')->with('failed','Ruangan telah dibooking');
            }
            else{
                $booking->save();
                return redirect()->route('formpeminjaman')->with('success','Data Added');
            }
            //return dd($book->where('id_room','=',$booking->id_room)->where('jam_awal','=',$booking->jam_awal.":00"));
            // if($book->where('id_room','=',$booking->id_room)){
            //     if($book->where('tgl_pinjam','=',$booking->tgl_pinjam)){
            //         if($book->where('jam_awal','=',$booking->jam_awal.":00")){
            //             if($book->where('jam_akhir','=',$booking->jam_akhir.":00")){
            //                 return redirect()->route('formpeminjaman')->with('failed','Ruangan telah dibooking');
            //             }
            //         }else{
            //             $booking->save();
            //             return redirect()->route('formpeminjaman')->with('success','Data Added');
            //         }
            //     }else{
            //         $booking->save();
            //         return redirect()->route('formpeminjaman')->with('success','Data Added');
            //     }
            // }
            // else{
            //     $booking->save();
            //     return redirect()->route('formpeminjaman')->with('success','Data Added');
            // }



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
