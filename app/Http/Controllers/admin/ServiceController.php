<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ServiceCategory;
use App\Models\Seller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Orders;
use App\Models\Vehicles;
use App\Models\UserAddresses;
use App\Models\Requests;
use App\Models\Services;

use Illuminate\Validation\Rule;

use DB;

class ServiceController extends Controller
{
    public function addservice()
    {

        $categories =  ServiceCategory::get();
        $sellers =  Seller::get();
        return view('admin.services.addservice', ['categories' => $categories, 'sellers' => $sellers]);
    }
    public function addSubservice()
    {
        return view('admin.services.SubServices.addSubservice');
    }

    public function editService($request)
    {
        $categories =  ServiceCategory::get();
        $sellers =  Seller::get();
        $service = services::select()->Where('id', $request)->first();
        return view('admin.services.editservice', [
            'categories' => $categories,
            'sellers' => $sellers,
            'service' => $service
        ]);
    }
    public function editsubService($request)
    {
        $categories =  ServiceCategory::get();
        $sellers =  Seller::get();
        $service = services::select()->Where('id', $request)->first();
        return view('admin.services.editservice', [
            'categories' => $categories,
            'sellers' => $sellers,
            'service' => $service
        ]);
    }


    public function services()
    {
        $services =  services::with(['category', 'serviceCategory', 'serviceSeller'])->get();
        return view('admin.services.services', ['services' => $services]);
    }
    public function subservices()
    {
        $services =  services::with(['category', 'serviceCategory', 'serviceSeller'])->get();
        return view('admin.services.SubServices.subservices', ['services' => $services]);
    }

    public function saveService(Request $request)
    {
        $category_name =  Category::select('id')->Where('name', 'like', '%' . 'service' . '%')->first();
        $formFields = $request->validate([
            'service_name' => 'required',
            'service_category' => 'required|exists:service_categories,id',
            'service_details' => 'required',
            'sellers' => 'required',
            'service_charges' => 'required',
            'service_location' => 'required',
            'service_status' => 'required'
        ]);

        $formFields['category'] = $category_name->id;
        services::create($formFields);


        return redirect('admin/services')->with('message', 'Service created successfully!');
    }
    public function updateService(Request $request, $id)
    {
        $service = services::findOrFail($id);
        $service->update([
            'service_name' => $request->input('service_name'),
            'service_category' => $request->input('service_category'),
            'sellers' => $request->input('sellers'),
            'service_details' => $request->input('service_details'),
            'service_charges' => $request->input('service_charges'),
            'service_location' => $request->input('service_location'),
            'service_status' => $request->input('service_status'),
        ]);

        return redirect('admin/services')->with('message', 'Service updated successfully');
    }
    public function updateSubService(Request $request, $id)
    {
        $service = services::findOrFail($id);
        $service->update([
            'service_name' => $request->input('service_name'),
            'service_category' => $request->input('service_category'),
            'sellers' => $request->input('sellers'),
            'service_details' => $request->input('service_details'),
            'service_charges' => $request->input('service_charges'),
            'service_location' => $request->input('service_location'),
            'service_status' => $request->input('service_status'),
        ]);

        return redirect('admin/services')->with('message', 'Service updated successfully');
    }

    public function deleteService($request)
    {
        $service = services::findOrFail($request);
        if (!$service) {
            return redirect()->back()->with('error', 'Service not found');
        }
        $service->delete();
        return redirect('admin/services')->with('message', 'Service deleted successfully');
    }
}
