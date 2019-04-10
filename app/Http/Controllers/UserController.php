<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilderTrait;
use Hash;
use Auth;

use App\User;
use App\Forms\LoginForm;
use App\Forms\PasswordForm;

class UserController extends Controller
{
    use FormBuilderTrait;

    // 登录
    public function login ()
    {
        $form = $this->form(LoginForm::class, [
            'method' => 'POST',
            'url' => '/check'
        ]);

        $title = '请登录';

        return view('form', compact('form','title'));
    }

    /**
     * 检查
     *
     */
    public function check (Request $request)
    {
        $form = $this->form(LoginForm::class);

        // $v = new Validator;
        // if(!$v->checkMobile($request->mobile)) return redirect()->back()->withErrors(['mobile'=>'手机号不正确!'])->withInput();

        $exists = User::where('email', $request->email)
                        ->first();

        if(!$exists) return redirect()->back()->withErrors(['email'=>'用户不存在!'])->withInput();

        if(!Hash::check($request->password, $exists->password)) return redirect()->back()->withErrors(['password'=>'密码错误!'])->withInput();

        Auth::login($exists);

        return redirect('/');

    }

    /**
     * 退出登录
     *
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }


    /**
     * 修改密码
     *
     */
    public function changPassword()
    {
        $form = $this->form(PasswordForm::class, [
            'method' => 'POST',
            'url' => '/save_password'
        ]);

        $title = '输入新密码';

        return view('form', compact('form','title'));
    }

    /**
     * 保存密码
     *
     */
    public function savePassword(Request $request)
    {
        $form = $this->form(PasswordForm::class);
        if($request->password !== $request->confirm_password) redirect()->back()->withErrors(['confirm_password'=>'密码不一致!'])->withInput();
        Auth::user()->update(['password'=>bcrypt($request->password)]);

        $text = '密码修改成功!';
        return view('note', compact('text'));
    }


    /**
     *
     *
     */
}










