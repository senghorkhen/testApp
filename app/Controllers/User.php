<?php namespace App\Controllers;
use App\Models\UserModel;
class User extends BaseController
{

    public function index() 
    {
        return view('users/index');
    }

    public function validateUser()
    {
        $data = [];
        helper(['form']); // ber yg mean ah ng hx jg yg ach use function validate
        if($this->request->getMethod() == "post")
        {
            $rules = [
                'name' => 'required|alpha_numeric|min_length[3]|max_length[20]',
                'email' => 'required|valid_email|min_length[6]|max_length[50]',
                'age' => 'required|max_length[3]|numeric',
                'password' => 'request|min_length[8]|max_length[250]',
                'province' => 'required|alpha_numeric|min_length[3]|max_length[30]'

            ];
            if(!$this->validate($rules)) { // check merl rule ng trem trov tv tam avey yg reqire pel yg bnhjul mk
               
                echo "success";
                // $userModel = new UserModel();
                // insert to database
                // $uName = $this->request->getVar('name');
                // $uEmail = $this->request->getVar('email');
                // $uAge = $this->request->getVar('age');
                // $uPassword = $this->request->getVar('password');
                // $uProvince = $this->request->getVar('province');

                // $dataUser = array(
                //     'name' => $uName,
                //     'email' => $uEmail,
                //     'age' => $uAge,
                //     'password' => $uPassword,
                //     'province' => $uProvince
                // );
                // $userModel->createUser($dataUser);
            }else {
                $data['messanges'] = $this->validator; // check all rules true or not/ validator jea nak bos sms tv
            }
        }
        return view("users/index",$data);
    }

}