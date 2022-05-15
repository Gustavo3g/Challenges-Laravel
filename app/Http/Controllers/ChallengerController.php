<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChallengeRequest;
use App\Models\Challenge;
use Illuminate\Http\Request;

class ChallengerController extends Controller
{

    public function index()
    {
        return view('challenge.challenges',['challenges' => Challenge::all()]);
    }

    public function create()
    {
        return view('challenge.challenges-create');
    }


    public function store(ChallengeRequest $request)
    {

        Challenge::create($request->all());

        return redirect()->route('challenges.index');
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

    public function destroy($id)
    {

        Challenge::find($id)->delete();

        return redirect()->route('challenges.index');
    }
}
