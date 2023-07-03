@extends('layouts.dashboard-layouts.navbar-n-sidebars')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Your Advertisements</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Your Advertisements</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="container">
        <div class="row" id="ads">
            @foreach($advertisments as $advertisment)
                <div class="col-md-4 mb-5">
                    <div class="card rounded">
                        <div class="card-image">
                            <span class="card-notify-badge">Commission {{$advertisment->commission_percentage}} %</span>
                            <img class="img-fluid product-img" src="images/{{$advertisment->main_image}}" alt="Image"/>
                        </div>
                        <div class="card-image-overlay m-auto mt-1">
                            <span class="card-detail-badge advertisement_price" >Rs: {{$advertisment->addvertisement_price}}.00/=</span>
                            {{--                            <span class="card-detail-badge">13000 Kms</span>--}}
                        </div>
                        <div class="card-body text-center">
                            <div class="ad-title m-auto">
                                <h5>{{$advertisment->post_name}}</h5>
                            </div>
                            <a class="ad-btn" href="{{ route('showadvertisment',$advertisment->post_id) }}">View</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
    <br>
    <br>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans');
        @import url('https://fonts.googleapis.com/css?family=Montserrat');

        body {
            font-family: 'Montserrat', sans-serif;

        }

        /* Category Ads */

        #ads {
            margin: 30px 0 30px 0;

        }

        #ads .card-notify-badge {
            position: absolute;
            left: -10px;
            top: -20px;
            background: #f2d900;
            text-align: center;
            border-radius: 30px 30px 30px 30px;
            color: #000;
            padding: 5px 10px;
            font-size: 14px;

        }

        #ads .card-notify-year {
            position: absolute;
            right: -10px;
            top: -20px;
            background: #ff4444;
            border-radius: 50%;
            text-align: center;
            color: #fff;
            font-size: 14px;
            width: 50px;
            height: 50px;
            padding: 15px 0 0 0;
        }


        #ads .card-detail-badge {
            background: #f2d900;
            text-align: center;
            border-radius: 30px 30px 30px 30px;
            color: #000;
            padding: 5px 10px;
            font-size: 14px;
        }



        #ads .card:hover {
            background: #fff;
            box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        #ads .card-image-overlay {
            font-size: 20px;

        }


        #ads .card-image-overlay span {
            display: inline-block;
        }


        #ads .ad-btn {
            text-transform: uppercase;
            width: 150px;
            height: 40px;
            border-radius: 80px;
            font-size: 16px;
            line-height: 35px;
            text-align: center;
            border: 3px solid #e6de08;
            display: block;
            text-decoration: none;
            margin: 20px auto 1px auto;
            color: #000;
            overflow: hidden;
            position: relative;
            background-color: #e6de08;
        }

        #ads .ad-btn:hover {
            background-color: #e6de08;
            color: #1e1717;
            border: 2px solid #e6de08;
            background: transparent;
            transition: all 0.3s ease;
            box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
        }

        #ads .ad-title h5 {
            text-transform: uppercase;
            font-size: 18px;
        }

        .product-img{
            width: 350px;
            height: 260px;
            object-fit: contain;
        }
    </style>
    <script src="assets/js/Advertisement.js"></script>


@endsection

