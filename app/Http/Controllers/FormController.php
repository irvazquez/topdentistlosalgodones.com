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
      'email' => 'email|required',
      'name' => 'required',
      'phone' => 'required',
      'message' => 'required',
      'images' => 'image|mimes:png,jpg,jpeg|max:2048',
    ]);

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
  }
}
