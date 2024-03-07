@extends('serviceprovider.layouts.app')
@section('title', 'View Products')
@section('content')
    <div class="content container-fluid viewproduct_page">
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">View Product</h3>
                </div>
                 <div class="col text-right">
                   <a href="{{route('seller.products')}}" class="btn btn-primary">Back</a>
                </div>
               
            </div>
        </div>
        <div class="row">
            <!--div class="col-md-3">
                <div class="service-image-detail">
                    <img src="assets/img/engine.jpg">
                    <h5>Engine</h5>
                </div>
            </div-->
            <div class="col-md-12">
                <div class="card addpad">
                    <div class="card-body">
                        <div class="viewBox">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Product Type</th>
                                        <td>Parts</td>
                                   </tr>
                                    <tr>
                                        <th>Title</th>
                                        <td>Break Pad and Rotor</td>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</td>
                                    </tr>
                                    <tr>
                                        <th>Brand</th>
                                        <td>Break Pad and Rotor</td>
                                    </tr>
                                    <tr>
                                        <th>Condition</th>
                                        <td>New</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card addpad">
                    <div class="card-body">
                        <h4 class="cardTitle">Offer</h4>
                        <div class="viewBox">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Format</th>
                                        <td>Fixed Price</td>
                                    </tr>
                                    <tr>
                                        <th>Price</th>
                                        <td>$30.00</td>
                                    </tr>
                                    <tr>
                                        <th>Discount & Type</th>
                                        <td>15% off up to $ 199.00</td>
                                    </tr>
                                    <tr>
                                        <th>Usage Unit</th>
                                        <td>2</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card addpad">
                    <div class="card-body">
                        <h4 class="cardTitle">Inventory</h4>
                        <div class="viewBox">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>SKU</th>
                                        <td>ABC12345</td>
                                    </tr>
                                    <tr>
                                        <th>Product Code</th>
                                        <td>XX123</td>
                                    </tr>
                                    <tr>
                                        <th>Location</th>
                                        <td> St Matthews Ave, Winnipeg</td>
                                    </tr>
                                    <tr>
                                        <th>Quantity</th>
                                        <td>2</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card addpad">
                    <div class="card-body">
                        <h4 class="cardTitle">Shipping</h4>
                        <div class="viewBox">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Weight</th>
                                        <td>10kg</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card addpad">
                    <div class="card-body">
                        <h4 class="cardTitle">Options</h4>
                        <div class="viewBox">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Option Name</th>
                                        <td>Size</td>
                                    </tr>
                                    <tr>
                                        <th>Option Values</th>
                                        <td>Medium</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card addpad">
                    <div class="card-body">
                        <h4 class="cardTitle">Media</h4>
                        <div class="viewBox">
                            <img class="viewproduct_img" src="{{ asset('assets/serviceprovider/img/engine.jpg') }}">
                        </div>
                    </div>
                </div>
                <div class="card addpad">
                    <div class="card-body">
                        <h4 class="cardTitle">Fitment Details</h4>
                        <div class="viewBox">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Make</th>
                                        <td>2020</td>
                                    </tr>
                                    <tr>
                                        <th>Model</th>
                                        <td>2020</td>
                                    </tr>
                                    <tr>
                                        <th>Year</th>
                                        <td>2020</td>
                                    </tr>
                                    <tr>
                                        <th>Submodel</th>
                                        <td>Ranger</td>
                                    </tr>
                                    <tr>
                                        <th>Variant</th>
                                        <td>330</td>
                                    </tr>
                                    <tr>
                                        <th>Engine</th>
                                        <td>330i</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card addpad">
                    <div class="card-body">
                        <h4 class="cardTitle">Product Organization</h4>
                        <div class="viewBox">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Type</th>
                                        <td>Break Pad</td>
                                    </tr>
                                    <tr>
                                        <th>Vendor</th>
                                        <td>Smart Store</td>
                                    </tr>
                                    <tr>
                                        <th>Bundle</th>
                                        <td>Bundle</td>
                                    </tr>
                                    <tr>
                                        <th>Tags</th>
                                        <td><span class="badgeproduct_tag">Urgent</span><span class="badgeproduct_tag">Wholesale</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection