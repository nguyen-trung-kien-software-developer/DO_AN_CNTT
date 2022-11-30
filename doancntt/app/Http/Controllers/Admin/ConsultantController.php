<?php

namespace App\Http\Controllers\Admin;

use App\Events\ResponseConsultantEmailEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Consultant\SendEmailFormRequest;
use App\Http\Services\Consultant\ConsultantService;
use App\Mail\ResponseConsultantEmailMail;
use App\Models\Consultant;
use Illuminate\Http\Request;

class ConsultantController extends Controller
{
    protected $consultantService;
    public function __construct(ConsultantService $consultantService)
    {
        $this->consultantService = $consultantService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultants = $this->consultantService->getAllConsultantsOrderByCreatedDateDesc();

        return view('admin.consultant.index', [
            'consultants' => $consultants
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function destroy(Consultant $consultant)
    {
        $result = $this->consultantService->deleteById($consultant->id);

        return redirect()->back();
    }

    public function sendEmail(SendEmailFormRequest $request)
    {
        $data = [];
        $data['send_email_from'] = env('MAIL_USERNAME');
        $data['send_email_to_many_people'] = $request->input('emails');
        $data['content'] = $request->input('content');

        event(new ResponseConsultantEmailEvent($data));

        return redirect()->back();
    }
}