<?php

namespace App\Http\Controllers;

use App\Models\Member;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::get();

        return view('members.index', [
            'subtitle' => 'Members',
            'members' => $members,
        ]);
    }
}
