@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Edit Payment Setting</h1>

    <form action="{{ url('admin/payment/update') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 mt-2 font-weight-bold text-primary">PayPal Information</h6>
                    </div>
                    <div class="card-body">                        
                        <div class="form-group">
                            <label for="">PayPal Environment</label>
                            <select name="paypal_environment" class="form-control">
                                <option value="sandbox" @if($g_setting->paypal_environment == 'sandbox') selected @endif>Sandbox</option>
                                <option value="production" @if($g_setting->paypal_environment == 'production') selected @endif>Production</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">PayPal Client ID</label>
                            <input type="text" name="paypal_client_id" class="form-control" value="{{ $general_setting->paypal_client_id }}">
                        </div>
                        <div class="form-group">
                            <label for="">PayPal Secret Key</label>
                            <input type="text" name="paypal_secret_key" class="form-control" value="{{ $general_setting->paypal_secret_key }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 mt-2 font-weight-bold text-primary">Stripe Information</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Stripe Public Key</label>
                            <input type="text" name="stripe_public_key" class="form-control" value="{{ $general_setting->stripe_public_key }}">
                        </div>
                        <div class="form-group">
                            <label for="">Stripe Secret Key</label>
                            <input type="text" name="stripe_secret_key" class="form-control" value="{{ $general_setting->stripe_secret_key }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-success btn-block">Update</button>
            </div>
        </div>
    </form>

@endsection