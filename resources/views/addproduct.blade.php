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
                            <input type="text" class="form-control form-control-lg w-100" placeholder="Name" name="name" id="name" value="old('name')">
                            <span>
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </span>
                        </div>
                        <div class="form-group mb-3">
                            <input type="number" class="form-control form-control-lg w-100" placeholder="price" name="price" value="old('price') id="price">
                            <span>
                                @error('price')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </span>
                        </div>
                        <div class="form-group mb-3">
                            <input type="number" class="form-control form-control-lg w-100" placeholder="quantity" name="quantity" id="quantity" value="{{ old('quantity') }}">
                          <span>
                                @error('quantity')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </span>
                        </div>
                        <div class="form-group mb-3">
                            <select name="category_id" id="category_id" class="form-control form-control-lg w-100">
                                <option value="">اختر القسم</option>
                                @foreach($categories as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                            <span>
                                @error('category_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </span>
                        </div>
                        <div class="form-group mb-3">
                            <textarea name="descripition" id="descripition" class="form-control w-100" cols="30" rows="5"
                                placeholder="descripition">
                            {{ old('descripition') }}
                            </textarea>
                                <span>
                                @error('descripition')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </span>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
