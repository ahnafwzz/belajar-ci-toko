<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class ProfileController extends BaseController
{
    public function index()
    {
        // 1. Panggil model
        $userModel = new UserModel();

        // 2. Ambil username dari session saat ini
        $username = session()->get('username');

        // 3. Cari seluruh baris data user tersebut di database
        $userData = $userModel->where('username', $username)->first();

        $data = [
            'hlm'  => 'Profile',
            'user' => $userData // 4. Lempar data lengkapnya ke view dengan nama 'user'
        ];

        return view('v_profile', $data);
    }
}
