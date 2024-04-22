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
use App\Models\ServiceBundleServices;
use App\Models\ServiceBundleSubServices;
use App\Models\Services;
use App\Models\ServicesBundle;
use App\Models\SubServices;
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
        $services = services::get();
        return view('admin.SubServices.addSubservice', ['services' => $services]);
    }

    public function addservicebundle()
    {
        $services = services::get();
        return view('admin.servicebundles.addservicebundle', ['services' => $services]);
    }

    public function services()
    {
        $services =  services::with(['category', 'serviceCategory', 'serviceSeller'])->get();
        return view('admin.services.services', ['services' => $services]);
    }

    public function viewService($id)
    {
        $services = subservices::where('service_id', $id)->get();
        return view('admin.services.viewservice', ['services' => $services]);
    }

    public function editService($id)
    {
        $categories =  ServiceCategory::get();
        $sellers =  Seller::get();
        $service = services::select()->Where('id', $id)->first();
        return view('admin.services.editservice', [
            'categories' => $categories,
            'sellers' => $sellers,
            'service' => $service
        ]);
    }

    public function editsubService($id)
    {
        $parent_services = Services::get();
        $service = SubServices::where('id', $id)->first();
        return view('admin.SubServices.editsubservice', [
            'parent_services' => $parent_services,
            'service' => $service
        ]);
    }

    public function subservices()
    {
        $services =  SubServices::with(['service'])->get();
        return view('admin.SubServices.subservices', ['services' => $services]);
    }

    public function bundleServices()
    {
        $services =  ServicesBundle::get();
        return view('admin.servicebundles.bundleServices', ['services' => $services]);
    }

    public function saveService(Request $request)
    {
        dd($request);
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

    public function saveSubService(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'service_id' => 'required',
            'service_details' => 'required',
            'price' => 'required',
            'brand_name' => 'required',
            'status' => 'required',
        ]);

        SubServices::create($formFields);
        return redirect('admin/subservices')->with('message', 'Service created successfully!');
    }

    public function savebundleService(Request $request)
    {
        //dd($request);
        // Validate the form fields
        $validatedData = $request->validate([
            'name' => 'required',
            'service_details' => 'required',
            'service_charges' => 'required',
            'service_location' => 'required',
            'services' => 'array',
            'sub_services' => 'array',
            'service_status' => 'required',
            'Services_json' => 'required' // Ensure 'Services_json' is an array
        ]);
        //json_encode($validatedData['services']);
        //$arrayString = $validatedData['Services_json'];

        $service_bundle = ServicesBundle::create([
            'name' => $validatedData['name'],
            'services' => json_encode($validatedData['services']),
            'sub_services' => json_encode($validatedData['sub_services']),
            'description' => $validatedData['service_details'],
            'price' => $validatedData['service_charges'],
            'bundle_image' => $validatedData['service_location'],
            'status' => $validatedData['service_status']
        ]);



        foreach ($validatedData['services'] as $service) {
            ServiceBundleServices::create([
                'service_bundle_id' => $service_bundle['id'],
                'service_id' => $service
            ]);
        }

        foreach ($validatedData['sub_services'] as $subService) {
            ServiceBundleSubServices::create([
                'service_bundle_id' => $service_bundle['id'],
                'sub_service_id' => $subService
            ]);
        }


        return redirect('admin/bundleServices')->with('message', 'Bundle created successfully!');
    }

    public function editbundleservice($id)
    {
        $services = services::get();
        $bundle = ServicesBundle::where('id', $id)->first();
        return view('admin.servicebundles.editbundleservice', [
            'services' => $services,
            'bundle' => $bundle
        ]);
    }
    public function viewbundleservice($id)
    {
        $bundle = ServicesBundle::where('id', $id)->first();
        $services = Services::get();
        $subServices = SubServices::get();
        return view('admin.servicebundles.viewbundleservice', [
            'services' => $services,
            'bundle' => $bundle,
            'subServices' => $subServices
        ]);
    }

    public function updatebundleservice(Request $request, $id)
    {

        $service_bundle = ServicesBundle::findOrFail($id);
        $service_bundle->update([
            'name' => $request->input('name'),
            'services' => json_encode($request->input('services')),
            'sub_services' => json_encode($request->input('sub_services')),
            'description' => $request->input('service_details'),
            'price' => $request->input('service_charges'),
            'bundle_image' => $request->input('service_location'),
            'status' => $request->input('service_status')
        ]);

        $validatedData['services'] = $request['services'];
        $validatedData['sub_services'] = $request['sub_services'];

        if ($validatedData['services'] && $validatedData['sub_services']) {
            // Update services
            foreach ($validatedData['services'] as $service) {
                ServiceBundleServices::updateOrCreate(
                    ['service_bundle_id' => $id, 'service_id' => $service],
                    ['service_id' => $service]
                );
            }

            // Update sub services
            foreach ($validatedData['sub_services'] as $subService) {
                ServiceBundleSubServices::updateOrCreate(
                    ['service_bundle_id' => $id, 'sub_service_id' => $subService],
                    ['sub_service_id' => $subService]
                );
            }
        }

        return redirect('admin/bundleServices')->with('message', 'Bundle Updated successfully!');
    }

    public function deletebundleService($id)
    {
        $service = ServicesBundle::findOrFail($id);
        $bundleservice = ServiceBundleServices::where('service_bundle_id', $id)->first();
        $subservice = ServiceBundleSubServices::where('service_bundle_id', $id)->first();
        if (!$service) {
            return redirect()->back()->with('error', 'Service not found');
        }
        if ($bundleservice) {
            $bundleservice->delete();
        }
        if ($subservice) {
            $subservice->delete();
        }
        $service->delete();
        return redirect('admin/bundleServices')->with('message', 'Bundle deleted successfully');
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
        $service = SubServices::findOrFail($id);
        $service->update([
            'name' => $request->input('name'),
            'service_id' => $request->input('service_id'),
            'service_details' => $request->input('service_details'),
            'price' => $request->input('price'),
            'brand_name' => $request->input('brand_name'),
            'status' => $request->input('status'),
        ]);

        return redirect('admin/subservices')->with('message', 'Service updated successfully');
    }

    public function deleteService($id)
    {
        $service = services::findOrFail($id);
        if (!$service) {
            return redirect()->back()->with('error', 'Service not found');
        }
        $service->delete();
        return redirect('admin/services')->with('message', 'Service deleted successfully');
    }

    public function deletesubService($id)
    {
        $service = SubServices::findOrFail($id);
        if (!$service) {
            return redirect()->back()->with('error', 'Service not found');
        }
        $service->delete();
        return redirect('admin/subservices')->with('message', 'Service deleted successfully');
    }

    //api for service Bundles
    public function fetchsubservices(Request $request)
    {
        $serviceId = $request->input('Service_id');
        $subserviceData['services'] = SubServices::where('service_id', $serviceId)->get(["name", "id"]);
        return response()->json($subserviceData);
    }
}
