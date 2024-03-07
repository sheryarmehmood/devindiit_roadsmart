@extends('serviceprovider.layouts.app')

@section('title', 'Calender')
@section('content')

<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Calendar</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Calendar</li>
                </ul>
            </div>
                <!--div class="col-auto text-right float-right ml-auto">
                    <a href="#" class="btn btn-primary add-btn" data-toggle="modal" data-target="#add_event"><span><i class="fas fa-plus"></i></span> Create New</a>
                </div-->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="add_event" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Event</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Event Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Event Date <span class="text-danger">*</span></label>
                            <div class="cal-icon">
                                <input class="form-control datetimepicker" type="text">
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade none-border" id="my_event">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Event</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-success save-event submit-btn">Create event</button>
                    <button type="button" class="btn btn-danger delete-event submit-btn" data-dismiss="modal">Delete</button>
                </div>
            </div>
        </div>
        </div>
        <div class="modal fade" id="add_new_event">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Category</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label>Category Name</label>
                                <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name" />
                            </div>
                            <div class="form-group mb-0">
                                <label>Choose Category Color</label>
                                <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                    <option value="success">Success</option>
                                    <option value="danger">Danger</option>
                                    <option value="info">Info</option>
                                    <option value="primary">Primary</option>
                                    <option value="warning">Warning</option>
                                    <option value="inverse">Inverse</option>
                                </select>
                            </div>
                            <div class="submit-section">
                                <button type="button" class="btn btn-primary save-category submit-btn" data-dismiss="modal">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection