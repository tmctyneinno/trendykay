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
                                                Update Default Address
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="card-body border">
                                            {{Form::open(['action'=>['ShippingController@Shipping', encrypt($address->id)], 'method'=>'POST'])}}
                                            {{csrf_field()}}
                                        <div class="row">
                                     <div class="mb-6 col-xl-6">
                                           <div class="js-form-message form-group mb-5">
                                                   <label class="form-label" for="RegisterSrEmailExample3">Receiver
                                                   </label>
                                                   <input type="address"  placeholder="Name" value="{{$address->receiver_name}}" name="name" class="form-control">
                                               </div>
                                               <div class="js-form-message form-group mb-5">
                                                   <label class="form-label" for="RegisterSrEmailExample3">Address
                                                   </label>
                                                   <input type="address"  placeholder="full Address" value="{{$address->address}}" name="address" class="form-control">
                                               </div>
                                               <div class="js-form-message form-group mb-5">
                                                   <label class="form-label" for="RegisterSrEmailExample3">Email
                                                   </label>
                                                   <input type="email"  placeholder="email" value="{{$address->receiver_email}}" name="email" class="form-control" >
                                               </div>
                                               <div class="js-form-message form-group mb-5">
                                                   <label class="form-label"  for="RegisterSrEmailExample3">Phone
                                                   </label>
                                                   <input type="text" placeholder="phone" name="phone" value="{{$address->receiver_phone}}" class="form-control">
                                               </div>
                                               <div style="display: flex; align-content:center" >
                                                <label  for="default_address" class=""  style="display: flex; align-items:center" > 
                                                    Set as Default Address: <input type="checkbox"  id="default_address" style="width:20px" value="1" name="default" @if($address->is_default == 1) checked @endif>
                                            </label>
                                            </div>
                                               </div>
                                               <div class="mb-6 col-xl-6">
                                                <div class="js-form-message form-group mb-5">
                                                    <label class="form-label" for="RegisterSrEmailExample3">Postal Code
                                                    </label>
                                                    <input type="text" placeholder="postal code" name="zip_code" value="{{$address->zip_code}}" class="form-control" required >
                                                </div>
                                               <div class="js-form-message form-group mb-5">
                                                   <label class="form-label" for="RegisterSrEmailExample3">City
                                                   </label>
                                                   <input type="text" placeholder="city" name="city" value="{{$address->city}}" class="form-control" >
                                               </div>
                                               
                                               <div class="js-form-message form-group mb-5">
                                                   <label class="form-label" for="RegisterSrEmailExample3">State
                                                   </label>
                                                   <input type="text" placeholder="state" value="{{$address->state}}" name="state" class="form-control">
                                               </div>
                                               <div class="js-form-message form-group mb-5">
                                                <label class="form-label" for="RegisterSrEmailExample3">landmark
                                                </label>
                                                <input type="text" placeholder="landmark" value="{{$address->landmark}}" name="landmark" class="form-control" required>
                                            </div>
                                            <div class="js-form-message form-group mb-5">
                                                <label class="form-label" for="RegisterSrEmailExample3">Country
                                                </label>
                                                <input type="text" placeholder="country" value="{{$address->country}}" name="country" class="form-control" required>
                                            </div>
                                              
                                           
                                                </div> 
                                              
                                            <div class="p-2"></div>
                                           <input type="submit" name="update"  value="update Address" class="btn btn-primary  btn-sm w-25 px-5">
                                          
                                           
                                           {{-- &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; <a href="{{route('address.delete', encrypt($address->id))}}"  class="btn btn-sm w-25" style="background:red; color:#fff; float:right"> Delete </a> --}}
                                      
                                            {{Form::close()}}

                                            

                                       </div>
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