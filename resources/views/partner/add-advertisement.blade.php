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
                        <input type="text" name="advertisement-name" class="form-control" id="advertisement-name" placeholder="Advertisement Name" required/>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="contact-number" id="contact-number" placeholder="Contact Number" required>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6 form-group">
                        <select name="district[]" id="district" class="select2-district-dropdown form-control" multiple="multiple">
                            @foreach($districts as $district)
                                <option class="form-group col-12"  value="{{$district->id}}">{{$district->districts_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <select name="categories[]" id="categories" class="select2-category-dropdown form-control" multiple="multiple">
                            @foreach($categories as $category)
                                <option class="form-group col-12"  value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>

                <div class="form-group d-flex mt-3">
                    <label class="input-group-text" for="inputGroupFile">Main Image</label>
                    <input type="file" id="imgInp" name="image" class="form-control" placeholder="Image">
                </div>

                <div class="form-group d-flex mt-3">
                    <img id="blah" src="images/Dammy.png" alt="Profile Image" style="max-width: 200px;max-height: 200px;"/>
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

