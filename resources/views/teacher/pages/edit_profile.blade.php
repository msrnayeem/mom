@extends('teacher.layouts.teacher')
@section('content')
    <style>
       
input[type=text],
input[type=password],
input[type=email],
input[type=number],
input[type=tel],
textarea {
    background-color: #e7f3ff;
}

button, .btn {
  width: auto;
}

</style>
   
     <!-- rts dahboard-area-main-wrapper -->
     <div class="dashboard--area-main pt--100">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="card rounded shadow-sm p-2">
                      <div class="card-header text-white py-3">
                        <h5 class="mb-0">Edit Profile</h5>
                      </div>
                      <div class="card-body p-4">
                        <form action="{{ route('teacher.profile.update') }}" method="POST">
                          @csrf
                          <!-- Name -->
                          <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" name="name" id="name" 
                                   class="form-control" 
                                   value="{{ old('name', $profile->name) }}">
                            @error('name')
                              <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>
                          <!-- Email -->
                          <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" name="email" id="email" 
                                   class="form-control" 
                                   value="{{ old('email', $profile->email) }}">
                            @error('email')
                              <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>
                          <!-- Phone Number -->
                          <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number:</label>
                            <input type="text" name="phone" id="phone" 
                                   class="form-control" 
                                   value="{{ old('phone', $profile->student_details->phone ?? '') }}">
                            @error('phone')
                              <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>
                          <!-- whatsapp Number -->
                          <div class="mb-3">
                            <label for="whatsapp" class="form-label">whatsapp Number:</label>
                            <input type="text" name="whatsapp" id="whatsapp" 
                                   class="form-control" 
                                   value="{{ old('whatsapp', $profile->student_details->whatsapp ?? '') }}">
                            @error('whatsapp')
                              <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>
                          <!-- Address -->
                          <div class="mb-3">
                            <label for="address" class="form-label">Address:</label>
                            <input type="text" name="address" id="address" 
                                   class="form-control" 
                                   value="{{ old('address', $profile->student_details->address ?? '') }}">
                            @error('address')
                              <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="updatePasswordCheck" name="update_password" value="1"
                                       {{ old('update_password') ? 'checked' : '' }}>
                                <label class="form-check-label" for="updatePasswordCheck">Update Password</label>
                            </div>
                        </div>
                          <!-- New Password -->
                          <div id="passwordFields" style="display: {{ old('update_password') ? 'block' : 'none' }};">
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label for="password" class="form-label">New Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter new password">
                                    @error('password')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Re-enter new password">
                                    @error('password_confirmation')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                          <!-- Submit Button -->
                          <div class="mt-4 mb-3 d-flex gap-3">
                            <button type="submit" class="btn btn-lg btn-primary">Update Profile</button>
                            <a href="{{ route('teacher.profile') }}" class="btn btn-lg btn-secondary">Cancel</a>
                          </div>
                          
                        </form>
                      </div>
                    </div>
                  </div>
                  
                  
                
            </div>
        </div>
    </div>
    <!-- rts dahboard-area-main-wrapper end -->

    <div class="rts-section-gap">

    </div>



    
   
    <!-- rts backto top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>
    <!-- rts backto top end -->

    <!-- offcanvase search -->
    <div class="search-input-area">
        <div class="container">
            <div class="search-input-inner">
                <div class="input-div">
                    <input class="search-input autocomplete" type="text" placeholder="Search by keyword or #">
                    <button><i class="far fa-search"></i></button>
                </div>
            </div>
        </div>
        <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
    </div>
    <!-- offcanvase search -->
    <div id="anywhere-home" class="">
    </div>

    <script>
      document.getElementById('updatePasswordCheck').addEventListener('change', function() {
          var passwordFields = document.getElementById('passwordFields');
          passwordFields.style.display = this.checked ? 'block' : 'none';
      });
  </script>
@endsection
