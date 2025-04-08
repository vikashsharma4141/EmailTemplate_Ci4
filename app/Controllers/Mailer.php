<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Mailer extends Controller
{
    
    public function welcome_email()
    {
        $data = [
            'name' => 'Vikash Sharma'
        ];
        return view('Email/welcome_email', $data); 
    }

    
    public function sendEmail()
    {
        $email = \Config\Services::email();

        $data = [
            'name' => 'Vikash Sharma' 
        ];

        $message = view('Email/welcome_email', $data);  

        $email->setTo('viratsharma1909@gmail.com','nishantchauhan2706@gmail.com'); 
        $email->setFrom('vikash.vayuz@gmail.com', 'TemplateEmails');
        $email->setSubject('Welcome to Our Website');
        $email->setMessage($message);
        $email->setMailType('html');
        if ($email->send()) {
            echo 'Email sent successfully.';
        } else {
            echo 'Email failed to send.';
            print_r($email->printDebugger(['headers']));
        }
    }

     public function sendOtp()
    {
        helper('quote'); 

        $email = $this->request->getPost('email');
        $name  = $this->request->getPost('name') ?? 'User'; 
        $otp   = rand(100000, 999999);
    
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->insert([
            'email' => $email,
            'name'  => $name,
            'otp'   => $otp,
            'quote' => getRandomQuote() 
        ]);
    
        $emailService = \Config\Services::email();
        $emailService->setTo($email);
        $emailService->setFrom('vikash.vayuz@gmail.com', 'TemplateEmails');
        $emailService->setSubject('Your OTP Code');
        $message = view('Email/receive_otp', [
            'name' => $name,
            'otp'  => $otp
        ]);
    
        $emailService->setMessage($message);
        $emailService->setMailType('html');
    
        if ($emailService->send()) {
            return view('Email/otp_verify', [
                'email' => $email,
                'name'  => $name,
            ]);
        } else {
            return "Failed to send OTP.";
        }
    }

        
    public function verifyOtp()
    {
        $email = $this->request->getPost('email');
        $otp   = $this->request->getPost('otp');
    
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $result = $builder->where('email', $email)
                          ->where('otp', $otp)
                          ->get()
                          ->getRow();
    
        if ($result) {          
            return view('Email/otp_success', [
                'email' => $email,
                'name'  => $result->name 
            ]);
        } else {
            return view('Email/otp_failed', [
                'email' => $email
            ]);
        }
    }
    
    }
