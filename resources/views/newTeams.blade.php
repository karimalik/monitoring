@extends('layouts.app')

@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Dashboard</h6>
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
                    <h6> <i class="fa fa-plus text-info" aria-hidden="true"></i> Add New Teams </h6>
                  </div>
                </div>

                <div class="card-body">
                    <form method="POST" id="datatake" role="form">
                        @csrf
                        <div class="mb-2">
                            <label for="name" class="form-label">Teams Leaders</label>
                            <input type="text" class="form-control" id="name" name="team_leader" placeholder="name of team" required/>
                        </div>
                        <div class="mb-2">
                            <table id="item-add" style="width:100%;">
                                <tr class="list-item">
                                    <td>
                                        <div class="row">
                                            <div class="col-mb-3">
                                                <label for="name" class="form-label">FE</label>
                                                <input type="text" class="form-control" id="FE"  name="1" placeholder="FE" required/>
                                                <input type="hidden" class="form-control" id="1"  value="1" />
                                                <input type="hidden" class="form-control" id="numberInputFinal"  name="numberInputFinal" value="1" />
                                            </div>
                                            <div class="col-md-2">
                                                <label class="col-form-label">Close</label>
                                                <div class="form-group">
                                                    <a class="delete" href="#"><i class="fa fa-close"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <button type="button" id="1" class="btn bg-gradient-warning add-item mb-0" onclick="newMenuItem(this.id)"><i class="fas fa-plus-circle"></i>&nbsp;&nbsp;New Item</button>
                        <button type="submit" class="btn bg-gradient-dark mb-0"><i class="fas fa-check"></i>&nbsp;&nbsp;Add New team</button>
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
