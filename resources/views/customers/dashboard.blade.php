@extends('customers.header-n-footer')

@section('content')
    @foreach($product as $listproduct)
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">Product Details</h6>
                    <h1 class="mb-4">{{$listproduct->post_name}}</h1>
                    <p class="mb-4">{{$listproduct->description}}</p>
                    <h4 class="mb-4">{{$listproduct->addvertisement_price}}</h4>
                    <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Residential & commercial plumbing</p>
                    <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Quality services at affordable prices</p>
                    <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Immediate 24/ 7 emergency services</p>
                    <div class="col-4 mt-3">
                        <button class="btn btn-primary w-100 py-3" type="submit">Buy Now</button>
                    </div>
                </div>
                <div class="col-lg-6 pt-4" style="min-height: 500px;">
                    <div class="position-relative h-100 wow fadeInUp" data-wow-delay="0.5s">
                        <img class="position-absolute img-fluid w-100 h-100" src="../images/{{$listproduct->main_image}}" style="object-fit: cover; padding: 0 0 50px 100px;" alt="">
                        @foreach($sub_images as $sub_image)
                            <img class="position-absolute start-0 bottom-0 img-fluid bg-white pt-2 pe-2 w-50 h-50" src="../images/{{$sub_image}}" style="object-fit: cover;" alt="">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
