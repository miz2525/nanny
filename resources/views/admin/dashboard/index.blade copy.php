@extends('admin.layouts.app')

@section('page-title') {{ config('app.name', 'NannyGenie') }} - Dashboard @endsection

@section('styles') @endsection

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <h4 class="page-title">
                Dashboard
            </h4>
            

            <div id="stripe-area">
                <!-- Stripe Elements Placeholder -->
                <div id="card-element"></div>
                <button id="card-button" data-secret="" class="btn btn-primary waves-effect waves-light mt-2 mb-2 width-sm">
                    <div class="spinner hidden" id="spinner"></div>
                    <span id="button-text">Pay 500 {{config('payments.products.credit.currency')}}</span>
                </button>
            </div>
            <input type="hidden" value="" id='payment-status'>
            
            
            <div id="payment-success-modal" class="modal fade" data-toggle="modal" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content modal-filled bg-success">
                        <div class="modal-body p-4">
                            <div class="text-center">
                                <i class="dripicons-checkmark h1 text-white"></i>
                                <h4 class="mt-2 text-white">Well Done!</h4>
                                <p class="mt-3 text-white">You have added 10 credits into your account.</p>
                                {{-- <a href="/manage/settings/{{$payment_type}}" class="btn btn-light my-2">Close</a> --}}
                            </div>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->



        </div>
    </div>
</div>
<!-- end page title -->
@endsection

@section('scripts')
<script src="https://js.stripe.com/v3/"></script>
<script>
    // sk_test_51N55dnClsCFEfTZbP6D7A5Q4FOhAPr3Jn6RrQLiGurC78x1wdGoPyZXKuR2cLeLtOahD3d2ewFUNAnymbwoi6BZV003BwCUYgg
    // pk_test_51N55dnClsCFEfTZbWwnDVNZUSSYLS4DvX5v2iM7zNZdTm5oPOv59fSIDoApJUSldGZ68EDtEsac8xAWeEcew6aOb00JZMmyumg

    const stripeKey = "pk_test_51N55dnClsCFEfTZbWwnDVNZUSSYLS4DvX5v2iM7zNZdTm5oPOv59fSIDoApJUSldGZ68EDtEsac8xAWeEcew6aOb00JZMmyumg";
    const accountTitle = "Test Title";
    const paymentType = 'testing-payment';
    const stripe = Stripe(stripeKey);
    const elements = stripe.elements();
    const cardElement = elements.create('card');


    cardElement.mount('#card-element');


    // const cardHolderName = document.getElementById('card-holder-name');
    const cardButton = document.getElementById('card-button');
    const clientSecret = cardButton.dataset.secret;

    cardButton.addEventListener('click', async (e) => {
        loading(true);
        stripe.createPaymentMethod({
            type: 'card',
            card: cardElement,
            billing_details: {
            name: accountTitle,
            },
        }).then(function(result) {
            // Handle result.error or result.paymentMethod
            loading(false);
            console.log(result.paymentMethod.id);
            window.location.href = "/manage/customer/credit-payment/"+paymentType+"/"+result.paymentMethod.id;
            
        });
    });


    var loading = function(isLoading) {
        if (isLoading) {
            // Disable the button and show a spinner
            document.querySelector("button").disabled = true;
            document.querySelector("#spinner").classList.remove("hidden");
            document.querySelector("#button-text").classList.add("hidden");
        } else {
            document.querySelector("button").disabled = false;
            document.querySelector("#spinner").classList.add("hidden");
            document.querySelector("#button-text").classList.remove("hidden");
        }
    };


    if($('#payment-status').val()){
        $('#payment-success-modal').modal('show');
    }

//     var stripe = Stripe('pk_test_51N55dnClsCFEfTZbWwnDVNZUSSYLS4DvX5v2iM7zNZdTm5oPOv59fSIDoApJUSldGZ68EDtEsac8xAWeEcew6aOb00JZMmyumg');

//     var elements = stripe.elements({
//         clientSecret: 'CLIENT_SECRET',
//         mode: 'payment',
//         currency: 'usd',
//         amount: 1099,
//     });
//     elements.update({locale: 'fr'});
//     elements.submit()
//   .then(function(result) {
//     console.log(result);
//   });
// const stripe = Stripe('pk_test_51N55dnClsCFEfTZbWwnDVNZUSSYLS4DvX5v2iM7zNZdTm5oPOv59fSIDoApJUSldGZ68EDtEsac8xAWeEcew6aOb00JZMmyumg');
// const elements = stripe.elements();

// const stripe = Stripe('pk_test_51N55dnClsCFEfTZbWwnDVNZUSSYLS4DvX5v2iM7zNZdTm5oPOv59fSIDoApJUSldGZ68EDtEsac8xAWeEcew6aOb00JZMmyumg', {
//   apiVersion: "2022-11-15",
// });

</script>
@endsection
