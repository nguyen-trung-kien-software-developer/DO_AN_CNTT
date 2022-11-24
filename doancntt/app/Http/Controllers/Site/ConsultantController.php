<?php

namespace App\Http\Controllers\Site;

use App\Events\CustomerSendRequestConsultantEvent;
use App\Http\Services\Consultant\ConsultantService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Site\Consultant\SendRequestConsultantFormRequest;
use Illuminate\Http\Request;

class ConsultantController extends Controller
{
    protected $consultantService;

    public function __construct(ConsultantService $consultantService)
    {
        $this->consultantService = $consultantService;
    }

    function sendRequestConsultant(SendRequestConsultantFormRequest $sendRequestConsultantFormRequest)
    {
        $result = $this->consultantService->saveRequestConsultant($sendRequestConsultantFormRequest);

        $data = [];
        $data['send_email_to'] = env('MAIL_SHOPOWNER');
        $data['send_email_from'] = $sendRequestConsultantFormRequest->input('email');
        $data['fullname'] = $sendRequestConsultantFormRequest->input('fullname');
        $data['mobile'] = $sendRequestConsultantFormRequest->input('mobile');
        $data['product_type_name'] = $sendRequestConsultantFormRequest->input('product_type_name');
        $data['content'] = $sendRequestConsultantFormRequest->input('content');

        event(new CustomerSendRequestConsultantEvent($data));

        if (!$result) {
            return response()->json([
                'isSuccess' => false,
            ]);
        }

        return response()->json([
            'isSuccess' => true,
        ]);
    }
}