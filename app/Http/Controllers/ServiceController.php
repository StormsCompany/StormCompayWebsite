<?php

namespace App\Http\Controllers;

use App\Mail\ServiceRequestMail;
use App\Models\Services;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ServiceController extends BaseController
{

    public function __construct()
    {

        $this->middleware('auth');
    }
    //
    public function index()
    {
        # code...

        $services = $this->user()->services()->orderBy('created_at', 'DESC')->get();
        return view('service.index', compact('services'));
    }

    public function create()
    {
        # code...
        return view('service.create');
    }
    public function store(Request $request)
    {
        # code...
        $service = $this->user()->services()->create(
            $request->all(),
        );

        $this->sendGuestEmail($service, "Service added");
        return redirect(route('services.index'))->with('success', 'Your request has been sent. We will reach out as soon as possible!');
    }

    public function show($id)
    {
        # code...
        # code...
        $service =   $this->user()->services()->where('id', $id)->first();
        return view('service.show', compact('service'));
    }


    public function edit($id)
    {
        # code...
        $service =   $this->user()->services()->where('id', $id)->first();
        return view('service.edit', compact('service'));
    }

    public function update($id, Request $request)
    {
        # code...

        // dd($request->all())
        $service =   $this->user()->services()->where('id', $id)->first();

        $service->update(
            $request->all(),
        );

        $this->sendGuestEmail($service, "Service Updated");

        return redirect(route('services.show', ['service' => $id]))->with('success', 'Your request has been sent. We will reach out as soon as possible!');
    }

    public function destroy($id)
    {
        # code...
        $service =   $this->user()->services()->where('id', $id)->first();

        $result =  Services::destroy($id);
        if ($result) {
            $this->sendGuestEmail($service, "Service Deleted");
            return redirect(route('services.index'))->with('success', 'Request deleted!');
        } else
            return back()->with('error', 'The item could not be deleted!');
    }

    public function sendGuestEmail($service, $message)
    {
        # code...
        try {
            $service['message'] = $message;
            $guestMail =  new ServiceRequestMail($service);
            Mail::to('stormsco@storms.co.ke')->send($guestMail);
        } catch (Exception $e) {
            $e->getMessage();
            info($e->getMessage());
            return false;
        }
    }
}
