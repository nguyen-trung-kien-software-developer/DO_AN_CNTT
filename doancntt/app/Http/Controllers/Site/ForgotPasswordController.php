<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Http\Services\Company\CompanyService;
use App\Models\Customer;
use Illuminate\Support\Facades\Session;

class ForgotPasswordController extends Controller
{
    protected $companyService;

    public function __construct(CompanyService $companyService)
    {
        $this->companyService = $companyService;
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function showForgetPasswordForm()
    {
        $company = $this->companyService->getCompanyInformationBySelectAttributes(['name']);

        return view('site.customer.forgetPassword', [
            'company' => $company
        ]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:customers',
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->input('email'),
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('site.mail.forgetPassword', ['token' => $token], function ($message) use ($request) {
            $message->to($request->input('email'));
            $message->subject('Reset Password');
        });

        Session::flash('success', 'Chúng tôi đã gửi email liên kết đặt lại mật khẩu của bạn!');

        return redirect()->back();
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function showResetPasswordForm($token)
    {
        return view('site.customer.forgetPasswordLink', ['token' => $token]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:customers',
            'password' => 'required',
            'password_confirmation' => 'required|same:password'
        ]);

        $updatePassword = DB::table('password_resets')
            ->where([
                'email' => $request->input('email'),
                'token' => $request->input('token')
            ])
            ->first();

        if (!$updatePassword) {
            Session::flash('success', 'Token không hợp lệ !!!');
            return redirect()->back();
        }

        $customer = Customer::where('email', $request->input('email'))
            ->update(['password' => Hash::make($request->input('password'))]);

        DB::table('password_resets')->where(['email' => $request->input('email')])->delete();

        Session::flash('success', 'Mật khẩu của bạn đã được thay đổi!');

        return redirect()->route('site.customer.login');
    }
}