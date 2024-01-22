<?php

namespace App\Http\Controllers;

use App\Repository\RoleRepository;
use App\Repository\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid;

class AuthController extends Controller
{
    private RoleRepository $role;
    private UserRepository $user;

    protected $data = array();

    public function __construct(RoleRepository $role, UserRepository $user)
    {
        $this->user = $user;
        $this->role = $role;
        $this->data['directory'] = 'auth';
        $this->data['title'] = 'Login';
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->data['title'];
        return view($this->data['directory']. '.index', compact('data'));
    }

    public function cekKredensial(Request $request) {
        $kredensial = $request->validate([
            "email" => ['email', 'required'],
            "password" => ['required']
        ]);

        if (auth()->attempt($kredensial)) {

            $request->session()->regenerate();

            if (auth()->user()->role->name === 'admin') {
                return redirect()->intended('admin');
            } else {
                return redirect()->intended('user');
            }
        }

        return back()->with('error', config('error','Email pengguna atau password tidak sesuai'));
    }

    public function redirectAuth() {
        if (auth()->user()->role->name === 'admin') {
            return redirect()->route('admin');
        } else {
            return redirect()->route('user');
        }
    }

    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function ShowRegis() {
        $data = $this->data['title'] = 'Register';
        return view($this->data['directory']. '.register', compact('data'));
    }

    public function Regis(Request $request) {
        // dd('tekan kene');
        $data = $request->validate([
            "name" => ['required', 'min:5'],
            "email" => ['required', 'email'],
            "password" => ['required', 'min:5']
        ], [], [
            "name" => "nama",
            "email" => "email",
            "password" => "password"
        ]);
        $data['id'] = Uuid::uuid4()->toString();
        $data['created_by'] = $data['name'];
        $role_id = $this->role->findIdByRoleUser();
        $data['id_role'] = $role_id['id'];

        // dd($data, $user->toArray());
        try {
            $this->user->store($data);
            return redirect()->route('login')->with('success', 'Selamat datang'. $data['name']);
        } catch (\Exception $e) {
            if (env('APP_DEBUG')) {
                return $e->getMessage();
            }
            return back()->with('error', "Oops..!! Terjadi keesalahan saat menyimpan data");
        }
    }
}
