<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLandlordRequest;
use App\Http\Requests\UpdateLandlordRequest;
use App\Models\Landlord;

class LandlordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $this->authorize('viewAny');

        $landlords = Landlord::all();
        return $landlords;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $this->authorize('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLandlordRequest $request)
    {
        //

        $data = $request->validated();

        $result = Landlord::updateOrCreate(
            ['database' => $data->database],
            [
                'username' => $data->username,
                'password' => $data->password,
            ]
        );

        if (!$result) {
            return false;
        }

        return true;
    }

    /**
     * Display the specified resource.
     */
    public function show(Landlord $landlord)
    {
        //
        $this->authorize('view', $landlord);

        $landlord = Landlord::where('id', $landlord)->first();
        return $landlord;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Landlord $landlord)
    {
        //

        $this->authorize('update', $landlord);

        $landlord = Landlord::where('id', $landlord)->first();
        return $landlord;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLandlordRequest $request, Landlord $landlord)
    {
        //

        $this->authorize('update', $landlord);
        $data = $request->validated();

        $result = Landlord::updateOrCreate(
            ['database' => $data->database],
            [
                'username' => $data->username,
                'password' => $data->password,
            ]
        );

        if (!$result) {
            return false;
        }

        return true;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Landlord $landlord)
    {
        //
        $this->authorize('delete', $landlord);
        $result = Landlord::destroy($landlord);
        if (!$result) {
            return false;
        }

        return true;
    }
}
