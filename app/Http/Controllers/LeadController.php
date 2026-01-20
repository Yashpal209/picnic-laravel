<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function storeContact(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:50',
            'subject' => 'nullable|string|max:100',
            'location' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);
        $data['source'] = 'contact_form';
        Lead::create($data);
        return back()->with('success', 'Thanks! We will contact you soon.');
    }

    public function storeFranchise(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'whatsapp' => 'nullable|string|max:50',
            'email' => 'nullable|email|max:255',
            'address' => 'nullable|string',
            'amount' => 'nullable|string|max:100',
        ]);
        $data['business_type'] = 'franchise';
        $data['source'] = 'franchise_form';
        Lead::create($data);
        return back()->with('success', 'Franchise inquiry submitted.');
    }

    public function storeDistributor(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'whatsapp' => 'nullable|string|max:50',
            'email' => 'nullable|email|max:255',
            'address' => 'nullable|string',
        ]);
        $data['business_type'] = 'distributor';
        $data['source'] = 'distributor_form';
        Lead::create($data);
        return back()->with('success', 'Distributor inquiry submitted.');
    }

    public function storeBusiness(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'address' => 'nullable|string',
            'business_type' => 'nullable|string|in:distributor,franchise',
        ]);
        $data['source'] = 'index_business';
        Lead::create($data);
        return back()->with('success', 'Inquiry submitted.');
    }
}
