<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/added';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|string|max:12|min:4',
            'mail' => 'required|string|email|max:255|min:4|unique:users',
            'password' => 'required|string|alpha|min:4|max:12',
            'password-confirm' => 'required|string|min:4|max:12|same:password'
        ],[
            'username.required' => 'ユーザー名の入力は必須項目です。',
            'username.min' => 'ユーザー名は4文字以上12文字以下で入力して下さい。',
            'mail.min' => 'メールアドレスは4文字以上で入力してください。',
            'mail.email' => '有効なメールアドレスではありません。',
            'mail.required' => 'メールアドレスは必須項目です。',
            'mail.unique' => 'このメールアドレスは既に登録されています。',
            'password.required' => 'パスワードの入力は必須項目です。',
            'password.min' => 'パスワードは4文字以上12文字以下で入力してください。',
            'password.alpha' => 'パスワードは半角アルファベットで入力してください。',
            'password-confirm.required' => 'パスワード確認の入力は必須項目です。',
            'password-confirm.min' => 'パスワードは4文字以上12文字以下で入力してください。',
            'password-confirm.same' => 'パスワードは同じものを入力してください。',
            

        ])->validate();
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'mail' => $data['mail'],
            'password' => bcrypt($data['password']),
        ]);
    }


    // public function registerForm(){
    //     return view("auth.register");
    // }

    public function register(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
            $this->validator($data);
            $this->create($data);
            session()->put('key', $data['username']);
            return redirect('added');
        }
        return view('auth.register');
    }

    public function added(){
        return view('auth.added');
    }
}
