
@include('Frontend/includes/header')

<title>Mentors | Online Digital Learning</title>
<nav>@include('Frontend/includes/header')</nav>
<br><br><br><br>
<p style="font-size:40px; color:white; margin-left:10px; border-bottom: 2px solid white; margin-bottom: 20px;">Mentors</p>


                <table id="branchTable" class="branch-tables">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">#Sl.</th>
                      <th scope="col">Thumbnail</th>
                      <th scope="col">Name</th>
                      <th scope="col">Designation</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Email</th>
                      <th scope="col">Address</th>
                    </tr>
                  </thead>

                  <tbody>

                    @foreach( $mentors as $mentors )

                      <tr>
                          <th scope="row">{{ $loop->iteration }}</th>
                          <td>
                            @if ( $mentors->profile_pic == NULL )
                                <img src="{{ asset('backend/img/mentor/default.jpg') }}" width="1000px">
                            @else
                                <img src="{{ asset('backend/img/mentor/' . $mentors->profile_pic) }}"width="1000px">
                            @endif
                          </td>
                          <td>{{ $mentors->full_name }}</td>
                          <td>{{ $mentors->designation }}</td>
                          <td>{{ $mentors->phone }}</td>
                          <td>{{ $mentors->email }}</td>
                          <td>{{ $mentors->address }}</td>
                      </tr>

                    @endforeach
                    
                  </tbody>
                </table>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script src="{{asset('js/script.js')}}"></script>