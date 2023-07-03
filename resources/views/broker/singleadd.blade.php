@extends('layouts.dashboard-layouts.navbar-n-sidebars')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{$singleAdd[0]->post_name}} Advertisement</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">{{$singleAdd[0]->post_name}} Advertisement</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="container">
        <div class="card mb-5">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">
                        <div class="preview-pic tab-content" style="width: 75%">
                            <div class="tab-pane active" id="pic-101"><img src="../images/{{$main_image}}" /></div>
                            @foreach($sub_images as $key => $sub_image)
                                <div class="tab-pane" id="pic-{{$key}}"><img src="../images/{{$sub_image}}"  /></div>
                            @endforeach
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                            <li class="active"><a data-target="#pic-101" data-toggle="tab"><img src="../images/{{$main_image}}" /></a></li>
                            @foreach($sub_images as $key => $sub_image)
                                <li><a data-target="#pic-{{$key}}" data-toggle="tab"><img src="../images/{{$sub_image}}"/></a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="details col-md-6">
                        <h3 class="product-title heading"><strong>{{$singleAdd[0]->post_name}} </strong><h3>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6><i class="fa fa-map-marker"> </i> &nbsp;&nbsp; {{$singleAdd[0]->district->districts_name}}</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6><i class="far fa-copy"> </i> &nbsp;&nbsp; {{$singleAdd[0]->category->category_name}}</h6>
                                    </div>
                                </div>
                                <h5 class="price">Price: Rs : <span>{{$singleAdd[0]->addvertisement_price}}.00 /=</span></h5>
                                <h5 class="price">Commission Percentage: <span>{{$singleAdd[0]->commission_percentage}} %</span></h5>
                                <p class="product-description">Description : {{$singleAdd[0]->description}} </p>
                                <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>

                                <div class="action">
                                    <a class="btn btn-warning referral-btn" data-url="{{ route('get.referral.code', $singleAdd[0]->post_id) }}"
                                       id="show-user" href="javascript:void(0)">Get Referral Code </a>
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="ReferralShowModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Copy your Referral Code</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Referral Code :</strong> <span id="referral-code"></span></p>
                    <button class="btn btn-secondary"  id="txt-copy" >Copy link</button>
                </div>
            </div>
        </div>
    </div>

    <style>

        body {
            font-family: 'open sans';
            overflow-x: hidden; }

        img {
            max-width: 100%; }

        .preview {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column; }
        @media screen and (max-width: 996px) {
            .preview {
                margin-bottom: 20px; } }

        .preview-pic {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1; }

        .preview-thumbnail.nav-tabs {
            border: none;
            margin-top: 15px; }
        .preview-thumbnail.nav-tabs li {
            width: 18%;
            margin-right: 2.5%; }
        .preview-thumbnail.nav-tabs li img {
            max-width: 100%;
            display: block; }
        .preview-thumbnail.nav-tabs li a {
            padding: 0;
            margin: 0; }
        .preview-thumbnail.nav-tabs li:last-of-type {
            margin-right: 0; }

        .tab-content {
            overflow: hidden; }
        .tab-content img {
            width: 100%;
            -webkit-animation-name: opacity;
            animation-name: opacity;
            -webkit-animation-duration: .3s;
            animation-duration: .3s; }

        .card {
            background: #eee;
            padding: 3em;
            line-height: 1.5em; }

        @media screen and (min-width: 997px) {
            .wrapper {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex; } }

        .details {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column; }

        .colors {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1; }

        .product-title, .price, .sizes, .colors {
            text-transform: UPPERCASE;
            font-weight: bold; }

        .checked, .price span {
            color: #ff9f1a; }

        .product-title, .rating, .product-description, .price, .vote, .sizes {
            margin-bottom: 15px; }

        .product-title {
            margin-top: 0; }

        .size {
            margin-right: 10px; }
        .size:first-of-type {
            margin-left: 40px; }

        .color {
            display: inline-block;
            vertical-align: middle;
            margin-right: 10px;
            height: 2em;
            width: 2em;
            border-radius: 2px; }
        .color:first-of-type {
            margin-left: 20px; }

        .add-to-cart, .like {
            background: #ff9f1a;
            padding: 1.2em 1.5em;
            border: none;
            text-transform: UPPERCASE;
            font-weight: bold;
            color: #fff;
            -webkit-transition: background .3s ease;
            transition: background .3s ease; }
        .add-to-cart:hover, .like:hover {
            background: #b36800;
            color: #fff; }

        .not-available {
            text-align: center;
            line-height: 2em; }
        .not-available:before {
            font-family: fontawesome;
            content: "\f00d";
            color: #fff; }

        .orange {
            background: #ff9f1a; }

        .green {
            background: #85ad00; }

        .blue {
            background: #0076ad; }

        .tooltip-inner {
            padding: 1.3em; }

        .heading{
            color: #ff9f1a;
        }

        @-webkit-keyframes opacity {
            0% {
                opacity: 0;
                -webkit-transform: scale(3);
                transform: scale(3); }
            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1); } }

        @keyframes opacity {
            0% {
                opacity: 0;
                -webkit-transform: scale(3);
                transform: scale(3); }
            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1); } }

    </style>
    <script src="../assets/js/Advertisement.js"></script>

    <script type="text/javascript">

        $(document).ready(function () {
            /* When click show user */
            $('body').on('click', '.referral-btn', function () {
                var userURL = $(this).data('url');
                $.get(userURL, function (data) {
                    $('#ReferralShowModal').modal('show');
                    $('#referral-code').text(data);
                })
            });
        });

        $(document).on('click', '#txt-copy', function () {
            // Get the text field
            var dummyContent = $('#referral-code').text();
            // Add it to the document

                var copyTextarea = dummyContent;
                copyTextarea.select();
                try {
                    var successful = document.execCommand('copy');
                    var msg = successful ? 'successful' : 'unsuccessful';
                    console.log('Copying text command was ' + msg);
                } catch (err) {
                    console.log('Oops, unable to copy');
                }
                return false;

        });

    </script>

@endsection

