<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FabricCategory;
use App\Models\Fabric;
use App\Models\Button;
use App\Models\ButtonCategory;
use App\Models\User;

class MainIndexController extends Controller
{
    public function index()
    {
        $fabricCategories = FabricCategory::all();
        $fabrics = Fabric::latest()->take(15)->get();
        $buttonCategories = ButtonCategory::all();
        $buttons = Button::latest()->take(15)->get();
        $users = User::all();

        return view('frontend.home', compact('fabricCategories', 'fabrics', 'buttonCategories', 'buttons', 'users'));
    }

    public function fabric()
{
    $fabricCategories = FabricCategory::all();

    // Main Fabrics Pagination
    $fabrics = Fabric::latest()->paginate(12);

    // Top Rated Fabrics
    $topRatedFabrics = Fabric::orderBy('rating', 'DESC')
                            ->take(6)
                            ->get();

    return view('frontend.fabric.index', compact(
        'fabrics',
        'fabricCategories',
        'topRatedFabrics'
    ));
}

    public function fabricShow($id)
{
    $fabric = Fabric::findOrFail($id);

    // optional: related fabrics (same type/category)
    $relatedFabrics = Fabric::where('fabric_type', $fabric->fabric_type)
        ->where('id', '!=', $fabric->id)
        ->take(8)
        ->get();

    return view('frontend.fabric.fabric_show', compact('fabric', 'relatedFabrics'));
}

public function buttons()
{
    $buttonCategories = ButtonCategory::all();

    // Main Buttons
    $buttons = Button::latest()->paginate(12);

    // Top Rated Buttons
    $topRatedButtons = Button::orderBy('rating', 'DESC')
                            ->take(6)
                            ->get();

    return view('frontend.button.index', compact(
        'buttons',
        'buttonCategories',
        'topRatedButtons'
    ));
}


public function newArrivals()
{
    $fabricCategories = FabricCategory::all();
    $buttonCategories = ButtonCategory::all();

    // Latest Fabrics
    $latestFabrics = Fabric::latest()->take(12)->get();

    // Latest Buttons
    $latestButtons = Button::latest()->take(12)->get();

    return view('frontend.new_arrivals', compact(
        'latestFabrics',
        'latestButtons',
        'fabricCategories',
        'buttonCategories'
    ));
}





























}
