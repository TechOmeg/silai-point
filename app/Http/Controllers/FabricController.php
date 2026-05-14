<?php

namespace App\Http\Controllers;

use App\Models\Fabric;
use App\Models\FabricCategory;
use Illuminate\Http\Request;

class FabricController extends Controller
{
    // ADD FABRIC PAGE
    public function create()
    {
        $categories = FabricCategory::where('status', 1)->get();

        return view('admin.fabric.add_fabric', compact('categories'));
    }

    // STORE FABRIC
    public function store(Request $request)
    {
        $request->validate([
            'fabric_category_id' => 'required',
            'name'               => 'required|string|max:255',
            'price'              => 'required|numeric',
            'stock'              => 'required|numeric',
            'description'        => 'nullable|string',
            'color'              => 'nullable|string',
            'season'             => 'nullable|string',
            'description'        => 'nullable|string',
            'code'               => 'nullable|string|max:255',
            'fabric_type'        => 'nullable|string|max:255',
            'image'              => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'status'             => 'required'
        ]);
        

        $imageName = null;

        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('uploads/fabrics'), $imageName);
        }

        Fabric::create([
            'fabric_category_id' => $request->fabric_category_id,
            'name'               => $request->name,
            'price'              => $request->price,
            'stock'              => $request->stock,
            'description'        => $request->description,
            'color'              => $request->color,
            'code'               => $request->code,
            'season'             => $request->season,
            'description'        => $request->description,
            'fabric_type'        => $request->fabric_type,
            'image'              => $imageName,
            'status'             => $request->status,
        ]);

        return redirect()->route('all.fabric')->with('success', 'Fabric Added Successfully');
    }

    // FETCH FABRICS
    public function index()
    {
        $fabrics = Fabric::with('category')->latest()->get();

        $categories = FabricCategory::where('status', 1)->get();

        return view('admin.fabric.all_fabrics', compact('fabrics', 'categories'));
    }

    public function edit($id)
{
    $fabric = Fabric::findOrFail($id);

    $categories = FabricCategory::where('status',1)->get();

    return view('admin.fabric.add_fabric', compact('fabric','categories'));
}

    // UPDATE FABRIC
    public function update(Request $request, $id)
    {
        $fabric = Fabric::findOrFail($id);

        $request->validate([
            'fabric_category_id' => 'required',
            'name'               => 'required|string|max:255',
            'price'              => 'required|numeric',
            'stock'              => 'required|numeric',
            'description'        => 'nullable|string',
            'color'              => 'nullable|string',
            'season'             => 'nullable|string',
            'description'        => 'nullable|string',
            'code'               => 'nullable|string|max:255',
            'fabric_type'        => 'nullable|string|max:255',
            'image'              => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'status'             => 'required'
        ]);

        $imageName = $fabric->image;

        if ($request->hasFile('image')) {

            // OLD IMAGE DELETE
            if ($fabric->image && file_exists(public_path('uploads/fabrics/' . $fabric->image))) {
                unlink(public_path('uploads/fabrics/' . $fabric->image));
            }

            $image = $request->file('image');

            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('uploads/fabrics'), $imageName);
        }

        $fabric->update([
            'fabric_category_id' => $request->fabric_category_id,
            'name'               => $request->name,
            'price'              => $request->price,
            'stock'              => $request->stock,
            'description'        => $request->description,
            'color'              => $request->color,
            'code'               => $request->code,
            'season'             => $request->season,
            'description'        => $request->description,
            'fabric_type'        => $request->fabric_type,
            'image'              => $imageName,
            'status'             => $request->status,
        ]);

        return redirect()->route('all.fabric')->with('success', 'Fabric Updated Successfully');
    }

    // DELETE FABRIC
    public function destroy($id)
    {
        $fabric = Fabric::findOrFail($id);

        if ($fabric->image && file_exists(public_path('uploads/fabrics/' . $fabric->image))) {
            unlink(public_path('uploads/fabrics/' . $fabric->image));
        }

        $fabric->delete();

        return redirect()->back()->with('success', 'Fabric Deleted Successfully');
    }
}