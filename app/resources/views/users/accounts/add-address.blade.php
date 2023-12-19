@extends('layouts.app')
@section('content')
<main  class="main">
            <!-- breadcrumb -->
            <div class="page-header breadcrumb-wrap">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="{{ url('pages/home') }}" rel="nofollow">Home</a>
                        <span></span> Recent Views
                    </div>
                </div>
            </div>

            <section class="pt-50 pb-150">
                <div class="container">
                    <div class="row mb-8">
                        <div class="col-lg-12 m-auto">
                            <div class="row">
                                @include('users.accounts.sidebar')

                                
                                <div class="col-md-8">
                                   
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                Add New Address
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="card-body border">
                                        <div class="row">
                                           
                                           
                                            {{Form::open(['action'=>['ShippingController@Shipping', encrypt(1)], 'method'=>'POST'])}}
                                            {{csrf_field()}}
                                        <div class="row">
                                     <div class="mb-6 col-xl-6">
                                           <div class="js-form-message form-group mb-5">
                                                   <label class="form-label" for="RegisterSrEmailExample3">Receiver Name
                                                   </label>
                                                   <input type="address"  placeholder="Name" value="{{old('name')}}" name="name" class="form-control @error('name') is-invalid @enderror" required>
                                               
                                                </div>
                                               <div class="js-form-message form-group mb-5">
                                                   <label class="form-label" for="RegisterSrEmailExample3">Email
                                                   </label>
                                                   <input type="email"  placeholder="email" value="{{old('email')}}" name="email" class="form-control @error('email') is-invalid @enderror" required>
                                               </div>
                                               <div class="js-form-message form-group mb-5">
                                                   <label class="form-label"  for="RegisterSrEmailExample3">Phone
                                                   </label>
                                                   <input type="text" placeholder="phone" name="phone" value="{{old('phone')}}" class="form-control @error('phone') is-invalid @enderror"required>
                                               </div>

                                                
                                               <div class="js-form-message form-group mb-5">
                                                <label class="form-label" for="RegisterSrEmailExample3">Address
                                                </label>
                                                <input type="address"  placeholder="full Address" value="{{old('address')}}" name="address" class="form-control @error('address') is-invalid @enderror" required>
                                            </div>
                                            <div class="js-form-message form-group mb-5">
                                             <label class="form-label" for="RegisterSrEmailExample3">Postal Code
                                             </label>
                                             <input type="text" placeholder="postal code" name="zip_code" value="{{old('zip_code')}}" class="form-control" required >
                                            </div>
                                               </div>
                                             <div class="mb-6 col-xl-6">
                                               <div class="js-form-message form-group mb-5">
                                                   <label class="form-label" for="RegisterSrEmailExample3">City
                                                   </label>
                                                   <input type="text" placeholder="city" name="city" value="{{old('city')}}" class="form-control @error('city') is-invalid @enderror"required >
                                               </div>
                                               
                                               <div class="js-form-message form-group mb-5">
                                                   <label class="form-label" for="RegisterSrEmailExample3">State
                                                   </label>
                                                   <input type="text" placeholder="state" value="{{old('state')}}" name="state" class="form-control @error('state') is-invalid @enderror" required>
                                               </div>
                                               <div class="js-form-message form-group mb-5">
                                                <label class="form-label" for="RegisterSrEmailExample3">landmark
                                                </label>
                                                <input type="text" placeholder="landmark" value="{{old('landmark')}}"  name="landmark" class="form-control" required>
                                            </div>
                                            <div class="js-form-message form-group mb-5">
                                                <label class="form-label" for="RegisterSrEmailExample3">Country
                                                </label>
                                                <input type="text" placeholder="country"  value="{{old('country')}}" name="country" class="form-control" required>
                                            </div>
                                               <div style="display: flex; align-content:center">
                                                   <label  for="default" style="display: flex; align-items:center">
                                                    Set as Default: 
                                                   <input type="checkbox"  id="default" style="width:20px" value="1" name="default">

                                                </label>
                                               </div>
                                           
                                                </div> 
                                               </div>
                                              
                                            <div class="p-2"></div>
                                              
                                           <input type="submit" class="btn btn-primary  btn-sm w-25 px-5">
                                        </div>
                                               
                                            {{Form::close()}}

                                               
                                       </div>


                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- End Tab Content -->
                            </div>
                  

                            </div>
                        </div>
                    
                    </div>
                </div>
            </section>
</main>


@endsection