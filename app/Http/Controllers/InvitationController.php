<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvitationRequest;
use App\Models\Font;
use App\Models\Invitation;
use MediaUploader;




class InvitationController extends Controller
{
    public function __construct()
    {
        // $this->vaildateResource();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invitations = Invitation::with('font')->where('is_active', 1)->orderByDesc('updated_at')->get();
        return view('admin.invitations.index', compact('invitations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fonts = Font::where('is_active', 1)->orderByDesc('updated_at')->get();
        return view('admin.invitations.create', compact('fonts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InvitationRequest $request)
    {
        $invitation = Invitation::create($request->validated());
        if ($invitation) {
            $media = MediaUploader::fromSource($request->file('image'))->upload();
            $invitation->syncMedia($media, 'thumbnail');
            return back()->with('success', __('new invitation added successfully'));
        }

        return back()->with('error', __('cannot add the new invitation'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Invitation $invitation)
    {
        return view('admin.invitations.show', compact('invitation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invitation $invitation)
    {
        return view('admin.invitations.edit', compact('invitation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InvitationRequest $request, Invitation $invitation)
    {
        if ($invitation->update($request->validated())) {
            return back()->with('success', __('selected invitation updated successfully'));
        }

        return back()->with('error', __('cannot update the selected invitation'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invitation $invitation)
    {
        if ($invitation->delete()) {
            return back()->with('success', __('selected invitation deleted successfully'));
        }

        return back()->with('error', __('cannot delete the selected invitation'));
    }
}
