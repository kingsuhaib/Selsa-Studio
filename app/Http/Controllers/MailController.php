<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;
  
class MailController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
        $input = $request->all();
        $mailData = [
            'title' => 'Selsa Studio',
            'body' => 'Thank you for subscribing to our newsletter'
        ];
         
        Mail::to($input['email'])->send(new DemoMail($mailData));
           
        dd("Email is sent successfully.");
        
    }
}