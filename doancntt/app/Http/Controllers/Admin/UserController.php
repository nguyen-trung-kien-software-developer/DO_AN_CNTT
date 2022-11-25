<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Users\UpdatePrivateInformationFormRequest;
use App\Http\Requests\Admin\Users\UserLoginFormRequest;
use App\Http\Services\Company\CompanyService;
use App\Http\Services\User\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected $companyService;
    protected $userService;
    public function __construct(CompanyService $companyService, UserService $userService)
    {
        $this->companyService = $companyService;
        $this->userService = $userService;
    }

    function login()
    {
        // if (Auth::guard('web')->user()) {
        //     return redirect()->route('admin.users.privateInformation');
        // }
        $company = $this->companyService->getCompanyInformationBySelectAttributes(['name', 'logo']);

        return view('admin.users.login', [
            'company' => $company
        ]);
    }

    function auth(UserLoginFormRequest $request)
    {
        $username = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt([
            'email' => $username,
            'password' => $password,
            'is_active' => 1
        ], $request->input('remember'))) {
            //Laravel automatically regenerates the session ID during authentication
            $request->session()->regenerate();

            return redirect()->route('admin.users.privateInformation');
        }

        return redirect()->back();
    }

    public function privateInformation()
    {
        return view('admin.users.index');
    }

    public function updatePrivateInformation(UpdatePrivateInformationFormRequest $request)
    {
        $result = $this->userService->updateUserByEmail($request);

        return redirect()->back();
    }

    public function logout(Request $request)
    {
        //In addition to calling the logout method, it is recommended that you invalidate the user's session and regenerate their CSRF token.
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.users.login');;
    }
}