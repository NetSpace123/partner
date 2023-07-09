@extends('layouts.dashboard-layouts.navbar-n-sidebars')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">My Referral Codes</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">My Referral Codes</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <div class="container-fluid">
            <div class="col-sm-12">
                 <table id="referralTable" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th style="width: 40%">Advertisement Name</th>
                                <th style="width: 60%">Referral Link</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($referralcodes as $referralcode)
                            <tr>
                                <td>{{$referralcode['post_name']}}</td>
                                <td>
                                    <span id="referral-code">http://127.0.0.1:8000/rc/{{$referralcode['referral_code']}}</span> &nbsp;
                                    <button class="btn btn-secondary btn-sm" onclick="getReferralCode('http://127.0.0.1:8000/rc/{{$referralcode['referral_code']}}')">Copy link</button></td>

                            </tr>
                        @endforeach

                        </tbody>

                  </table>
            </div>
        </div>

        <div class="modal fade" id="done" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="border-left-width:3px;border-left-color: green">
                <div class="modal-content" style="border-left-width:3px;border-left-color: green">
                    <div class="modal-header">
                    <span class="modal-title">
                        <i class="fa fa-check" style="color:green"></i>
                        &nbsp;&nbsp; Copied !
                    </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script>
        new DataTable('#referralTable');

        $(document).on('click', '#txt-copy', function () {
            // Get the referral code to Clipboard
            let text = $('#referral-code').text();
            navigator.clipboard.writeText(text);
        });

        function getReferralCode(val){
            navigator.clipboard.writeText(val);
            $('#done').modal('show');
        }
    </script>
@endsection


