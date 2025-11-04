<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    // Show the ticket form
    public function create()
    {
        return view('tickets.create');
    }

    // Handle form submission
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'ticket_type' => 'required|string',
        ]);

        Ticket::create($request->all());

        return redirect()->back()->with('success', 'Ticket booked successfully!');
    }
}
