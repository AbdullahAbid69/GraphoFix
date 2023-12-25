<title>Courses | Online Digital Learning</title>

<nav>@include('Frontend/includes/header')</nav>

<br><br><br><br>
<p style="font-size:40px; color:white; margin-left:10px; border-bottom: 2px solid white; margin-bottom: 20px;">Courses</p>

  <div class="courses-show">
    @foreach( $courses as $courses )
      <div class="courses-courses">
          <tr>
              <div class="img-course">
                  @if ( $courses->image == NULL )
                  <img src="{{ asset('backend/img/course/default.jpg') }}" width="400px">
                  @else
                  <img src="{{ asset('backend/img/course/' . $courses->image) }}" width="400px">
                  @endif
              </div><br>
              <p>{{ $courses->english_title }}</p><br>
              <p>{{ $courses->price }}</p>
              <p>{{ $courses->course_duration }}</p>
              <p><button><a href="https://wa.me/c/923255797737" target="_blank">Join Now!</a></button></p>
          </tr>
      </div>
    @endforeach
  </div>

  @if ( $courses->count() == 0 )
    <div class="alert alert-info">
        No Course available yet
    </div>
  @endif


  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
  <script src="{{asset('js/script.js')}}"></script>
