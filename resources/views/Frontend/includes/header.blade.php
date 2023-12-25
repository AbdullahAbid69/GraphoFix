<!DOCTYPE html>
<html lang="en">
<head>
    @include('Frontend.includes.head')
    
</head>
<body>
   
<div class="header">
    

    <ul class="log-sign">
        <li class="log-sign-li"><button class="login-button">Login</button></li>
        <li class="log-sign-li"><button class="open-button" onclick="openForm()">Join Now!</button></li>
    </ul>
    
    
        <div class="form-popup" id="myForm">
            <form action="{{route('signup')}}" method="post"  class="form-container">
                @csrf
                <h3>SignUp</h3>

                    <label for="name">Name: </label>
                    <input type="text" name="name" placeholder="Abdullah Abid" required>
                    
                    <label for="name">Email: </label>
                    <input type="email" name="email" placeholder="abdullahabid@gmail.com" required>
                    
                    <label for="name">Password: </label>
                    <input type="password" name="pass" placeholder="Create a strong password" required>
                    
                    <label for="name">Linkedin: </label>
                    <input type="link" name="linkedin" placeholder="https://www.linkedin.com/in/abdullahabid69" required>
                    

                <button type="submit" class="btn">SignUp</button>
                <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
            </form>
        </div>

    <div class="nav">
        <ul class="navigation">
            <li class="nav-li">
                <strong><a href="{{route('onlinedigitallearning.com')}}"><span >O</span>nline <span>D</span>igital <span>L</span>earning</a></strong>
            </li>
            <li class="nav-li"><a href="{{route('branch')}}">Branches</a></li>
            <li class="nav-li"><a href="{{route('course')}}">Courses</a></li>
            <li class="nav-li"><a href="{{route('mentor')}}">Mentors</a></li>
            <li class="nav-li"><a href="{{route('about')}}">About Us</a></li>
            <!-- <li class="nav-li"><a href="{{route('contact')}}">Contact Us</a></li> -->
        </ul>
    </div>

</div>

    <!-- Script for signup form to display -->
    <script>
        // for form opening
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        } 


        //for showng details of courses
        function showDetals() {
            document.getElementById("show-details").style.display = "block";
        }

        function closeDetals() {
            document.getElementById("show-details").style.display = "none";
        } 

    </script>

</body>
</html>