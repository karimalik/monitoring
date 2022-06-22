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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Maintenance</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Maintenance</h6>
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
                    <h6> <i class="fa fa-plus text-info" aria-hidden="true"></i> Add New Maintaince </h6>
                  </div>
                </div>

                <div class="card-body">
                    <form method="POST" id="datatake" role="form" action=" {{ route('maintenance.store') }} " enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <label for="site" class="form-label">Name of site</label>
                            <input type="text" class="form-control" name="site" placeholder="name of site" required/>
                        </div>

                        <div class="mb-2">
                            <label for="reference" class="form-label">Reference</label>
                            <input type="text" class="form-control" id="reference" name="reference" placeholder="reference" required/>
                        </div>

                        <div class="mb-2">
                            <label for="reference" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image" accept=".jpg, .png, .jpeg, .gif" required/>
                        </div>

                        <div class="mb-2">
                            <label for="reference" class="form-label">Teams</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="team_id" required>
                                @foreach ($teams as $team)
                                 <option value=" {{ $team->id }} " > {{ $team->team_leader }}</option>
                                @endforeach
                            </select>
                        </div> <br>

                        <div class="mb-2">

                            <label for="status" class="form-label">Status: </label>

                            <div class="form-check form-check-inline">
                              <label for="status" class="form-label">Up</label>
                              <input type="checkbox" class="form-control form-check-input" id="status" name="status[]" value="Up"/>
                            </div>


                            <div class="form-check form-check-inline">
                                <label for="status" class="form-label">Down</label>
                                <input type="checkbox" class="form-control form-check-input" id="status" name="status[]" value="Down"/>
                            </div>

                            <div class="form-check form-check-inline">
                                <label for="status" class="form-label">LVD</label>
                                <input type="checkbox" class="form-control form-check-input" id="status" name="status[]" value="LVD"/>
                            </div>

                            <div class="form-check form-check-inline">
                                <label for="status" class="form-label">BLOKING</label>
                                <input type="checkbox" class="form-control form-check-input" id="status" name="status[]" value="BLOKING"/>
                            </div>

                            <div class="form-check form-check-inline">
                                <label for="status" class="form-label">CCTV</label>
                                <input type="checkbox" class="form-control form-check-input" id="status" name="status[]" value="CCTV"/>
                            </div>

                            <div class="form-check form-check-inline">
                                <label for="status" class="form-label">LINK</label>
                                <input type="checkbox" class="form-control form-check-input" id="status" name="status[]" value="LINK"/>
                            </div>
                        </div>

                        <div class="mb-2">
                            <label for="reference" class="form-label">Date</label>
                            <input type="date" class="form-control" id="date" name="date" placeholder="date" required/>
                        </div>

                        <div class="mb-2">
                            <label for="reference" class="form-label">Diagnostique</label>
                            <textarea class="ckeditor form-control" name="diagnostique" placeholder="Type your diagnostique" required></textarea>
                        </div>

                        <div class="mb-2">
                            <label for="reference" class="form-label">Action</label>
                            <textarea class="ckeditor form-control" name="action" placeholder="Type your action" required></textarea>
                        </div>

                        <div class="mb-2">
                            <label for="observation" class="form-label">Observation</label>
                            <select class="form-control" id="observation" name="observation" required>
                                <option selected>choose....</option>
                                <option name="resolu" value="resolu">Probleme Resolu</option>
                                <option name="non resolu" value="non resolu">Probleme Non Resolu</option>
                                <option name="standBy" value="standBy">Probleme En StandBy</option>>
                            </select>
                        </div>

                        <div class="mb-2" id="box-comment">
                            <label for="reference" class="form-label">Comment</label>
                            <textarea class="form-control" id="comment" name="comment" placeholder="Type your comment"></textarea>
                        </div>

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

