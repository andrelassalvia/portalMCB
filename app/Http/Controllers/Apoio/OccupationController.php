<?php

namespace App\Http\Controllers\Apoio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Occupation;
use Illuminate\Support\Facades\Validator;
use App\Traits\redirectAlertsMessages;
use Illuminate\Support\Facades\DB;

class OccupationController extends Controller
{
    use redirectAlertsMessages;
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
        return view('apoio.occupation.modal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateOccupation = Validator::make(
            $request->all(),
            ['nome' => 'required|min:3|max:40|string']
        );

        if($validateOccupation->fails()){
            return redirectAlertsMessages::redirectErrors(
                $validateOccupation,
                'Ok',
            );
        }
        Occupation::firstOrCreate(
            ['nome' => $request['nome']]
        );
        return redirect()->route('ordens.create', $request['id']);
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
