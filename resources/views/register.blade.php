<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/loginregstyle.css">

</head>
<body>
<main id="main-area">
<!-- registration area -->
<section id="register">
    <div class="row m-0">
        <div class="col-lg-4 offset-lg-2">
            <div class="text-center pb-5">
                <h1 class="login-title text-dark">Register</h1>
                <p class="p-1 m-0 font-ubuntu text-black-50">Register and enjoy additional features</p>
                <span class="font-ubuntu text-black-50">I already have <a href="login">Login</a></span>
            </div>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                        aria-controls="home" aria-selected="true">Customer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="false">Shop Keeper</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab"
                        aria-controls="messages" aria-selected="false">Merchant</a>
                </li>

            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <!-- #registration area -->
                    <div class="upload-profile-image d-flex justify-content-center pb-5 mt-4" id="customer-pro-img">

                        <div class="text-center">
                            <div class="d-flex justify-content-center">
                                <img class="camera-icon" src="/images/loginreg/camera-solid.svg" alt="camera">
                            </div>
                            <img src="/images/loginreg/profile/beard.png" style="width: 200px; height: 200px"
                                class="img rounded-circle" alt="profile">
                            <small class="form-text text-black-50">Choose Image</small>
                            <input type="file" form="reg-form" class="form-control-file" name="profileUpload-1"
                                id="upload-profile">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <form action="register.php" method="post" enctype="multipart/form-data" id="reg-form">
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" value="<?php if (isset($_POST['firstName'])) {
    echo $_POST['firstName'];
}
?>" name="firstName" id="firstName" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col">
                                    <input type="text" value="<?php if (isset($_POST['LastName'])) {
    echo $_POST['LastName'];
}
?>" name="LastName" id="LastName" class="form-control" placeholder="Last Name">
                                </div>
                            </div>

                            <div class="form-row my-4">
                                <div class="col">
                                    <input type="text" value="<?php if (isset($_POST['PhoneNumber'])) {
    echo $_POST['PhoneNumber'];
}
?>" name="PhoneNumber" id="PhoneNumber" class="form-control" placeholder="Phone Number">

                                </div>
                            </div>


                            <div class="form-row my-4">
                                <div class="col">
                                    <input type="text" value="<?php if (isset($_POST['Address'])) {
    echo $_POST['Address'];
}
?>" name="Address" id="Address" class="form-control" placeholder="Address">

                                </div>
                            </div>


                            <div class="form-row my-4">
                                <div class="col">
                                    <input type="text" value="<?php if (isset($_POST['NIC'])) {
    echo $_POST['NIC'];
}
?>" name="NIC" id="NIC" class="form-control" placeholder="NIC">

                                </div>
                            </div>


                            <div class="form-row my-4">
                                <div class="col">
                                    <input type="email" value="<?php if (isset($_POST['email'])) {
    echo $_POST['email'];
}
?>" required name="email" id="email" class="form-control" placeholder="Email*">
                                </div>
                            </div>

                            <div class="form-row my-4">
                                <div class="col">
                                    <input type="password" required name="password" id="password" class="form-control"
                                        placeholder="password*">
                                </div>
                            </div>

                            <div class="form-row my-4">
                                <div class="col">
                                    <input type="password" required name="confirm_pwd" id="confirm_pwd"
                                        class="form-control" placeholder="Confirm Password*">
                                    <small id="confirm_error" class="text-danger"></small>
                                </div>
                            </div>

                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="agreement" class="form-check-input" required>
                                <label for="agreement" class="form-check-label font-ubuntu text-black-50">I agree <a
                                        href="#">term, conditions, and policy </a>(*) </label>
                            </div>

                            <div class="submit-btn text-center my-5">
                                <button type="submit"
                                    class="btn btn-warning rounded-pill text-dark px-5">Continue</button>
                            </div>


                        </form>
                    </div>
                    <!-- #registration area  Shopkeeper-->


                </div>


                <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <!-- #registration area -->
                    <br><br>
                    <div class="d-flex justify-content-center">
                        <form action="{{url('user')}}" method="post" enctype="multipart/form-data" id="reg-form">
                        {{csrf_field ()}}
                        @if(count ($errors)>0)
                        @foreach($errors->all() as $error)
                        <div class="alert-alert-danger">{{$error}}</div>
                        @endforeach
                        @endif
                            <div class="form-row my-4">
                                <div class="col">
                                    <input type="text" value="<?php if (isset($_POST['firstname'])) {
    echo $_POST['firstname'];
}
?>" name="firstname" id="firstname" class="form-control" placeholder="First Name">
                                </div>

                            </div>
                            <div class="form-row my-4">
                                <div class="col">
                                    <input type="text" value="<?php if (isset($_POST['lastname'])) {
    echo $_POST['lastname'];
}
?>" name="lastname" id="lastname" class="form-control" placeholder="Last Name">
                                </div>

                            </div>

                            <div class="form-row my-4">
                                <div class="col">
                                    <input type="text" value="<?php if (isset($_POST['PhoneNumber'])) {
    echo $_POST['PhoneNumber'];
}
?>" name="PhoneNumber" id="PhoneNumber" class="form-control" placeholder="Phone Number">

                                </div>
                            </div>


                            <div class="form-row my-4">
                                <div class="col">
                                    <input type="text" value="<?php if (isset($_POST['Address'])) {
    echo $_POST['Address'];
}
?>" name="Address" id="Address" class="form-control" placeholder="Address">

                                </div>
                            </div>


                            <div class="form-row my-4">
                                <div class="col">
                                    <input type="text" value="<?php if (isset($_POST['NIC'])) {
    echo $_POST['NIC'];
}
?>" name="NIC" id="NIC" class="form-control" placeholder="NIC">

                                </div>
                            </div>



                            <div class="form-row my-4">
                                <div class="col">
                                    <input type="text" value="<?php if (isset($_POST['NameOftheBusinessOrganization'])) {
    echo $_POST['NameOftheBusinessOrganization'];
}
?>" name="NameOftheBusinessOrganization" id="NameOftheBusinessOrganization" class="form-control"
                                        placeholder="Name Of the Business Organization">

                                </div>
                            </div>




                                    <select class="mdb-select md-form" searchable="Search here.." name="businessType">
                                        <option value="" disabled selected>Business Type</option>
                                        <option value="1">Eseential</option>
                                        <option value="2">Electronics</option>
                                        <option value="3">Property</option>
                                        <option value="4">Vehicles</option>
                                        <option value="5">Home & Garden</option>
                                        <option value="6">Fashion, Health & Beauty</option>
                                        <option value="7">hobby, Sports & Kids</option>
                                        <option value="8">Business & Industry</option>
                                        <option value="9">Services</option>
                                        <option value="10">Education</option>
                                        <option value="11">Animals</option>
                                        <option value="12">Food & Agriculture</option>
                                    </select>
                                    <br><br>

                            <div class="form-group">
                            <label>Preferred Merchant</label>
                            <div class="col">
                            <div class="radio">
                            <label> 
                            <input type="radio" name="merchant" id="kzone" value="kzone" checked="">
                            K zone 
                            </label>
                            <div class="radio">
                            <label> 
                            <input type="radio" name="merchant" id="majestic" value="majestic" checked="">
                            Majestic City
                            </label>
                            <div class="radio">
                            <label> 
                            <input type="radio" name="merchant" id="liberty" value="liberty" checked="">
                            Liberty Plaza
                            </label>
                            <div class="radio">
                            <label> 
                            <input type="radio" name="merchant" id="kandy" value="kandy" checked="">
                            Kandy City Center
                            </label>
                            <div class="radio">
                            <label> 
                            <input type="radio" name="merchant" id="onegall" value="onegall" checked="">
                            One Gallface 
                            </label>
                            </div>
                            </div>
                            </div>                





                            <div class="form-row my-4">
                                <div class="col">
                                    <input type="text" value="<?php if (isset($_POST['MainSellingItem'])) {
    echo $_POST['MainSellingItem'];
}
?>" name="MainSellingItem" id="MainSellingItem" class="form-control" placeholder="Main Selling Item">

                                </div>
                            </div>

                            <div class="form-row my-4">
                                <div class="col">
                                    <input type="email" value="<?php if (isset($_POST['Organizationemail'])) {
    echo $_POST['Organizationemail'];
}
?>" required  name="Organizationemail" id="Organizationemail" class="form-control" placeholder="Organization Email*">
                                </div>
                            </div>

                            <div class="form-row my-4">
                                <div class="col">

                                    <label for="DocumentUpload">Upload Your Document:</label><br><br>

                                    <input type="file" name="file" />

                                    <input type="submit" name="submit" value="Upload" />


                                </div>
                            </div>



                            <div class="form-row my-4">
                                <div class="col">
                                    <input type="email" value="<?php if (isset($_POST['email'])) {
    echo $_POST['email'];
}
?>" required name="email" id="email" class="form-control" placeholder="Email*">
                                </div>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="agreement" class="form-check-input" required>
                                <label for="agreement" class="form-check-label font-ubuntu text-black-50">I agree <a
                                        href="#">term, conditions, and policy </a>(*) </label>
                            </div>

                            <div class="submit-btn text-center my-5">
                                <button type="submit"
                                    class="btn btn-warning rounded-pill text-dark px-5">Continue</button>
                            </div>


                        </form>
                    </div>
                    <!-- #registration area -->

                </div>


                <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">

                    <!-- #registration area -->
                   <br><br>
                    <div class="d-flex justify-content-center">
                        <form action="register.php" method="post" enctype="multipart/form-data" id="reg-form">
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" value="<?php if (isset($_POST['username'])) {
    echo $_POST['username'];
}
?>" name="username" id="username" class="form-control" placeholder="User Name">
                                </div>
                            </div>

                            <div class="form-row my-4">
                                <div class="col">
                                    <input type="text" value="<?php if (isset($_POST['Managementcompanyname '])) {
    echo $_POST['Managementcompanyname '];
}
?>" name="Managementcompanyname " id="Managementcompanyname " class="form-control" placeholder="Management company name ">
                                </div>
                            </div>



                            <div class="form-row my-4">
                                <div class="col">
                                    <input type="text" value="<?php if (isset($_POST['PostalAddress'])) {
    echo $_POST['PostalAddress'];
}
?>" name="PostalAddress" id="PostalAddress" class="form-control" placeholder="Postal Address">

                                </div>
                            </div>


                            <select class="mdb-select md-form" searchable="Search here..">
                                        <option value="" disabled selected>Under Shop Count</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>

                            <div class="form-row my-4">
                                <div class="col">

                                    <label for="DocumentUpload">Update business property: </label><br><br>

                                    <input type="file" name="file" />

                                    <input type="submit" name="submit" value="Upload" />


                                </div>
                            </div>

                            <div class="form-row my-4">
                                <div class="col">

                                    <label for="DocumentUpload">Update shop keepers documents: </label><br><br>

                                    <input type="file" name="file" />

                                    <input type="submit" name="submit" value="Upload" />


                                </div>
                            </div>

                            <div class="form-row my-4">
                                <div class="col">
                                    <input type="text" value="<?php if (isset($_POST['PhoneNumber'])) {
    echo $_POST['PhoneNumber'];
}
?>" name="PhoneNumber" id="PhoneNumber" class="form-control" placeholder="Contact Number">
    </div>
                            </div>

                            <div class="form-row my-4">
                                <div class="col">
                                    <input type="email" value="<?php if (isset($_POST['email'])) {
    echo $_POST['email'];
}
?>" required name="email" id="email" class="form-control" placeholder="Email*">
                                </div>
                            </div>




                            <select class="mdb-select md-form" searchable="Search here..">
                                        <option value="" disabled selected>Area Of Interest</option>
                                        <option value="1">Eseential</option>
                                        <option value="2">Electronics</option>
                                        <option value="3">Property</option>
                                        <option value="4">Vehicles</option>
                                        <option value="5">Home & Garden</option>
                                        <option value="6">Fashion, Health & Beauty</option>
                                        <option value="7">hobby, Sports & Kids</option>
                                        <option value="8">Business & Industry</option>
                                        <option value="9">Services</option>
                                        <option value="10">Education</option>
                                        <option value="11">Animals</option>
                                        <option value="12">Food & Agriculture</option>
                                    </select>
                                <br><br>



                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="agreement" class="form-check-input" required>
                                <label for="agreement" class="form-check-label font-ubuntu text-black-50">I agree <a
                                        href="#">term, conditions, and policy </a>(*) </label>
                            </div>

                            <div class="submit-btn text-center my-5">
                                <button type="submit"
                                    class="btn btn-warning rounded-pill text-dark px-5">Continue</button>
                            </div>


                        </form>
                    </div>
                    <!-- #registration area -->

                </div>

            </div>





        </div>
    </div>
</section>
<!-- #registration area -->

<script>
$(function() {
    $('#myTab li:last-child a').tab('show')
})
</script>




</main>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="js/loginregmain.js"></script>


<script src="js/loginregdropdown.js"></script>




</body>
</html>
