<?php

namespace App\Http\Controllers;

use App\ModelKontak;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Kontak extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = ModelKontak::all();

        if (count($data) > 0) {
            $res['message'] = "success";
            $res['value'] = $data;
        } else {
            $res['message'] = "Empty";
        }
        return \response($res);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $nama = $request->input('nama');
        $email = $request->input('email');
        $nohp = $request->input('nohp');
        $alamat = $request->input('alamat');

        $data = new ModelKontak();
        $data->nama = $nama;
        $data->email = $email;
        $data->nohp = $nohp;
        $data->alamat = $alamat;

        if ($data->save()) {
            $res['message'] = "Success!";
            $res['value'] = "$data";
        } else {
            $res['message'] = "failed";
        }
        return response($res);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $data = ModelKontak::where('id', $id)->get();
        if (count($data) > 0) {
            $res['message'] = "success";
            $res['value'] = $data;
        } else {
            $res['message'] = "Empty";
        }
        return \response($res);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
