<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
  public function estimate()
  {
    request()->validate([
      '_token' => 'required',
      'email' => 'email|required',
      'name' => 'required',
      'phone' => 'required',
      'message' => 'required',
      'images' => 'image|mimes:png,jpg,jpeg|max:2048',
    ]);

    $token = request('g-recaptcha-response');

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => env('RECAPTCHA_PRIVATE'), 'response' => $token)));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    $arrayResponse = json_decode($response, true);

    if ($arrayResponse["success"] == '1')
    {

      try {

        $data['to'] = 'info@topdentistslosalgodones.com';
        $data['email'] = request('email');
        $data['name'] = request('name');
        $data['phone'] = request('phone');
        $data['message'] = request('message');
        $data['title'] = 'Estimate: Contact from Website';
        $data['body'] = 'test';
    
    
        $filename = [];
    
        if (request()->hasfile('files')) {
          $images = request()->file('files');
          foreach ($images as $file) {
            $name = $file->getClientOriginalName();
            $file->move(public_path() . '/files/', $name);
            $filename[] = public_path() . '/files/' . $name;
          }
        }
    
        Mail::send('emails.estimate', ['data' => $data], function ($message) use ($data, $filename) {
          $message->to($data['to'])
            ->subject($data['title']);
          foreach ($filename as $image) {
            $message->attach($image);
          }
        });
    
        foreach ($filename as $img) {
          File::delete($img);
        }
    
        return back()->with('success', 'Your message has been sent. We will answer you ASAP');
      } catch (Exception $e) {
        return json_encode($e);
      }

    }

    return 'Error';
  }
}
