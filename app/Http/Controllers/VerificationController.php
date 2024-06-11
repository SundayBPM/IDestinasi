<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function index()
    {
        $sites = Verification::all();
        return view('Verification.index', compact('sites'));
    }

    public function show($id)
    {
        $site = Verification::findOrFail($id);
        return view('Verification.show', compact('site'));
    }

    public function update(Request $id)
    {
        $site = Verification::findOrFail($id);
        
        $site->update($request->all());

        return redirect()->route('Verification.index')->with('success', 'Site updated successfully');
    }

    public function approve($id)
    {
        $site = Verification::findOrFail($id);
        $site->status = 'Diterima'; // Approved
        $site->save();

        return redirect()->route('Verification.index')->with('success', 'Site approved successfully');
    }

    public function reject($id)
    {
        $site = Verification::findOrFail($id);
        $site->status = 'Ditolak'; // Rejected
        $site->save();

        return redirect()->route('verification.index')->with('success', 'Site rejected successfully');
    }

    public function showSuccessMessage()
    {
    
        return view('Verification.success');
    }
}
