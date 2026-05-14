<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FabricCategory;

class FabricCategoryController extends Controller
{
    
    // Show Page
    public function index()
    {
        $categories = FabricCategory::latest()->get();

        return view('admin.fabric.category', compact('categories'));
    }

    
    // Store Category
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('uploads/categories'), $imageName);
        }

        FabricCategory::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imageName,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Category Added Successfully');
    }

    
    // Update Category
    public function update(Request $request, $id)
    {
        $category = FabricCategory::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
        ]);

        $imageName = $category->image;

        if ($request->hasFile('image')) {

            // Delete old image
            if ($category->image && file_exists(public_path('uploads/categories/' . $category->image))) {
                unlink(public_path('uploads/categories/' . $category->image));
            }

            $image = $request->file('image');

            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('uploads/categories'), $imageName);
        }

        $category->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imageName,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Category Updated Successfully');
    }

    
    // Delete Category
    public function destroy($id)
    {
        $category = FabricCategory::findOrFail($id);

        if ($category->image && file_exists(public_path('uploads/categories/' . $category->image))) {
            unlink(public_path('uploads/categories/' . $category->image));
        }

        $category->delete();

        return redirect()->back()->with('success', 'Category Deleted Successfully');
    }
}