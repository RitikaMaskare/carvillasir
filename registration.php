<html>
  <head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <style>
      p{
        margin-top: 15px;
      }
      .form-control{
        border: 1px solid red;
      }
    </style>
  </head>
  <body  >
    <div style="width: 50%; margin-left: 25%;" class="border border-primary p-4 rounded  mt-4 mb-4">
    <form action="index.php" method="post">
      <h3 class="text-center">Registration Form</h3>
     <div class="text-center">
      <img
      src="images/reg/register.png"
      alt="Registration Image"
      width="150px"
      height="100px"
    />
     </div>
   
      <p>Username:</p>
      <input
        class="form-control"
        type="text"
        placeholder="Enter Username"
        name="uname"
      />
      <p>Password:</p>
      <input class="form-control" type="password" name="pass" required />
      <p>Age:</p>
      <input class="form-control" type="number" name="age" />
      <p>Gender</p>
      <input   class="form-check-input" type="radio" name="gender" value="male"/>
      <label>Male</label>
      <input   class="form-check-input" type="radio" name="gender" value="female"/>
      <label for="">Female</label>
      <p>Date Of Birth:</p>
      <input class="form-control" type="date" name="dob" />
      <p>Select City</p>
      <select class="form-control" name="city">
        <option value="Amravati">Amravati</option>
        <option value="Akola">Akola</option>
        <option value="Washim">Washim</option>
      </select>
      <p>Hobbies:</p>
      <span> <input class="form-check-input" type="checkbox" /> Cooking </span>
      <span> <input class="form-check-input" type="checkbox" /> Dancing </span>

      <p class="text-center">
        <button class="btn btn-outline-danger">Register Now</button>
        <br>
        <a href="login.php">Already Have Account? Login Here</a>
      </p>

     
    </form>
  </div>
  <?php
  include_once("layouts/footer.php");
  ?>
  </body>
</html>
