@extends('layouts.admin')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/css/multi-select-tag.css">
<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/js/multi-select-tag.js"></script>

 <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                {{Form::open(['action' => 'ProductController@store', 'method'=>'post', 'enctype' => 'multipart/form-data'])}}
              @csrf
              <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Create Product</h6>
                            <div class="row">
                                <div class="col-md-12">
                                        <div class="form-group">
                                            <input required type="text" name="name"  value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1"
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
                                           <input required type="number" name="price"  value="{{old('price')}}" class="form-control @error('price') is-invalid @enderror" id="exampleInput"
                                                   aria-describedby="EventLocation" placeholder="Product Price">
                                            <small id="emailHelp" class="form-text text-muted">Product price per unit production 
                                            </small>
                                            @error('price')
                                            <span class="invalid-feedback"> <small> {{$message}} </small> </span>
                                            @enderror
                                        </div>
                                         </div>

                                        <div class="col-md-12">
                                          <div class="form-group">
                                            <input required type="number" name="sale_price"  value="{{old('sale_price')}}" class="form-control @error('price') is-invalid @enderror" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="Sale Price">
                                            <small id="emailHelp" class="form-text text-muted">Discounted Price
                                            </small>
                                            @error('sale_price')
                                            <span class="invalid-feedback"> <small> {{$message}}</small> </span>
                                            @enderror
                                          </div>           
                                        </div>

                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <label>Color of product</label>
                                            <select name="colors[]" id="color"  multiple required>
                                              @foreach ($colorproduct as $color )
                                                <option value="{{$color->name}}">{{$color->name}}</option>
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
                                            <label>Size of product</label>
                                            <select name="sizes[]" id="size"  multiple required>
                                                @foreach ($sizeproduct as $size )
                                                  <option value="{{$size->name}}">{{$size->name}}</option>
                                                @endforeach
                                               
                                            </select>
                                            <small id="emailHelp" class="form-text text-muted">Select Size 
                                            </small>
                                            @error('size')
                                            <span class="invalid-feedback"> <small> *</small> </span>
                                            @enderror
                                          </div>
                                        </div>

                                        {{-- <div class="col-md-6">
                                          <div class="form-group">
                                            <label>Variant Inventory</label> 
                                            <select name="variants[]" id="variants"  multiple>
                                             
                                                <option value="L-0">L-0</option>
                                                <option value="XL-1">XL-1</option>
                                                <option value="XXL-1">XXL-1</option>
                                                <option value="3XL-1">3XL-1</option>
                                                <option value="4XL-0">4XL-0</option>
                                                <option value="44-1">44-1</option>
                                                <option value="46-1">46-1</option>
                                                <option value="48-1">48-1</option>
                                                <option value="50-1">50-1</option>
                                                <option value="52-0">52-0</option>
                                            </select>
                                            <small id="emailHelp" class="form-text text-muted">Select Varient Inventory 
                                            </small>
                                            @error('size')
                                            <span class="invalid-feedback"> <small> *</small> </span>
                                            @enderror
                                          </div>
                                        </div> --}}

                                        <script>
                                            // new MultiSelectTag('variants', {
                                            //     rounded: true,    // default true
                                            //     shadow: true,      // default false
                                            //     placeholder: 'Search',  // default Search...
                                            //     onChange: function(values) {
                                            //         console.log(values)
                                            //     }
                                            // });
                                            new MultiSelectTag('color', {
                                                rounded: true,    // default true
                                                shadow: true,      // default false
                                                placeholder: 'Search',  // default Search...
                                                onChange: function(values) {
                                                    console.log(values)
                                                }
                                            });
                                            new MultiSelectTag('size', {
                                                rounded: true,    // default true
                                                shadow: true,      // default false
                                                placeholder: 'Search',  // default Search...
                                                onChange: function(values) {
                                                    console.log(values)
                                                }
                                            })
                                        </script>

                                      <div class="col-md-12">
                                         <div class="form-group">
                                           
                                           <select required value="{{old('category_id')}}" class="form-control @error('category_id') is-invalid @enderror" name="category_id"> 
                                          <option> SELECT CATEGORY </option>
                                           @foreach ($category as $cat )
                                                <option value="{{$cat->id}}"> {{$cat->name}} </option>
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
                                            
                                            <textarea required id="summernote" class="@error('description') is-invalid @enderror" name="description">{{old('description')}}</textarea>
                                            <small id="emailHelp" class="form-text text-muted">Product Description
                                                    </small>
                                                    @error('description')
                                                    <span class="invalid-feedback"> <small> *</small> </span>
                                                    @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 pt-4">
                                              <div class="custom-file">
                                            <input required type="file" name="image" class="custom-file-input  @error('image') is-invalid @enderror">
                                                <label class="custom-file-label" for="customFile">Choose Cover Image</label>
                                            </div>
                                            <small id="emailHelp" class="form-text text-muted"> Choose a cover image for design sample
                                            </small>
                                              @error('image')
                                            <span class="invalid-feedback"> <small> *</small> </span>
                                            @enderror
                                         </div>

                                         
                                               <div class="col-md-6 pt-4">
                                  <div class="custom-file">
                                            <input required type="file"name="images[]" multiple class="custom-file-input  @error('images') is-invalid @enderror" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose More Image</label>
                                            </div>
                                            <small id="emailHelp" class="form-text text-muted"> Choose more images of the design sample slides
                                            </small>
                                              @error('images')
                                            <span class="invalid-feedback"> <small> *</small> </span>
                                            @enderror
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
                             <button type="submit" class="btn btn-primary w-100 p-3">Add New Product</button>
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