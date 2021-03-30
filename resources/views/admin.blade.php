@extends('layouts.app')
@section('content')

  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
       
        <h5>Dashboard</h5>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
        <li class="active ">
            <a href="/getadmins">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Admins</p>
            </a>
          </li>
          <li>
          <li>
            <a href="/getens">
              <i class="now-ui-icons users_single-02"></i>
              <p>Enseignants</p>
            </a>
          </li>
          <li>
            <a href="">
              <i class="now-ui-icons files_paper"></i>
              <p>Modules</p>
            </a>
          </li>
          <li>
            <a href="">
              <i class="now-ui-icons education_hat"></i>
              <p>Niveaux</p>
            </a>
          </li> 
          <li>
            <a href="">
              <i class="now-ui-icons design_vector"></i>
              <p>Groupes</p>
            </a>
          </li>
          
          <li>
            <a href="">
              <i class="now-ui-icons design_app"></i>
              <p>Salles</p>
            </a>
          </li>
          
          
          <li>
            <a href="">
              <i class="now-ui-icons ui-2_time-alarm"></i>
              <p>Seances</p>
            </a>
          </li>
          <li>
            <a href="">
              <i class="now-ui-icons ui-1_calendar-60"></i>
              <p>Emploi du temps</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <div class="content">
      <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Admins</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        ID
                      </th>
                      <th>
                        NOM
                      </th>
                      <th>
                        E-MAIL
                      </th>
                    </thead>
                    <tbody>
                    @foreach ($users as $admin)
                      <tr>
                        <td>
                        {{$admin->id}}
                        </td>
                        <td>
                        {{$admin->name}}

                        </td>
                        <td>
                        {{$admin->email}}
                        </td>
                        <td class="text-right">
                        <a href="#" class='btn btn-success'>Modifier</a>
                        <a href="#" class='btn btn-danger'>Supprimer</a>
                        </td>
                      </tr>
                      @endforeach
                    
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div> 
      </div>
      <footer class="footer">
       
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  @yield('scripts')
 @endsection