<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Button;
use App\Models\ButtonCategory;

class ButtonController extends Controller
{
    // SHOW ALL CATEGORIES
    public function index()
    {
        $categories = ButtonCategory::latest()->get();

        return view('admin.button.buttons_category', compact('categories'));
    }

    // STORE CATEGORY
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'nullable|image',
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('uploads/button_categories'), $imageName);
        }

        ButtonCategory::create([
            'name' => $request->name,
            'image' => $imageName,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Category Added Successfully');
    }

    // UPDATE CATEGORY
    public function update(Request $request, $id)
    {
        $category = ButtonCategory::findOrFail($id);

        $imageName = $category->image;

        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('uploads/button_categories'), $imageName);
        }

        $category->update([
            'name' => $request->name,
            'image' => $imageName,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Category Updated Successfully');
    }

    // DELETE CATEGORY
    public function destroy($id)
    {
        $category = ButtonCategory::findOrFail($id);

        if ($category->image && file_exists(public_path('uploads/button_categories/' . $category->image))) {

            unlink(public_path('uploads/button_categories/' . $category->image));
        }

        $category->delete();

        return redirect()->back()->with('success', 'Category Deleted Successfully');
    }

    public function addbutton()
{
    $categories = ButtonCategory::where('status', 1)->latest()->get();

    return view('admin.button.add_buttons', compact('categories'));
}

   public function storebutton(Request $request)
{
    $request->validate([
        'name' => 'required',
        'button_category_id' => 'required',
        'image' => 'nullable|image',
    ]);

    $imageName = null;

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/buttons'), $imageName);
    }

    Button::create([
        'name' => $request->name,
        'button_category_id' => $request->button_category_id,
        'code' => $request->code,
        'color' => $request->color,
        'size' => $request->size,
        'stock' => $request->stock,
        'price' => $request->price,
        'material' => $request->material,
        'image' => $imageName,
        'description' => $request->description,
        'status' => $request->status ?? 1,
    ]);

    return back()->with('success', 'Button Added Successfully');
}

public function allbutton()
{
    $buttons = Button::with('category')->latest()->get();

    return view('admin.button.all_buttons', compact('buttons'));

}

public function editbutton($id)
{
    $button = Button::findOrFail($id);

    $categories = ButtonCategory::where('status',1)->get();

    return view('admin.button.add_buttons', compact('button','categories'));

}

public function destroybutton($id)
{
    $button = Button::findOrFail($id);

    if ($button->image && file_exists(public_path('uploads/buttons/' . $button->image))) {

        unlink(public_path('uploads/buttons/' . $button->image));
    }

    $button->delete();

    return redirect()->route('all.buttons')->with('success', 'Button Deleted Successfully');


}

public function updatebutton(Request $request, $id)
{
    $button = Button::findOrFail($id);

    $imageName = $button->image;

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/buttons'), $imageName);
    }

    $button->update([
        'name' => $request->name,
        'button_category_id' => $request->button_category_id,
        'code' => $request->code,
        'color' => $request->color,
        'size' => $request->size,
        'stock' => $request->stock,
        'price' => $request->price,
        'material' => $request->material,
        'image' => $imageName,
        'description' => $request->description,
        'status' => $request->status ?? 1,
    ]);

    return redirect()->route('all.buttons')->with('success', 'Button Updated Successfully');



}

public function buttonDetails($id)
{
    $button = Button::findOrFail($id);

    return view('frontend.button.button_details', compact('button'));
}

public function buttonAddToCart(Request $request)
{
    $button = Button::findOrFail($request->id);

    $cart = session()->get('cart', []);

    $id = 'button_' . $button->id;

    if(isset($cart[$id])){

        $cart[$id]['quantity'] += $request->quantity;

        $cart[$id]['total_price'] =
            $cart[$id]['price'] * $cart[$id]['quantity'];

    }else{

        $cart[$id] = [

            'type'        => 'button',
            'name'        => $button->name,
            'image'       => $button->image,
            'price'       => $button->price,
            'quantity'    => $request->quantity,
            'size'        => $button->size,
            'material'    => $button->material,
            'total_price' => $button->price * $request->quantity,

        ];

    }

    session()->put('cart', $cart);

    return redirect()->back()->with('success', 'Button added to cart successfully');
}

}