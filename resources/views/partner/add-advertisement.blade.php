@extends('layouts.dashboard-layouts.navbar-n-sidebars')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Advertisement</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Advertisement</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Quick Example</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('storeadvertisement')}}" method="post" role="form" class="" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="label">Advertisement Name</label>
                                        <input type="text" name="advertisement-name" class="form-control" id="advertisement-name" placeholder="Enter your advertisement name" required/>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="label">Contact Number</label>
                                        <input type="tel" class="form-control" name="contact-number" id="contact-number" placeholder="Enter your Contact Number" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 form-group ">
                                        <label class="label">Select District</label>
                                        <select name="district[]" id="district" class="select2 form-control"  required>
                                            @foreach($districts as $district)
                                                <option class="form-group col-12"  value="{{$district->id}}">{{$district->districts_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0 ">
                                        <label class="label">Select Category</label>
                                        <select name="categories[]" id="categories" class="select2 form-control"  required>
                                            @foreach($categories as $category)
                                                <option class="form-group col-12"  value="{{$category->id}}">{{$category->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3 mt-3 form-group">
                                        <label class="label">Price (Rs) </label>
                                        <input type="number" id="addvertisement_price" name="addvertisement_price" class="form-control" placeholder="Enter Price" required/>
                                    </div>
                                    <div class="col-md-3 mt-3 form-group">
                                        <label class="label">Commission Percentage (%) </label>
                                        <input type="number" id="commission_percentage" name="commission_percentage" class="form-control" placeholder="Enter Commission Percentage" required/>
                                    </div>
                                    <div class="col-md-3 mt-3 form-group">
                                        <label class="label">Amount you get after selling</label>
                                        <input type="text" id="amt_after_selling" name="amt_after_selling" class="form-control" placeholder="" required readonly>
                                    </div>
                                    <div class="col-md-3 mt-3 form-group">
                                        <label class="label">Commission amount after selling</label>
                                        <input type="text" name="commission_amount_after_sale" class="form-control" id="commission_amount_after_sale" placeholder="" required readonly>
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
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Post Your Addvertisement</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

    <style>

        #multy-images{
            width: 90%;
            position: relative;
            margin: auto;
            display: flex;
            justify-content: space-evenly;
            gap: 20px;
            flex-wrap: wrap;
        }
        figure{
            width: 45%;
        }
        img{
            width: 100%;
        }
        figcaption{
            text-align: center;
            font-size: 2.4vmin;
            margin-top: 0.5vmin;
        }
        .hide{
            visibility: hidden;
        }

    </style>


    <script>

        //Calculate Commission Prices
        $("#addvertisement_price").on('change', function() {
            var addvertisement_price = document.getElementById("addvertisement_price").valueAsNumber;
            var commission_percentage = document.getElementById("commission_percentage").valueAsNumber;
            CalculateCommission(addvertisement_price,commission_percentage);
        });

        $("#commission_percentage").on('change', function() {
            var addvertisement_price = document.getElementById("addvertisement_price").valueAsNumber;
            var commission_percentage = document.getElementById("commission_percentage").valueAsNumber;
            CalculateCommission(addvertisement_price,commission_percentage);
        });

        function CalculateCommission(addvertisement_price, commission_percentage) {
            if (isNaN(addvertisement_price)){
                addvertisement_price = 0 ;
            }
            if (isNaN(commission_percentage)) {
                commission_percentage = 0;
            }

            let amt_after_selling = ( addvertisement_price ) - addvertisement_price * commission_percentage / 100 ;
            CurrancyFormatter(amt_after_selling , 'amt_after_selling');

            let commission_amount_after_sale = addvertisement_price * commission_percentage / 100 ;
            CurrancyFormatter(commission_amount_after_sale,'commission_amount_after_sale');

        }

        function CurrancyFormatter(total,type) {
            var type = type;
            var price = total;
            const resultinr = (price).toLocaleString('en-IN', {
                style: 'currency',
                currency: 'LKR'
            });

            if (type == "amt_after_selling" ){
                document.getElementById('amt_after_selling').value= resultinr;
            }
            else {
                document.getElementById('commission_amount_after_sale').value= resultinr;
            }
        }
    </script>

    <script src="assets/js/imageHandle.js"></script>

@endsection

