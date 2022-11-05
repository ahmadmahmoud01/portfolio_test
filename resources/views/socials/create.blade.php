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
<body>
    <section class="content mt-5">
        <div class="container ">
          {{-- <div class="row"> --}}
            <div class="col-md-10">

                <form action="{{url('socials/store')}}" method="POST">
                    @csrf
                    {{-- <input type="text" name="social_name" placeholder=""> --}}
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Social Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="social_name" id="social_name" placeholder="social name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="offset-sm-2 col-lg-10">
                            <button type="submit" class="btn btn-danger ml-5">Submit</button>
                        </div>
                    </div>


                </form>
            </div>
          </div>
        </div>
    </section>
    </body>
    </html>
