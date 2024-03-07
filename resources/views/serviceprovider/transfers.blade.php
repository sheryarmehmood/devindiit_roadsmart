@extends('serviceprovider.layouts.app')
@section('title', 'Transfers')
@section('head')
<style>

   .card-table .table td, 
   .card-table .table th
   {
      padding: 12px 0.75rem;  
   }
</style>
@endsection
@section('content')
   <div class="content container-fluid addorder">
      <div class="page-header">
         <div class="row">
            <div class="col">
               <h3 class="page-title d-flex align-items-center">Transfers</p>
            </div>
         </div>
      </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-table mb-3 transfermain_div">
                   <div class="card-body text-center">
                       <img class="transfer_img" alt="" src="{{ asset('assets/serviceprovider/img/transfer-icon.svg') }}">
                       <h2>Manage your incoming inventory</h2>
                       <p>You can track and receive incoming inventory from your suppliers and business locations.</p>
                       <a href="{{route('seller.create_transfer')}}" class="btn btn-primary">Create transfer</a>
                   </div>
                </div>
            </div>
        </div>      
    </div>  


@endsection