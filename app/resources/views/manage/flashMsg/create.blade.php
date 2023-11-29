@extends('layouts.admin')
@section('content')

        <!-- begin::page-header -->
 <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                {{Form::open(['action' => 'SettingsController@flashMsgUpdate', 'method'=>'post', 'enctype' => 'multipart/form-data'])}}
              @csrf
              <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">HomePage Flash Message</h6>
                            <div class="row">
                               
                                     <div class="col-md-6">
                                       <div class="form-group">
                                      <input type="text" name="title" placeholder="Title" value="{{$flashMsg->title??old('title')}}" class="form-control @error('title') is-invalid @enderror" >
                                            <small id="emailHelp" class="form-text text-muted">Enter title of the message
                                            </small>
                                            @error('title')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                         </div>
                                         <div class="col-md-6">
                                            <div class="form-group">
                                           <input type="text" name="sub_title" placeholder="Sub Title" value="{{$flashMsg->sub_title??old('sub_title')}}" class="form-control @error('sub_title') is-invalid @enderror" >
                                                 <small id="emailHelp" class="form-text text-muted">Enter Sub title of the message
                                                 </small>
                                                 @error('sub_title')
                                                 <span class="invalid-feedback"> <small> * </small> </span>
                                                 @enderror
                                             </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="form-group">
                                               <input type="text" name="content" placeholder="Sub Title" value="{{$flashMsg->content??old('content')}}" class="form-control @error('content') is-invalid @enderror" >
                                                     <small id="emailHelp" class="form-text text-muted">Enter Sub title of the message
                                                     </small>
                                                     @error('content')
                                                     <span class="invalid-feedback"> <small> * </small> </span>
                                                     @enderror
                                                 </div>
                                                  </div>
                                       <div class="col-md-6">
                                  <div class="custom-file">

                                            <input type="file"name="image" class="custom-file-input  @error('image') is-invalid @enderror" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose Image</label>
                                            </div>
                                            <small id="emailHelp" class="form-text text-muted">Upload Category Image
                                            </small>
                                              @error('image')
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
                        
                           <button type="submit" class="text-center btn btn-primary w-100 p-3 ">Update Flash Message</button>
                           </div>
                          
                           </div>
                           @if(isset($flashMsg))
                           <a href="{{route('admin.FlashMsgDelete')}}"  class=" btn btn-danger btn-sm ">Delete Flash Message</a> 
                           @endif
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

$('input[name="audition_date"]').daterangepicker({
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