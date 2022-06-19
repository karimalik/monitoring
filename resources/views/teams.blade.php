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
        <div class="col-6 mt-5">
            <a class="btn bg-gradient-dark mb-0" href=" {{ route('teams.create') }} "><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New team</a>
        </div>
      <div class="row my-4">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header pb-0">
                <div class="row">
                  <div class="col-lg-6 col-7">
                    <h6> <i class="fa fa-list text-info" aria-hidden="true"></i> List of teams</h6>
                  </div>
                </div>
              </div>
            <table id="listtable" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th class="text-center">Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($teams as $team)
                        <tr>
                            <td class="align-middle text-center">
                                <span class="text-secondary font-weight-bold"> {{ $team->team_leader }} </span>
                            </td>
                            <td>
                                <form action="{{ route('teams.destroy', $team->id) }}" method="POST">

                                    {{-- <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a> --}}
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link text-danger text-gradient px-3 mb-0"><i class="far fa-trash-alt me-2"></i>Delete</button>
                                </form>

                            </td>
                        </tr>
                     @endforeach

                </tbody>
            </table>
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
