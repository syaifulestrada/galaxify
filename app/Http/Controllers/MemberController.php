<?php

namespace App\Http\Controllers;

use App\Models\Member;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::whereActive(true)->get();

        return view('members.index', [
            'subtitle' => 'Members',
            'members' => $members,
        ]);
    }

    public function show(Member $member)
    {
        return view('members.show', [
            'subtitle' => 'Members Detail',
            'member' => $member,
        ]);
    }
}
