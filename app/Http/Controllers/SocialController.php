<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function create() {
        return view('socials.create');
    }

    public function store(Request $request) {
        $socialsData = $request->validate([
            'social_name' => 'required'
        ]);

        Social::create($socialsData);

        return redirect('/home');
    }

    public function edit($id) {

        $social = Social::find($id);

        return view('socials.edit', compact('social'));
    }

    public function update(Request $request, $id) {

        $social = Social::find($id);

        $data = $request->validate([
            'social_name' => 'required'
        ]);

        $social->update($data);

        return redirect('/home');
    }

    public function delete($id) {
        $social = Social::find($id);

        $social->delete();

        return redirect('/home');
    }
}
