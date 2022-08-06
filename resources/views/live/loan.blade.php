@extends('layouts.head')
@section('pageTitle', 'Apply for Loan')
@section('content')
    <!-- Page Title -->
    <div class="page-title-area">
      <div class="d-table">
          <div class="d-table-cell">
              <div class="container">
                  <div class="title-content">
                      <h2>Apply Loan</h2>
                      <ul>
                          <li>
                              <a href="{{ url('/')}}">Home</a>
                          </li>
                          <li>
                              <span>Loan</span>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- End Page Title -->

<section class="divider mt-5">
  <div class="container">
    @if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
      </div>
    @endif

    @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Error!</strong>
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <form role="form" enctype="multipart/form-data" action="{{ url('loan') }}" method="post" >
      {{ csrf_field() }}
      <div class="container-fluid">
        <div class="row my-3">
          <div class="col-md-12">
            <h2>Personal Data</h2>
          </div>
        </div>
        <div class="row my-3">
          <div class="col-md-4">
            <div class="form-group">
              <label>Surname</label>
              <input type="text" name="lastname" class="form-control" required/>
            </div>
          </div>
                    
          <div class="col-md-4">
            <div class="form-group">
              <label>First Name</label>
              <input type="text" name="firstname" class="form-control" required/>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label>Middle Name</label>
              <input type="text" name="middlename" class="form-control" required/>
            </div>
          </div>

        </div>
        <div class="row my-3">
          <div class="col-md-4">
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" class="form-control" required="" />
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label>Phone Number</label>
              <input type="tel" name="phone" class="form-control" required/>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label>Date of Birth</label>
              <input type="date" name="dob" class="form-control" required="" />
            </div>
          </div>
        </div>
        <div class="row my-3">
          <div class="col-md-12">
            <div class="form-group">
              <label>Address</label>
              <textarea class="form-control" name="address" required=""></textarea>
            </div>
          </div>
        </div>
        <div class="row my-3">
          <div class="col-md-3">
            <div class="form-group">
              <label>Gender</label><br>
              <select name="gender" class="form-control">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
          </div>
        </div>

        <hr class="my-4">

        <div class="row my-3">
          <div class="col-md-12">
            <h2>Official Data</h2>
          </div>
        </div>
        
        <div class="row my-3">
          <div class="col-md-4">
            <div class="form-group">
              <label>BVN</label>
              <input class="form-control" required type="text" name="bvn">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label>Valid ID Card Copy/Scan</label>
              <input class="form-control" name="id_card" type="file" required>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label>Passport Photograph (Jpg, Jpeg, Png, Gif)</label>
              <input class="form-control" name="photo" type="file" required="">
            </div>
          </div>
        </div>
                  
        <div class="row my-3">
          <div class="col-md-6">
            <div class="form-group">
              <label>Amount Needed</label>
              <input class="form-control" name="amount" type="number" required="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Interest</label>
              <input class="form-control" name="interest" type="number">
            </div>
          </div>
        </div>
        
        <div class="row my-3">
          <div class="col-md-6">
            <div class="form-group">
              <label>Exact Location(s) of Business(es) or Industries</label>
              <textarea name="location" class="form-control" required=""></textarea>
            </div>
          </div>
  
          <div class="col-md-6">
            <div class="form-group">
              <label>Business Experience (Include how long you have been in the business)</label>
              <textarea name="experience" class="form-control" required=""></textarea>
            </div>
          </div>
        </div>
        
        <div class="row my-3">
          <div class="col-md-6">
            <div class="form-group">
              <label>Repayment proposal for both principal and interest</label>
              <textarea name="repayment" class="form-control"></textarea>
            </div>
          </div>
  
          <div class="col-md-6">
            <div class="form-group">
              <label>Securities (Collaterals/gurantors for the loan)</label>
              <textarea name="security" class="form-control"></textarea>
            </div>
          </div>
        </div>
        
        <div class="d-flex justify-content-center my-5">
          <button type="submit" class="common-btn">
            Apply 
            <span></span>
          </button>
        </div>
      
       
      </div>
      
    </form> 
  </div>
</section>
<br><br>
@endsection
