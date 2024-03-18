<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Auth extends Controller
{
    public function register()
    {
        helper(['form']);

        if ($this->request->getMethod() === 'post') {
            $rules = [
                'name' => 'required',
                'organization' => 'required',
                'designation' => 'required',
                'email' => 'required|valid_email|is_unique[users.email]',
                'mobile' => 'required|numeric|exact_length[10]|is_unique[users.mobile]',
                'password' => 'required'
            ];

            if ($this->validate($rules)) {
                $model = new \App\Models\UserModel();

                $model->save([
                    'name' => $this->request->getVar('name'),
                    'organization' => $this->request->getVar('organization'),
                    'designation' => $this->request->getVar('designation'),
                    'email' => $this->request->getVar('email'),
                    'mobile' => $this->request->getVar('mobile'),
                    'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
                ]);

                return redirect()->to('/login');
            } else {
                $data['validation'] = $this->validator;
            }
        }
        
        return view('register', $data ?? []);
    }

    public function login()
    {
        helper(['form']);

        if ($this->request->getMethod() === 'post') {
            $rules = [
                'email' => 'required|valid_email',
                'password' => 'required'
            ];

            if ($this->validate($rules)) {
                $model = new \App\Models\UserModel();

                $user = $model->where('email', $this->request->getVar('email'))->first();

                if ($user && password_verify($this->request->getVar('password'), $user['password'])) {
                    // Set session and redirect to dashboard or home page
                    // echo 'God is Love';
                    return redirect()->to('/dashboard');
                } else {
                    $data['error'] = 'Invalid email or password';
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('login', $data ?? []);
    }
}
