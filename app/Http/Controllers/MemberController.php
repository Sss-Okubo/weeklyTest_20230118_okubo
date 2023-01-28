<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use App\http\Requests\MemberRequest;

class MemberController extends Controller
{
    //
public function add()
  {
    return view('add');
  }

  public function create(MemberRequest $request)
  {
    $form = $request->all();
    Member::create($form);
    return view('thanks');
  }
}

