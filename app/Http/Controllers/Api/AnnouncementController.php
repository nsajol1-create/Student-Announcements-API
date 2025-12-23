<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnnouncementController extends Controller
{
    // Public Feed
    public function index()
    {
        return Announcement::where('is_archived', false)->latest()->get();
    }

    // Archived Announcements
    public function archive()
    {
        return Announcement::where('is_archived', true)->latest()->get();
    }

    // Create (Admin)
    public function store(Request $request)
    {
        $this->authorizeAdmin($request);

        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'file' => 'nullable|file|mimes:jpg,png,pdf|max:2048'
        ]);

        $filePath = null;
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('announcements', 'public');
        }

        return Announcement::create([
            'title' => $request->title,
            'content' => $request->content,
            'file' => $filePath,
        ]);
    }

    // Update
    public function update(Request $request, $id)
    {
        $this->authorizeAdmin($request);

        $announcement = Announcement::findOrFail($id);

        if ($request->hasFile('file')) {
            Storage::disk('public')->delete($announcement->file);
            $announcement->file = $request->file('file')->store('announcements', 'public');
        }

        $announcement->update($request->only('title', 'content', 'is_archived'));

        return $announcement;
    }

    // Delete
    public function destroy(Request $request, $id)
    {
        $this->authorizeAdmin($request);

        $announcement = Announcement::findOrFail($id);
        Storage::disk('public')->delete($announcement->file);
        $announcement->delete();

        return response()->json(['message' => 'Deleted successfully']);
    }

    // Simple Role Check
    private function authorizeAdmin(Request $request)
    {
        if ($request->user()->role !== 'admin') {
            abort(403, 'Unauthorized');
        }
    }
}
