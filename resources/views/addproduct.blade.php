@extends('layout.master')

@section('content')
    <div class="product-section mt-150 mb-150">
        <div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center">
            <div class="row w-100">
                <div class="col-12 text-center">
                    <div class="section-title mb-4">
                        <h3><span class="orange-text">Add</span> Product</h3>
                    </div>


                    <form method="POST"   action="/storeproduct" id="fruitkha-contact" >
                        @csrf
                        
                        <div class="form-group mb-3">
                            <input type="text" class="form-control form-control-lg w-100" placeholder="Name" name="name" id="name">
                        </div>
                        <div class="form-group mb-3">
                            <input type="number" class="form-control form-control-lg w-100" placeholder="price" name="price" id="price">
                        </div>
                        <div class="form-group mb-3">
                            <input type="number" class="form-control form-control-lg w-100" placeholder="quantity" name="quantity" id="quantity">
                        </div>
                        <div class="form-group mb-3">
                            <textarea name="descripition" id="descripition" class="form-control w-100" cols="30" rows="5"
                                placeholder="descripition"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
