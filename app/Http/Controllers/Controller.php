<?php

namespace App\Http\Controllers;

use App\Mail\ConsultingMail;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class Controller extends BaseController {

    use AuthorizesRequests, ValidatesRequests;

    public function index() {

        return view('index');

    }

    public function contact() {

        return redirect()->back()->with('success', 'Success');

    }

}
