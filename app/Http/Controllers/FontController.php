<?php

namespace App\Http\Controllers;

use App\Http\Requests\FontRequest;
use App\Models\Font;
use MediaUploader;




class FontController extends Controller
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
        $fonts = Font::where('is_active', 1)->orderByDesc('updated_at')->get();
        return view('admin.fonts.index', compact('fonts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.fonts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FontRequest $request)
    {
        $font = Font::create($request->validated());
        if ($font) {
            $media = MediaUploader::fromSource($request->file('file'))->upload();
            $font->syncMedia($media, 'thumbnail');
            return back()->with('success', __('new font added successfully'));
        }

        return back()->with('error', __('cannot add the new font'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Font $font)
    {
        return view('admin.fonts.show', compact('font'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Font $font)
    {
        return view('admin.fonts.edit', compact('font'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FontRequest $request, Font $font)
    {
        if ($font->update($request->validated())) {
            return back()->with('success', __('selected font updated successfully'));
        }

        return back()->with('error', __('cannot update the selected font'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Font $font)
    {
        if ($font->delete()) {
            return back()->with('success', __('selected font deleted successfully'));
        }

        return back()->with('error', __('cannot delete the selected font'));
    }
}
