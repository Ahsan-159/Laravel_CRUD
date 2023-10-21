<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Registration | Laravel</title>
  </head>
  <body>
    {{-- <div class="container">
        <div class="row mt-5">
            <div class="col-md-10 offset-md-1">
                <h4>User Registration Form</h4>
                <form action="{{ url('/') }}/register" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Enter Your Name"> 
                        <span class="form-text text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror    
                        </span> 
                      </div>
                    <div class="form-group">
                      <label>Email address:</label>
                      <input type="email" name="email" class="form-control" value="{{old('email')}}" placeholder="Enter email"> 
                      <span class="form-text text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror    
                        </span>  
                    </div>
                    <div class="form-group">
                      <label>Password:</label>
                      <input type="password" name="password" class="form-control"  placeholder="Password">
                      <span class="form-text text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror    
                        </span> 
                    </div>
                    <button type="submit" name ="register" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div> --}}
    {{-- @php
    echo "<pre>";
      print_r($errors);
      echo "</pre>";
    @endphp --}}
    <div class="container">
      <div class="row mt-1">
        <div class="col-md-10 offset-md-1">
              <h3 class="text-primary text-center">Customer Registration</h3><br>
              <form action="{{ url('/') }}/register" method="POST">
                @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Name:</label><span class="text-danger"> *</span>
                    <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Enter Your Name">  
                    <span class="form-text text-danger">
                      @error('name')
                          {{ $message }}
                      @enderror    
                      </span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Email:</label><span class="text-danger"> *</span>
                    <input type="text" name="email" class="form-control" value="{{old('email')}}" placeholder="Enter Your E-mail">  
                    <span class="form-text text-danger">
                      @error('email')
                          {{ $message }}
                      @enderror    
                      </span>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Password:</label><span class="text-danger"> *</span>
                    <input type="text" name="password" class="form-control" value="" placeholder="Password">  
                    <span class="form-text text-danger">
                      @error('password')
                          {{ $message }}
                      @enderror    
                      </span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Confirm Password:</label><span class="text-danger"> *</span>
                    <input type="text" name="password_confirmation" class="form-control" value="" placeholder="Confirm Password">  
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Country:</label><span class="text-danger"> *</span>
                    <input type="text" name="country" class="form-control" value="{{old('country')}}" placeholder="Country">  
                    <span class="form-text text-danger">
                      @error('country')
                          {{ $message }}
                      @enderror    
                      </span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>State:</label><span class="text-danger"> *</span>
                    <input type="text" name="state" class="form-control" value="{{old('state')}}" placeholder="State">  
                    <span class="form-text text-danger">
                      @error('state')
                          {{ $message }}
                      @enderror    
                      </span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Gender:</label><span class="text-danger"> *</span><br>
                    <input type="radio" name="gender" class="" value="M"> Male  
                    <input type="radio" name="gender" class="" value="F"> Female
                    <span class="form-text text-danger">
                      @error('radio')
                          {{ $message }}
                      @enderror    
                      </span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Date of Birth:</label><span class="text-danger"> *</span>
                    <input type="date" name="dob" class="form-control" value="{{old('dob')}}">  
                    <span class="form-text text-danger">
                      @error('dob')
                          {{ $message }}
                      @enderror    
                      </span>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Address:</label><span class="text-danger"> *</span>
                    <textarea class="form-control" placeholder="Address" name="address" value="{{old('address')}}" rows="2"></textarea>  
                    <span class="form-text text-danger">
                      @error('address')
                          {{ $message }}
                      @enderror    
                      </span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <button type="submit" name ="register" class="form-control btn btn-primary">Submit</button>
                </div>
              </div>
            </form>
            </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>