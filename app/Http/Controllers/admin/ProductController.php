<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BrandName;
use App\Models\Product;
use App\Models\ProductCategories;
use App\Models\ProductCategory;
use App\Models\Vehicles;
use DB;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function product()
    {
        $Products  = Product::select('product_category_id', 'id', 'product_name', 'description', 'sale_price', 'purchase_price', 'SKU', 'location', 'seller_id', 'stock_status', 'quantity', 'image', 'compatible_vehicle', 'discount', 'brand_name')->with(['category', 'BrandName','CompatibleVehicle' ])->get();
        return view('admin.products.product', ['Products' => $Products]);
    }
    public function addproduct()
    {
        $product_Categories = ProductCategory::get();
        $brands = BrandName::get();
        $vehicles = Vehicles::get();
        return view('admin.products.addproduct', ['prodcut_categories' => $product_Categories, 'vehicles' => $vehicles, 'brands' => $brands]);
    }


    public function saveProduct(Request $request)
    {
        $validatedData = $request->validate([
            'product_name' => 'required|string|max:255',
            'product_category_id' => 'required|exists:product_categories,id',
            'brand_name' => 'required|exists:brands,id',
            'compatible_vehicle' => 'required|exists:vehicles,id',
            'description' => 'nullable|string',
            'purchase_price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'SKU' => 'required|string|max:255|unique:products,SKU',
            'quantity' => 'required|numeric',
            'location' => 'nullable|string|max:255',
            'stock_status' => 'required|in:InStock,OutOfStock',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $validatedData['image'] = $imageName;
        }
        
        $saved = Product::create($validatedData);
        dd($saved);
        return redirect('admin/product')->with('message', 'Service deleted successfully');
    }

    public function addFetchCategory(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'cat' => 'required|string|max:255|unique:product_categories,product_category_name'
            ]);

            $newCategory = ProductCategory::create([
                'product_category_name' => $validatedData['cat']
            ]);

            $message = 'Category added successfully';
        } catch (ValidationException $e) {
            // If the category already exists, catch the exception and return an error message
            $message = 'Category already exists';
        }

        $categories = ProductCategory::all(["id", "product_category_name"]);

        return response()->json([
            'categories' => $categories,
            'newCategory' => isset($newCategory) ? $newCategory : null,
            'message' => $message
        ]);
    }



    public function editproduct()
    {
        return view('admin.products.editproduct');
    }
    public function viewproduct($id)
    {
        $product  = Product::select('product_category_id', 'product_name', 'description', 'sale_price', 'purchase_price', 'SKU', 'location', 'seller_id', 'stock_status', 'quantity', 'image', 'compatible_vehicle', 'discount', 'brand_name')->where('id', $id)->with(['category'])->first();
        return view('admin.products.viewproduct', ['product' => $product]);
    }
}
