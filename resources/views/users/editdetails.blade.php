@extends('layouts.app')

@section('content')
     
     <!-- HOME -->
     <section class="section-hero overlay inner-page bg-image" style=" margin-top:-24px; background-image: url({{ asset('assets/images/hero_1.jpg')}});" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Update Profile</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <a href="#">Job</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Profile</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="container">
        @if (\Session::has('update'))
          <div class='alert alert-success'>
              <p>{!! \Session::get('update') !!}</p>
          </div>

        @endif
    </div>
 

    <section class="site-section">
      <div class="container">

        <div class="row align-items-center mb-5">
          <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="d-flex align-items-center">
              <div>
                <h2>Profile</h2>
              </div>
            </div>
          </div>
         
        </div>
        <div class="row mb-5">
          <div class="col-lg-12">
            <form class="p-4 p-md-5 border rounded" action="{{ route('update.details')}}" method="post">
                @csrf
              <!--job details-->
            
              <div class="form-group">
                <label for="job-title">Name</label>
                <input type="text" value="{{ $user->name }}" name="name" class="form-control" id="job-title" placeholder="Name">
              </div>

              <div class="form-group">
                <label for="job-title">Job Title</label>
                <input type="text" value="{{ $user->job_title}}" name="jobtitle" class="form-control" id="job-title" placeholder="Job Title">
              </div>
              
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="">Bio</label> 
                  <textarea name="bio" id="" cols="30" rows="7" class="form-control" placeholder="Bio" >{{ $user->bio}}</textarea>
                </div>
              </div>

              <div class="form-group">
                <label for="job-title">Facebook</label>
                <input type="text" value="{{ $user->facebook }}" name="facebook" class="form-control" id="job-title" placeholder="Facebook">
              </div>

              <div class="form-group">
                <label for="job-title">Twitter</label>
                <input type="text" value="{{ $user->twitter }}" name="twitter" class="form-control" id="job-title" placeholder="Twitter">
              </div>

              <div class="form-group">
                <label for="job-title">Linked In</label>
                <input type="text" value="{{ $user->linkedin }}" name="linkedin" class="form-control" id="job-title" placeholder="linked In">
              </div>

              <div class="col-lg-4 ml-auto">
                  <div class="row">  
                    <div class="col-6">
                      <input type="submit" name="submit" class="btn btn-block btn-primary btn-md" style="margin-left: 200px;" value="Update">
                    </div>
                  </div>
              </div>


            </form>
          </div>

         
        </div>
       
      </div>
    </section>

@endsection