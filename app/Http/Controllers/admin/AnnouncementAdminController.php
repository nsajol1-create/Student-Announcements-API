<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnnouncementAdminController extends Controller
{
    public function index()
    {
        $announcements = Announcement::latest()->get();
        return view('admin.dashboard', compact('announcements'));
    }

    public function show()
    {
        $announcements = Announcement::latest()->get();
        return view('admin.showannouncements', compact('announcements'));
    }


     public function studentshow()
    {
        $announcements = Announcement::latest()->get();
        return view('admin.annoucementstudent', compact('announcements'));
    }

     public function create()
    {
        return view('admin.create');
    }

     public function developers()
    {
        return view('admin.developers');
    }

     public function contact()
    {
        return view('admin.contactus');
    }

    public function createannoucement()
{
    $announcements = Announcement::all(); // or your query
    return view('admin.createannoucements', compact('announcements'));
}


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'file' => 'nullable|mimes:jpg,png,pdf|max:2048'
        ]);

        $file = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file')->store('announcements', 'public');
        }

        Announcement::create([
            'title' => $request->title,
            'content' => $request->content,
            'file' => $file
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Announcement created');
    }

    public function edit($id)
    {
        $announcement = Announcement::findOrFail($id);
        return view('admin.edit', compact('announcement'));
    }

    public function update(Request $request, $id)
    {
        $announcement = Announcement::findOrFail($id);

        if ($request->hasFile('file')) {
            Storage::disk('public')->delete($announcement->file);
            $announcement->file = $request->file('file')->store('announcements', 'public');
        }

        $announcement->update($request->only('title', 'content', 'is_archived'));

        return redirect()->route('admin.dashboard')->with('success', 'Updated successfully');
    }

    public function destroy($id)
    {
        $announcement = Announcement::findOrFail($id);
        Storage::disk('public')->delete($announcement->file);
        $announcement->delete();

        return back()->with('success', 'Deleted');
    }
}

