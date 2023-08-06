<?php

namespace App\Http\Controllers;

use App\Models\Ticket;

class TicketController extends Controller
{
    public function index()
    {

        return inertia('User/Index', [
            'tickets' => Ticket::with('user')->get(),
        ]);
    }
}
