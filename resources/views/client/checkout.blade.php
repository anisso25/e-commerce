@extends('layouts.app2')
@section('contenu')
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item active">Checkout</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Checkout Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Billing form</span></h5>
                <div class="bg-light p-30 mb-5">

                    <form action="{{ route('payer') }}" id="checkout-form" method="POST" class="billing-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Full Name</label>
                                <input class="form-control" type="text" name="name" placeholder="John Doe">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Address</label>
                                <input class="form-control" type="text" name="address" placeholder="123 Street">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Name on Card</label>
                                <input class="form-control" type="text" name="card-name" placeholder="Name on Card">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Number</label>
                                <input class="form-control" type="text" name="card-number" placeholder="Number">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Expiration Month</label>
                                <input class="form-control" type="text" name="card-expiry-month" placeholder="Expiration Month">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Expiration Year</label>
                                <input class="form-control" type="text" name="card-expiry-year" placeholder="Expiration Year">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>CVC</label>
                                <input class="form-control" type="text" name="card-cvc" placeholder="123">
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="bg-light p-30">
                                    <input type="submit" class="btn btn-block btn-primary font-weight-bold py-3" value="Payer">
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-lg-4">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Order Total</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pt-3 pb-2">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Article(s)</h6>
                            <h6 class="font-weight-medium">prox</h6>
                        </div>

                        @foreach ($products as $product )
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">{{ $product['product_name'] }}</h6>
                            <h6 class="font-weight-medium">${{ $product['prix'] }}</h6>
                        </div>
                        @endforeach

                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>${{ Session::get('cart')->totalPrice }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout End -->
@endsection

{{-- script checkout --}}
<script src="https://js.stripe.com/v2/"></script>
<script src="/public/checkout.js"></script>
