@extends('master.layout')
@section('content')

<section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
  <div class="overlay-mf"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="contact-mf">
          <div id="contact" class="box-shadow-full">
            <div class="row">
              <div>
                <div class="title-box">
                  <h5 class="title-left">
                    Add Students
                  </h5>
                  <br>
                  <div>
                    <form action="student" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="matricID"></label>
                            <input type="text" class="form-control" id="matricID" name="matric_id" placeholder="Matric ID" required>
                        </div>
                        <div class="form-group">
                          <label for="firstname"></label>
                          <input type="text" class="form-control" id="firstname" name="first_name" placeholder="First Name" required>
                        </div>
                        <div class="form-group">
                            <label for="lastname"></label>
                            <input type="text" class="form-control" id="lastname" name="last_name" placeholder="Last Name" required>
                        </div>
                        <div class="form-group">
                            <label for="email"></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone_no"></label>
                            <input type="text" class="form-control" id="phone_no" name="phone_no" placeholder="Phone No" required>
                        </div>
                        <br>
                        <div class="text-center">
                          <button type="submit" class="btn btn-primary text">
                           Save
                          </button>
                        </div>
                      </form>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
