@extends('master.layout')
@section('content')

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div>
                    <div class="title-box rounded">
                      <h5 class="title-left">
                        List of Students
                      </h5>
                      <br>
                      <div>
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">Matric No</th>
                              <th scope="col">First Name</th>
                              <th scope="col">Last Name</th>
                              <th scope="col">Email</th>
                              <th scope="col">Phone No</th>
                              <th scope="col">Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($students as $index => $student)
                            <tr>
                              <td>{{ $student->matric_id }}</td>
                              <td>{{ $student->first_name }}</td>
                              <td>{{ $student->last_name }}</td>
                              <td>{{ $student->email }}</td>
                              <td>{{ $student->phone_no }}</td>
                              <td>
                                <form action="{{route('student.destroy', $student->matric_id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                        <a href="/add-student" class="btn btn-success text" role="button">Add Student</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

@endsection
