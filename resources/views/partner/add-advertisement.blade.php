@extends('layouts.master-layout')

@section('title', 'Add Advertisement')

@section('content')
    @include('layouts.partners-header')

    <section class="features mt-5">
        <div class="container align-content-center center" data-aos="fade-up">
            <center>
                <h1>Post Your Advertisement</h1>
            </center>
        </div>
        <div class="container mt-5" data-aos="fade-up">
            <form action="{{route('storeadvertisement')}}" method="post" role="form" class="" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label class="label">- Advertisement Name</label>
                        <input type="text" name="advertisement-name" class="form-control" id="advertisement-name" placeholder="Enter your advertisement name" required/>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <label class="label">- Contact Number</label>
                        <input type="tel" class="form-control" name="contact-number" id="contact-number" placeholder="Enter your Contact Number" required>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6 form-group ">
                        <label class="label">- Select District</label>
                        <select name="district[]" id="district" class="select2-district-dropdown select2 form-control"  required>
                            @foreach($districts as $district)
                                <option class="form-group col-12"  value="{{$district->id}}">{{$district->districts_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0 ">
                        <label class="label">- Select Category</label>
                        <select name="categories[]" id="categories" class="select2-category-dropdown form-control select2" required>
                            @foreach($categories as $category)
                                <option class="form-group col-12"  value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 mt-3 form-group">
                        <label class="label">- Price (Rs) </label>
                        <input type="number" id="addvertisement_price" name="addvertisement_price" class="form-control" id="advertisement-name" placeholder="Enter Price" required/>
                    </div>
                    <div class="col-md-3 mt-3 form-group">
                        <label class="label">- Commission Percentage (%) </label>
                        <input type="number" id="commission_percentage" name="commission_percentage" class="form-control" id="advertisement-name" placeholder="Enter Commission Percentage" required/>
                    </div>
                    <div class="col-md-3 mt-3 form-group">
                        <label class="label">- Amount you get after selling</label>
                        <input type="text" id="amt_after_selling" name="advertisement-name" class="form-control" id="advertisement-name" placeholder="" required readonly>
                    </div>
                    <div class="col-md-3 mt-3 form-group">
                        <label class="label">- Commission amount after selling</label>
                        <input type="text" name="advertisement-name" class="form-control" id="commission_amount_after_sale" placeholder="" required readonly>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <label class="label">- Description</label>
                    <textarea class="form-control" name="description" rows="5" placeholder="Enter Description" required></textarea>
                </div>

                <div class="form-group d-flex mt-3">
                    <label class="input-group-text" for="inputGroupFile">Main Image</label>
                    <input type="file" id="imgInp" name="image" class="form-control" placeholder="Image">
                </div>

                <div class="form-group d-flex mt-3">
                    <img id="blah" src="1" alt="Profile Image" style="max-width: 200px;max-height: 200px;"/>
                </div>

                <div class="form-group d-flex mt-3">
                    <label class="input-group-text" for="">Sub Images</label>
                    <input type="file" id="file-input" accept="image/png, image/jpeg" name="images[]" multiple onchange="preview()" class="form-control" placeholder="Main Image">
                </div>
                <div class="form-group d-flex mt-3">
                    <p id="num-of-files" class="hide">No Files Chosen</p>
                    <div>
                        <div id="multy-images"></div>
                    </div>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary mt-3">Post Your Addvertisement
                        <i class="bi bi-arrow-up-right" style="color: white;"></i>
                    </button>
                </div>

            </form>

        </div>
    </section><!-- End Features Section -->

    <script src="assets/js/imageHandle.js"></script>

    @include('layouts.partners-footer')
@endsection


