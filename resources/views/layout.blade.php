<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portfolio</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">

    <section class="content">
        <div class="container container-fluid">
          <div class="row">
            <div class="col-md-10">

              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                         src="{{asset('img/avatar5.png')}}"
                         alt="User profile picture">
                  </div>

                  <h3 class="profile-username text-center">{{$user->username}}</h3>

                  <p class="text-muted text-center">Software Engineer</p>



                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

              <!-- About Me Box -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">About Me</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <strong><i class="fas fa-book mr-1"></i> Education</strong>

                  <p class="text-muted">
                    B.S. in Computer Science from the University of Tennessee at Knoxville
                  </p>

                  <hr>

                  <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                  <p class="text-muted">Malibu, California</p>

                  <hr>

                  <strong><i class="fa fa mr-1"></i> Social</strong>

                  @foreach ($socials as $social)
                    <ul>
                        <li class="text-muted">{{$social->social_name}}</li>
                        @auth
                            <a href='{{ url("/socials/edit/$social->id")}}'>Edit</a> <br>
                            <a href='{{ url("/socials/delete/$social->id")}}'>Delete</a>
                        @endauth
                    </ul>
                  @endforeach
                  <hr>


                  <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                  @foreach ($skills as $skill)
                      <ul>
                        <li class="text-muted">{{$skill->skill_name}}</li>
                      </ul>
                  @endforeach

                  <hr>

                  <strong><i class="far fa-file-alt mr-1"></i> Experience</strong>
                    @foreach ($experiences as $ex)
                    <p class="text-muted">{{$ex->experience_years}}</p>

                    @endforeach
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
            @auth
            <div class="col-md-9">
              <div class="card">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <a class="nav-link" href="{{route('social.create')}}" >Add Social</a>
                    <li class="nav-item"><a class="nav-link" href="">Add Skills</a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">

                    </div>

                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
            @endauth
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>


<!-- jQuery -->
<script src="{{asset('jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('js/demo.js')}}"></script>
</body>
</html>
