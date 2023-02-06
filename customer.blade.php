<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="bg-info">

<div class="container">
  <h2 class="text-center mt-5">Customer Registration</h2>
  <form action="{{ url('/') }}/customer" method="post" class="mt-5">
    @csrf
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" name="name">
      <span class="text-danger">
        @error('name')
        {{$message}}
        @enderror 
      </span>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email">
      <span class="text-danger">
        @error('email')
        {{$message}}
        @enderror 
      </span>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" name="password">
      <span class="text-danger">
        @error('password')
        {{$message}}
        @enderror 
      </span>
    </div>
    <div class="form-group">
      <label for="confirm_password">Confirm Password:</label>
      <input type="password" class="form-control" id="confirm_password" name="confirm_password">
      <span class="text-danger">
        @error('confirm_password')
        {{$message}}
        @enderror 
      </span>
    </div>
    <div class="form-group">
      <label for="country">Country:</label>
      <input type="country" class="form-control" id="country" name="country">
        
      <span class="text-danger">
        @error('country')
        {{$message}}
        @enderror 
      </span>
    </div>
    <div class="form-group">
      <label for="state">State:</label>
      <input type="state" class="form-control" id="state" name="state">
        
      <span class="text-danger">
        @error('state')
        {{$message}}
        @enderror 
      </span>
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <textarea class="form-control" id="address" name="address"></textarea>
      <span class="text-danger">
        @error('address')
        {{$message}}
        @enderror 
      </span>
    </div>
    <div class="form-group">
      <label for="gender">Gender:</label><br>
      <input type="radio" id="male" name="gender" value="M">
      <label for="M">Male</label><br>
      <input type="radio" id="female" name="gender" value="F">
      <label for="F">Female</label><br>
      <input type="radio" id="other" name="gender" value="O">
      <label for="O">Other</label>
      <span class="text-danger">
        @error('gender')
        {{$message}}
        @enderror 
      </span>
    </div>
    <div class="form-group">
      <label for="dob">Date of Birth:</label>
      <input type="date" class="form-control" id="dob" name="dob">
      <span class="text-danger">
        @error('dob')
        {{$message}}
        @enderror 
      </span>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>