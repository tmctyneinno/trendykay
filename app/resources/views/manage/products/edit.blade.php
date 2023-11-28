@extends('layouts.admin')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/css/multi-select-tag.css">
<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/js/multi-select-tag.js"></script>

 <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                {{Form::open(['action' => ['ProductController@update', encrypt($product->id)], 'method'=>'post', 'enctype' => 'multipart/form-data'])}}
              @csrf
              @method('put') 
              <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Edit Product</h6>
                            <div class="row"> 
                                <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="name"  value="{{$product->name}}" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="Product name">
                                            <small id="emailHelp" class="form-text text-muted">Product Name e.g Calender, Envelope
                                            </small>
                                            @error('name')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                    </div>
                                        <div class="col-md-12">
                                        <div class="form-group">
                                           <input type="text" name="price"  value="{{$product->price}}"class="form-control @error('price') is-invalid @enderror" id="exampleInput"
                                                   aria-describedby="EventLocation" placeholder="Product Price">
                                            <small id="emailHelp" class="form-text text-muted">Product price per unit production 
                                            </small>
                                            @error('price')
                                            <span class="invalid-feedback"> <small> {{$message}} </small> </span>
                                            @enderror
                                        </div>
                                         </div>

                                        <div class="col-md-6">
                                          <div class="form-group">
                                              <input type="text" name="sale_price"  value="{{$product->sale_price}}" class="form-control @error('sale_price') is-invalid @enderror" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="Sale Price">
                                              <small id="emailHelp" class="form-text text-muted">Price after discount
                                              </small>
                                              @error('sale_price')
                                              <span class="invalid-feedback"> <small> {{$message}}</small> </span>
                                              @enderror
                                          </div>           
                                      </div>

                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="sale_price"  value="{{$product->discount}}%" disabled class="form-control @error('sale_price') is-invalid @enderror" id="exampleInputEmail1"
                                                  aria-describedby="emailHelp" placeholder="Sale Price">
                                            <small id="emailHelp" class="form-text text-muted">Discount
                                            </small>
                                            @error('sale_price')
                                            <span class="invalid-feedback"> <small> {{$message}}</small> </span>
                                            @enderror
                                        </div>           
                                    </div>

                                      {{-- {{$product->colors}} --}}
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <select name="colors[]" id="colors">
                                            @foreach ($colorproduct as $color)
                                                <option value="{{ $color->name }}" {{ $color->name == optional($product->colors->first())->name  ? 'selected' : '' }}>
                                                    {{ $color->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        
                                          <small id="emailHelp" class="form-text text-muted">Select Color 
                                          </small>
                                          @error('color')
                                          <span class="invalid-feedback"> <small> *</small> </span>
                                          @enderror
                                        </div>
                                      </div>
                                      
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <select name="sizes[]" id="sizes"  multiple >
                                            @foreach ($sizeproduct as $size)
                                                <option value="{{ $size->name }}" {{ $size->name == optional($product->sizes->first())->name  ? 'selected' : '' }}>
                                                    {{ $size->name }}
                                                </option>
                                            @endforeach
                                          </select>
                                          <small id="emailHelp" class="form-text text-muted">Select Size 
                                          </small>
                                          @error('size')
                                          <span class="invalid-feedback"> <small> *</small> </span>
                                          @enderror
                                        </div>
                                      </div>

                                      <script>
                                       
                                        new MultiSelectTag('colors', {
                                            rounded: true,    // default true
                                            shadow: true,      // default false
                                            placeholder: 'Search',  // default Search...
                                            onChange: function(values) {
                                                console.log(values)
                                            }
                                        });
                                        new MultiSelectTag('sizes', {
                                            rounded: true,    // default true
                                            shadow: true,      // default false
                                            placeholder: 'Search',  // default Search...
                                            onChange: function(values) {
                                                console.log(values)
                                            }
                                        })
                                    </script>

                                    </div>           
                                  </div>

                                      <div class="col-md-6">
                                         <div class="form-group">
                                           
                                           <select class="form-control  @error('category_id') is-invalid @enderror" name="category_id"> 
                                           @foreach ($category as $cat )
                                                <option value="{{$cat->id}}" @if($product->category_id == $cat->id) checked @endif> {{$cat->name}} </option>
                                           @endforeach
                                           </select>
                                           <small id="emailHelp" class="form-text text-muted">Select Product Category
                                            </small>
                                            @error('category_id"')
                                            <span class="invalid-feedback"> <small> *</small> </span>
                                            @enderror
                                        </div>           
                              </div>
                                         <div class="col-md-12">
                                  <div class="form-group">
                                    
                                    <textarea id="summernote" name="description"> {{$product->description}}</textarea>
                                     <small id="emailHelp" class="form-text text-muted">Product Description
                                            </small>
                                            @error('description')
                                            <span class="invalid-feedback"> <small> *</small> </span>
                                            @enderror
                                    </div>


                                         </div>

                                         


                                               <div class="col-md-6">
                                  <div class="custom-file">
                                        <input type="file"name="image" class="custom-file-input  @error('image') is-invalid @enderror" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose Cover Image</label>
                                            </div>
                                            <small id="emailHelp" class="form-text text-muted"> Choose a cover image for design sample
                                            </small>
                                              @error('image')
                                            <span class="invalid-feedback"> <small> *</small> </span>
                                            @enderror
                                            <img src="{{asset('/images/products/'.$product->image)}}" width="100px" height="100px"> 
                                      
                                         </div>

                                         
                                               <div class="col-md-6">
                                                <div class="custom-file">
                                 
                                            <input type="file" name="images[]" multiple="" class="custom-file-input  @error('images') is-invalid @enderror" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose More Image</label>
                                            </div>
                                            <small id="emailHelp" class="form-text text-muted"> Choose more images of the design sample slides
                                            </small>
                                              @error('images')
                                            <span class="invalid-feedback"> <small> *</small> </span>
                                            @enderror
                                                 @php
                                      $dd = json_decode($product->gallery);
                                  @endphp
                                  @if(isset($dd) && count($dd) > 0)
                                  @foreach ($dd as $img )
                                    <img src="{{asset('/images/products/'.$img)}}" width="100px" height="100px"> 
                                  @endforeach
                                    @endif
                                         </div>
                                            
                            </div> 
                        </div>
                         
                    </div>
                         <div class="card">
                        <div class="card-body">
                        <div class="row">
                          <div class="col-md-4">
                          </div>
                          <div class="col-md-4">
                        <div class="p-5">
                             <button type="submit" class="btn btn-primary w-100 p-3">Update Product</button>
                           </div>
                           </div>
                           </div>
                        </div>
                        </div>
                    {{Form::close()}}

                    </div>
                        </div>
                    </div>
                   

@endsection
@section('script')
<script>



$('.clockpicker-example').clockpicker({
    autoclose: true
});

$('input[name="date"]').daterangepicker({
  singleDatePicker: true,
  showDropdowns: true
});

let message = {!! json_encode(Session::get('message')) !!};
let msg = {!! json_encode(Session::get('alert')) !!};
//alert(msg);
toastr.options = {
        timeOut: 3000,
        progressBar: true,
        showMethod: "slideDown",
        hideMethod: "slideUp",
        showDuration: 200,
        hideDuration: 200
    };
if(message != null && msg == 'success'){
toastr.success(message);
}else if(message != null && msg == 'error'){
    toastr.error(message);
}
</script>
@endsection