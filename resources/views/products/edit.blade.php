@extends('layout')

@section('content')
<main class="login-form">
<div class="cotainer">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Product</div>
                <div class="card-body">

                    <form action="{{route('products.update',$product->id)}}" method="POST">
                        @csrf   
                        @method('PUT')
                        <div class="form-group row mt-3">
                            <label for="product_name" class="col-md-4 col-form-label text-right">Product Name</label>
                            <div class="col-md-6">
                                <input type="text" id="product_name" class="form-control" name="product_name" value="{{ old('product_name', $product->product_name) }}" required autofocus>
                                @if ($errors->has('product_name'))
                                    <span class="text-danger">{{ $errors->first('product_name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="qty" class="col-md-4 col-form-label text-right">QTY</label>
                            <div class="col-md-6">
                                <input type="text" id="qty" class="form-control" name="qty" value="{{ old('qty', $product->qty) }}" required autofocus>
                                @if ($errors->has('qty'))
                                    <span class="text-danger">{{ $errors->first('qty') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="selling_price" class="col-md-4 col-form-label text-right">Selling Price</label>
                            <div class="col-md-6">
                                <input type="text" id="selling_price" class="form-control" name="selling_price" value="{{ old('selling_price', $product->selling_price) }}" required>
                                @if ($errors->has('selling_price'))
                                    <span class="text-danger">{{ $errors->first('selling_price') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="buying_price" class="col-md-4 col-form-label text-right">Buying Price</label>
                            <div class="col-md-6">
                                <input type="text" id="buying_price" class="form-control" name="buying_price" value="{{ old('buying_price', $product->buying_price) }}" required>
                                @if ($errors->has('buying_price'))
                                    <span class="text-danger">{{ $errors->first('buying_price') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="product_type" class="col-md-4 col-form-label text-right">Product Type</label>
                            <div class="col-md-6">
                                <select class="form-select" id="product_type" name="product_type" aria-label="product_type">
                                    <option value="">Choose</option>
                                    @foreach($product_types as $val)
                                        <option value="{{$val->id}}" {{ ($product->Product_type_id ==$val->id) ? 'selected':'' }}>{{$val->product_type_name}}</option>
                                        @endforeach
                                </select>
                                @if ($errors->has('product_type'))
                                    <span class="text-danger">{{ $errors->first('product_type') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6 offset-md-4 mt-3 p-2 d-grid">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
@endsection