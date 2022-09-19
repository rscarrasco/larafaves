<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fave;

class FaveController extends Controller
{
    public function create(){
        return view('fave.create');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'link' => ['required', 'url'],
            'name' => 'required',
            'tags' => '',
            'description' => '',
            'is_public' => '',
        ]);
        
        preg_match('#^/([a-zA-z-0-9]+).*#', $request->getPathInfo(), $matches);
        $userhandle = $matches[1];

        $formFields['is_public'] = $formFields['is_public'] ?? false;
        $formFields['is_public'] == 'on' ? $formFields['is_public'] = true : $formFields['is_public'] = false;
        $formFields['user_id'] = auth()->id();

        Fave::create($formFields);

        return redirect("/$userhandle")->with('message', 'Fave created.');
    }
}
