<?php

namespace FrameworkSimas\Controller;

use FrameworkSimas\Model\User;
use Rakit\Validation\Validator;
use FrameworkSimas\Config\Flasher;
use FrameworkSimas\Config\Controller;

class UserController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new User();
    }
    // main page
    public function index()
    {
        return $this->view("home/index", [
            'title' => 'User - Main',
            'user' => $this->model->all()
        ]);
    }

    /** 
     * page for create
     */
    public function create()
    {
        return $this->view("home/create", [
            'title' => 'User - Create',
        ]);
    }

    /** 
     * process to create data
     */
    public function store()
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
            header("Location: /user/create");
            exit();
        }

        if ($this->model->create($_POST) > 0) {
            Flasher::setFlash('SUCCESS', 'Store', 'success');
            header("Location: " . BASEURL . "/user");
        } else {
            Flasher::setFlash('FAILED', 'Store', 'success');
            header("Location: " . BASEURL . "/user");
        }
    }

    /** 
     * page for edit or update
     */
    public function edit($request)
    {
        return $this->view("home/edit", [
            'title' => 'User - Edit',
            'user' => $this->model->find($request['id']),
        ]);
    }

    /** 
     * process to update data
     */
    public function update($request)
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
            header("Location: /user/edit/{$request['id']}");
            exit();
        }

        if ($this->model->update($request['id'], $_POST) > 0) {
            Flasher::setFlash('SUCCESS', 'Update', 'success');
            header("Location: " . BASEURL . "/user");
        } else {
            Flasher::setFlash('FAILED', 'Update', 'success');
            header("Location: " . BASEURL . "/user");
        }
    }

    /**
     * process to delete data
     */

    public function delete($request)
    {
        if ($this->model->delete($request['id']) > 0) {
            Flasher::setFlash('SUCCESS', 'Delete', 'success');
            header("Location: " . BASEURL . "/user");
        } else {
            Flasher::setFlash('FAILED', 'Delete', 'success');
            header("Location: " . BASEURL . "/user");
        }
    }
}
