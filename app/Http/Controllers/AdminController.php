<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboardView()
    {
        return view('admin.dashboard');
    }

    public function dashboard()
    {
        $stats = [
            'total' => ContactMessage::count(),
            'unread' => ContactMessage::where('is_read', false)->count(),
        ];

        return response()->json([
            'success' => true,
            'stats' => $stats,
        ]);
    }

    public function index(Request $request)
    {
        $query = ContactMessage::query();

        if ($request->filled('filter')) {
            $query->where('is_read', $request->filter === 'read');
        }

        $messages = $query->latest()
            ->paginate(15);

        return response()->json([
            'success' => true,
            'data' => $messages->items(),
            'pagination' => [
                'total' => $messages->total(),
                'per_page' => $messages->perPage(),
                'current_page' => $messages->currentPage(),
                'last_page' => $messages->lastPage(),
            ],
        ]);
    }

    public function show(ContactMessage $message)
    {
        return response()->json([
            'success' => true,
            'data' => $message,
        ]);
    }

    public function markRead(ContactMessage $message)
    {
        $message->update(['is_read' => true]);

        return response()->json([
            'success' => true,
            'message' => 'Message marked as read.',
            'data' => $message,
        ]);
    }

    public function markUnread(ContactMessage $message)
    {
        $message->update(['is_read' => false]);

        return response()->json([
            'success' => true,
            'message' => 'Message marked as unread.',
            'data' => $message,
        ]);
    }

    public function destroy(ContactMessage $message)
    {
        $message->delete();

        return response()->json([
            'success' => true,
            'message' => 'Contact query deleted.',
        ]);
    }
}
