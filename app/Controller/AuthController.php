<?php

namespace FrameworkSimas\Controller;

use FrameworkSimas\Model\User;
use Rakit\Validation\Validator;
use FrameworkSimas\Config\Flasher;
use FrameworkSimas\Config\JWTAuth;
use FrameworkSimas\Config\Controller;

class AuthController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function register()
    {
        if (isset($_SESSION['errors'])) {
            unset($_SESSION['errors']);
        }
        $validator = new Validator;

        $validation = $validator->make($_POST, [
            'name'                  => 'required',
            'email'                 => 'required',
            'password'              => 'required|min:5'
        ]);

        $validation->validate();

        if ($validation->fails()) {
            $errors = $validation->errors()->firstOfAll();
            $_SESSION['errors'] = $errors;
            $_SESSION['old'] = $_POST;
            header("Location: /register");
            exit();
        }

        if ($this->user->create($_POST) > 0) {
            Flasher::setFlash('SUCCESS', 'Register', 'success');
            header("Location: " . BASEURL . "/login");
        } else {
            Flasher::setFlash('FAILED', 'Register', 'success');
            header("Location: " . BASEURL . "/register");
        }
    }

    public function login()
    {
        if (isset($_SESSION['errors'])) {
            unset($_SESSION['errors']);
        }
        $validator = new Validator;

        $validation = $validator->make($_POST, [
            'email'                 => 'required',
            'password'              => 'required'
        ]);

        $validation->validate();

        if ($validation->fails()) {
            $errors = $validation->errors()->firstOfAll();
            $_SESSION['errors'] = $errors;
            $_SESSION['old'] = $_POST;
            header("Location: /login");
            exit();
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $this->user->getUserByEmail($email);

        if (!$user || $user['password'] !== $password) {
            Flasher::setFlash('FAILED', 'Login', 'success');
            header("Location: " . BASEURL . "/register");
        }

        $token = [
            'sub' => $user['id'],
            'name' => $user['name'],
            'email' => $user['email'],
            'role' => $user['role'],
            'exp' => time() + 60 * 60 // Token berlaku selama 1 jam
        ];

        JWTAuth::createToken($token, $token['exp']);
        Flasher::setFlash('SUCCESS', 'Login', 'success');
        header("Location: " . BASEURL . "/user");
    }

    public function logout()
    {
        JWTAuth::deleteToken();
        Flasher::setFlash('SUCCESS', 'Logout', 'success');
        header("Location: " . BASEURL . "/login");
        exit;
    }
}
