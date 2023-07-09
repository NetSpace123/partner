<div class="search-result">
    <div class="row">
        @foreach($advertisments as $advertisment)
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 mb-3">
                <div class="card"><img class="card-img-top product-img"
                                       src="images/{{$advertisment->main_image}}">
                    <div class="card-body">
                        <h6 class="font-weight-bold pt-1">{{$advertisment->post_name}}</h6>
                        <div class="d-flex align-items-center justify-content-between pt-3">
                            <div class="d-flex flex-column">
                                <div class="h6 font-weight-bold">Rs: {{$advertisment->addvertisement_price}}
                                    .00/
                                </div>
                                <div class="text-muted rebate">
                                    Commission {{$advertisment->commission_percentage}} %
                                </div>
                            </div>
                        </div>
                        <a class="ad-btn" href="{{ route('partner.singlead',$advertisment->post_id) }}">
                            <div class="btn btn-primary mt-3 mb-2">
                                Promote now
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        @endforeach

    </div>
</div>
