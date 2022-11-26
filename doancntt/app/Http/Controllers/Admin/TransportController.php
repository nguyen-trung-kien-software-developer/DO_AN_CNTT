<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Transport\TransportAddFormRequest;
use App\Http\Requests\Admin\Transport\TransportEditFormRequest;
use App\Http\Services\Address\AddressService;
use App\Http\Services\Transport\TransportService;
use App\Models\Transport;
use Illuminate\Http\Request;

class TransportController extends Controller
{
    protected $transportService;
    protected $addressService;
    public function __construct(TransportService $transportService, AddressService $addressService)
    {
        $this->transportService = $transportService;
        $this->addressService = $addressService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transports = $this->transportService->getAll();


        return view('admin.transport.index', [
            'transports' => $transports,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = $this->addressService->getAllProvinces();
        return view('admin.transport.create', [
            'provinces' => $provinces,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransportAddFormRequest $request)
    {
        $transport = $this->transportService->save($request);

        return redirect()->back();
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
    public function edit(Transport $transport)
    {
        $provinces = $this->addressService->getAllProvinces();

        return view('admin.transport.edit', [
            'transport' => $transport,
            'provinces' => $provinces,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TransportEditFormRequest $request, Transport $transport)
    {
        $result = $this->transportService->update($request, $transport);

        if (!$result) {
            return redirect()->back();
        }

        return redirect()->route('admin.transport.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transport $transport)
    {
        $result = $this->transportService->deleteById($transport->id);

        return redirect()->back();
    }
}