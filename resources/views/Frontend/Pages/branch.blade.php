<title>Branches | Online Digital Learning</title>

<nav>@include('Frontend/includes/header')</nav>

<br><br><br><br>

<p style="font-size:40px; color:white; margin-left:10px; border-bottom: 2px solid white; margin-bottom: 20px;">Branches</p>

    <table id="branchTable" class="branch-tables">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#Sl.</th>
                <th scope="col">Branch Name</th>
                <th scope="col">Address Line 1</th>
                <th scope="col">Address Line 2</th>
                <th scope="col">Phone</th>
            </tr>
        </thead>

        <tbody>

            @foreach( $branch as $branch )
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $branch->name }}</td>
                    <td>{{ $branch->address_line1 }}</td>
                    <td>{{ $branch->address_line2 }}</td>
                    <td>{{ $branch->phone }}</td>
                </tr>

            @endforeach

        </tbody>
    </table>

    @if ( $branch->count() == 0 )
    <div class="alert alert-info">
    No Branch added yet. Please add a branch first.
    </div>
    @endif


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script src="{{asset('js/script.js')}}"></script>

</body>
</html>