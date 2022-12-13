@extends('layouts.main')
@section('content')

<div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                
            </div>
            <div class="card-body">
                <div class="alert alert-success mb-5 text-center">
                    YOGASANA PREMIER LEAGUE
                </div>

                <div class="alert alert-warning mb-5 text-center">
                    Pay a one-rupee amount using a convenient payment option such as credit card, debit card, or UPI. Contact our support team if you have any technical difficulties while making a payment.
                </div>
                
                <form action="{{ route('razorpay.payment.store') }}" method="POST" enctype="multipart/form-data" class="text-center">
                @csrf

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                            <h3>Amount: {{ $amount }}</h3>
                            <input type="hidden" name="round_id" value="{{ $round->id }}">
                            <input type="hidden" name="league_id" value="{{ $round->league_id }}">

                            @foreach($activity as $item)
                                <input type="hidden" name="activity[]" value="{{ $item }}">
                            @endforeach
                        </div>
                    </div>


                        <script src="https://checkout.razorpay.com/v1/checkout.js"
                            data-key="rzp_live_XHS7T4P0jLH0Zk"
                            data-amount="{{ $amount*100 }}"
                            data-buttontext="Pay {{ $amount }} INR"
                            data-name="YPL"
                            data-description="YOGASANA PREMIER LEAGUE"
                            data-image="https://ypl.yoga/public/img/yogasna_logo2.png"
                            data-prefill.name="{{ $name }}"
                            data-prefill.email="{{ $email }}"
                            data-prefill.contact="{{ $mobile }}"

                            data-theme.color="#ff7529">
                        </script>

                   
                </form>

            </div>
        </div>

    </div>
</div>

@endsection