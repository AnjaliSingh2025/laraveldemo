<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    @include('layouts.cdn')
    @include('welcome')
    </head>
<body>
  
    <div class="container mt-5">
      
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header text-center bg-primary text-white">
                        <h3>Registration Form</h3>
                        
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                        <div class="position-fixed top-0 end-0 p-3" style="z-index: 1050;">
                            <div id="liveToast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <strong class="me-auto">Success</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                    {{ session('success') }}
                                </div>
                            </div>
                        </div>
                        @endif
                        
                        <form action="{{route('registeruser')}}" method="POST">
                            @csrf
                            @php
                            $demo=1;
                            @endphp
                            <!-- Name -->
                            <div class="mb-3">
                             <x-input type="text" name="name" label="Please enter your name" :demo="$demo"/>
                             <x-input type="email" name="email" label="Please enter your email"/>
                             <x-input type="text" name="age" label="Please enter your Age"/>
                             <x-input type="text" name="detail" label="Please enter your Details"/>
                             <x-input type="password" name="password" label="Password"/>
                             <x-input type="password" name="password_confirmation" label="Confirm Password"/> 
                            </div>
                           
                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <small>Already have an account? <a href="{{route('login')}}">Login here</a>.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>
