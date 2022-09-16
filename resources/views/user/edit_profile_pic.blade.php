@extends('frontend.master')
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles')}}/contact_styles.css">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles')}}/contact_responsive.css">
@section('title','Edit Profile')

@section('mainContent')
<br><br>
<div class="container">
    <div class="row ">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <strong>{{ __('Edit Profile') }}</strong>
                              <!-- @if ($errors->any())
                                  <div class="alert alert-danger">
                                      <ul>
                                          @foreach ($errors->all() as $error)
                                              <li>{{ $error }}</li>
                                          @endforeach
                                      </ul>
                                  </div>
                              @endif -->
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ url('user/update/profile/pic/'.$user->id) }}" enctype="multipart/form-data" aria-label="{{ __('Reset Password') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-4">
                                <input class="form-control" type="text" name="name" value="{{ $user->name }}" >

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-4">
                                <input class="form-control" type="text" name="username" value="{{ $user->username }}" >

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                            <div class="col-md-4">
                                <input class="form-control" type="text" name="phone" value="{{ $user->phone }}" >
                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="oldpass" class="col-md-4 col-form-label text-md-right">{{ __('New Profile Picture') }}</label>

                            <div class="col-lg-4">
                             
                               <label class="custom-file">
                                 <input type="file" id="file" class="custom-file-input" name="image" onchange="readURL(this);"  accept="image">
                                  <span class="custom-file-control"></span><br>
                                  <input type="hidden" name="old_image" value="{{ $user->image }}">
                                  <img src="{{ URL::to($user->image) }}" style="height: 80px; width: 100px; padding-left: 0px;" id="one" >
                                </label>
                              </div>
                        </div>

                        

                        
<br><br><br><br><br>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4">
                 <div class="card" style="width: 18rem;">
                  <br>
                  <img src="{{ URL::to($user->image) }}" class="card-img-top" style="height: 90px; width: 90px; margin-left: 34%; border-radius: 50%;" >
                  <div class="card-body">
                    <h5 class="card-title text-center">{{ Auth::user()->name }}</h5>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <a href="{{ route('user.password.change') }}"> Password Change </a>
                    </li>
                    <li class="list-group-item">
                      <a href=""> Edit Profile </a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ route('user.success.orderlist') }}"> Return Order </a>
                    </li>
                  </ul>
                  <div class="card-body">
                    <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Logout</a>
                  </div>
                </div>
               </div>
    </div>
</div>
<br><br>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script type="text/javascript">
  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#one')
                  .attr('src', e.target.result)
                  .width(80)
                  .height(80);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>
@endsection
