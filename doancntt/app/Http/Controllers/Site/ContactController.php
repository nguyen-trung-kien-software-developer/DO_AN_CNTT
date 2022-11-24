<?php

namespace App\Http\Controllers\Site;

use App\Events\CustomerContactEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\Site\Contact\ContactFormRequest;
use App\Http\Services\Company\CompanyService;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $companyService;

    public function __construct(CompanyService $companyService)
    {
        $this->companyService = $companyService;
    }

    function index()
    {
        $company = $this->companyService->getCompanyAllInformation();

        return view('site.contact.index', [
            'company' => $company
        ]);
    }

    function sendContact(ContactFormRequest $request)
    {
        $data = [];
        $data['send_email_to'] = env('MAIL_SHOPOWNER');
        $data['send_email_from'] = $request->input('email');
        $data['fullname'] = $request->input('fullname');
        $data['mobile'] = $request->input('mobile');
        $data['address'] = $request->input('address');
        $data['title'] = $request->input('title');
        $data['content'] = $request->input('content');

        event(new CustomerContactEvent($data));

        return response()->json([
            'isSuccess' => true,
        ]);
    }
}
