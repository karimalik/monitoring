

@extends('layouts.app')


@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark" aria-current="page">Dashboard</li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">User</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">User</h6>
        </nav>
        <div class="card">
            <div class="card-header pb-0">
                <h6>Welcome back {{ Auth::user()->name }} 😍</h6>
            </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row my-4">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header pb-0">
                <div class="row">
                  <div class="col-lg-6 col-7">
                    <h6> <i class="fa fa-plus text-info" aria-hidden="true"></i> Add New User </h6>
                  </div>
                </div>

                <div class="card-body">
                    <form method="POST" id="datatake" role="form" action=" {{ route('users.store') }} " enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <label for="site" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="" value="{{ old('name') }}" required/>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                           @enderror
                        </div>

                        <div class="mb-2">
                            <label for="site" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="" value="{{ old('email') }}" required/>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                           @enderror
                        </div>

                        <div class="mb-2">
                            <label for="site" class="form-label">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="" required autocomplete="new-password"/>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                           @enderror
                        </div>

                        {{-- <div class="mb-2">
                            <label for="site" class="form-label">Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="" name="password_confirmation" autocomplete="new-password" required/>
                        </div> --}}

                        {{-- <button type="button" name="add" id="dynamic-ar" class="btn bg-gradient-info mb-0"> <i class="fa fa-plus"></i> Add Item</button> --}}
                        <button type="submit" class="btn bg-gradient-success mb-0"><i class="fas fa-check"></i>&nbsp;&nbsp;Save</button>
                    </form>
                </div>
          </div>
        </div>
      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by AMN
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
   </main>
@endsection

