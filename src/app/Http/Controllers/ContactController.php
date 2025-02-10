<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Requests\UserRequest;
use App\Models\Contact;
use App\Models\User;

class ContactController extends Controller
{
    public function index(){
        return view('index');
    }

    public function confirm(ContactRequest $request){
        $contact =$request->only(['first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building_name', 'categories', 'content']);
        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request){
        $contact=$request->only(['first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building_name', 'categories', 'content']);
        Contact::create($contact);
        return view('thanks');
    }  

    public function register(){
        return view('register');
    }

    public function login(UserRequest $request){
        $user=$request->only(['name', 'email', 'password']);
        User::create($user);
        return view('login');
    }

    public function logi(UserRequest $request){
        $user=$request->only(['name', 'password']);
        return view('index');

    }

}