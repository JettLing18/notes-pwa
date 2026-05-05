<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function dashboard()
    {
        $user = Auth::user();


        if ($user->role == 1) {
        
            $notes = Note::with('user')->latest()->get();
            return view('admin.dashboard', compact('notes'));
        }


        $notes = $user->notes;
        return view('dashboard', compact('notes'));
    }

}
