<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public $data = [];

    public function index()
    {
        helper(['form', 'url']);
        $this->data['scripts_to_load'] = [
            // "https://www.google.com/recaptcha/api.js",
        ];

        $this->data['validation'] =  \Config\Services::validation();

        // validation rules
        if ($this->request->getPost()) {

            $rules = [
                'name' => ['label'  => 'Name', 'rules'  => 'required',],
                'email' => ['label'  => 'Email', 'rules'  => 'required|valid_email',],
                'message' => ['label'  => 'Message', 'rules'  => 'required',],
            ];

            if (!$this->validate($rules)) {
                $this->data['validation'] = $this->validator;
                echo view('templates/header', $this->data);
                echo view('contact', $this->data);
                echo view('templates/footer', $this->data);
            } else {
                // stuur email
                $this->send_email();
                echo view('templates/header', $this->data);
                echo view('success', $this->data);
                echo view('templates/footer', $this->data);
            }
        } else {
            echo view('templates/header', $this->data);
            echo view('contact', $this->data);
            echo view('templates/footer', $this->data);
        }
    }

    public function send_email()
    {
        $email = \Config\Services::email();

        $to = ' tightfit@hermanus.co.za';
        // $to = 'johan.havenga@gmail.com';
        $subject = 'Website Contact: ' . $this->request->getVar('name');

        $email->setTo($to);
        // $email->setBCC("johan.havenga@gmail.com");
        $email->setFrom($this->request->getVar('email'), $this->request->getVar('name'));
        $email->setSubject($subject);
        $message = "<h3>Website Contact Form</h3><p>"
            . "<b>Name:</b> " . $this->request->getVar('name') . "<br>"
            . "<b>Email:</b> " . $this->request->getVar('email') . "</p>"
            . "<p style='padding-left: 15px; padding-bottom:0; margin: 20px 0; border-left: 4px solid #ccc;'><b>Message:</b><br>" . nl2br($this->request->getVar('message')) . "</p>";

        $email->setMessage($message);

        if ($email->send()) {
            $msg = 'Email successfully sent';
        } else {
            $data = $email->printDebugger(['headers']);
            //print_r($data);
            $msg = 'Email send failed';
        }
    }
}
