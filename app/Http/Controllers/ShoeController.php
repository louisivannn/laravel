<?php
namespace App\Http\Controllers;

use App\Models\Shoe;
use Illuminate\Http\Request;

class ShoeController extends Controller
{
    public function index()
    {
        $shoes = Shoe::paginate(10);
        return view('manage-stocks', compact('shoes'));
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:shoes,name',
            'brand' => 'required|string|max:255',
            'size' => 'required|string|max:10',
            'color' => 'required|string|max:50',
            'price' => 'required|numeric',
            'stock_quantity' => 'required|integer',
            'description' => 'required|string',

        ],[
            'name.required'=>'Name required',
            'name.unique' => 'This shoe name has already been taken.',
            'brand.required'=>'Brand required',
            'Size.required'=>'Size required',
            'color.required'=>'Color required',
            'price.required'=>'Price required',
            'stock_quantity.required'=>'Stock required',
            'description.required'=>'Description required',
            

        ]);

        Shoe::create($request->all());
        return redirect()->route('shoes.index')->with('success', 'Shoe added successfully!');
    }

    public function destroy(Shoe $shoe)
    {
        $shoe->delete();
        return redirect()->route('shoes.index')->with('success', 'Shoe deleted successfully!');
    }


    public function edit (Shoe $shoe){
        return view('edit-shoe', compact('shoe'));
    }

    public function update(Request $request, Shoe $shoe)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:shoes,name,' . $shoe->id
        ]);
    
        $shoe->update($request->all());
    
        return redirect()->route('shoes.index')->with('success', 'Shoe updated successfully!');
    }
}