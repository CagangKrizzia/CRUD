<!DOCTYPE html>
<html>
  <head>
    <title>Form Validation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- css link -->
    <link rel="stylesheet"  href="style.css">
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
      rel="stylesheet"
    />

  </head>

  <body>
    <div class="navigation">
    <h1>CSC Online Registration, Appointment and Scheduling System</h1>
    </div>
   <div class="container">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Add 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" autocomplete="off" method="POST">
                            <h2>Sign up</h2><br>
                            <hr>

                            <div class="input-section">
                                <label>First Name <span class="required-color"></span></label>
                                <input type="text" name="fname" placeholder="Enter First Name"id="last-name-input" />
                                <span id="last-name-error" class="hide required-color error-message">Invalid Input</span>
                            <span id="empty-last-name" class="hide required-color error-message">First Name Cannot Be Empty</span>
                            </div>

                            <div class="input-section">
                                <label>Last Name <span class="required-color"></span></label>
                                <input type="text" name="lname" placeholder="Enter Last Name"id="first-name-input"   />
                                <span id="first-name-error" class="hide required-color error-message">Invalid Input</span>
                            <span id="empty-first-name" class="hide required-color error-message">First Name Cannot Be Empty</span>
                            </div>

                            <div class="input-section">
                                <label>Middle Name <span class="required-color"></span></label>
                                <input type="text" name="mname" placeholder="Enter Last Name"id="middle-name-input"  />
                                <span id="middle-name-error" class="hide required-color error-message">Invalid Input</span>
                                <span id="empty-middle-name" class="hide required-color error-message">First Name Cannot Be Empty</span>
                            </div>
                          
                        
                            <div class="input-section">
                                <label>Email <span class="required-color"></span></label>
                                <input type="email" name="email" placeholder="Enter your email" id="email" />
                                <span id="email-error" class="hide required-color error-message">Invalid Email</span>
                                <span id="empty-email" class="hide required-color error-message">Email Cannot Be Empty</span> 
                            <div class="input-section">
                                <label>Contact details <span class="required-color"></span></label>
                                <input type="text" name="contact" placeholder="Enter Phone Number" id="phone" />
                                <span id="phone-error" class="hide required-color error-message">Phone Number Should Have 11 Digits</span><span id="empty-phone" class="hide required-color error-message">Phone cannot be empty</span>
                            </div>
                            <div class="input-section">
          <label>Region <span class="required-color"></span></label>
          <select  id="options" name="region">
              <option></option>
              <option>NCR</option>
              <option>REGION 10</option>   
          </select>
          <span id="region-name-error" class="hide required-color error-message">Invalid Input</span>
          <span id="empty-region" class="hide required-color error-message">Field is  required</span>
    </div>
                            <div class="input-section">
          <label>Province <span class="required-color"></span></label>
          <select  id="options" name="province">
              <option></option>
              <option>BUKIDNON</option>
              <option>CAMIGUIN</option>
              <option>MISAMIS ORIENTAL</option>
              <option>MISAMIS OCCIDENTAL</option>
          </select>
          <span id="province-name-error" class="hide required-color error-message">Invalid Input</span>
          <span id="province-last-name" class="hide required-color error-message">Field is  required</span>
    </div>
                            <div class="input-section">
          <label>City <span class="required-color"></span></label>
          <select  id="options" name="city">
              <option></option>
              <option>CAGAYAN DE ORO</option>
              <option>BALINGASAG</option>
              <option>JASAAN</option>
              <option>TAGOLOAN</option>
          </select>
          <span id="city-name-error" class="hide required-color error-message">Invalid Input</span>
          <span id="city-last-name" class="hide required-color error-message">Field is  required</span>
    </div>

              
                            <div class="input-section">
                <label>Create Password <span class="required-color"></span></label><input type="password" name="password" placeholder="Enter Password"id="password"required/>
          <span id="password-error" class="hide required-color error-message">
           <small> Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters </small></span> <span id="empty-password" class="hide required-color error-message">Password Cannot Be Empty</span></div>

           <div class="input-section">
          <label>Confirm Password <span class="required-color"></span></label>
          <input type="password" id="verify-password"  placeholder="Confirm Password" required />
          <span
            id="verify-password-error"
            class="hide required-color error-message"
            >Should Be Same As Previous Password</span>
          <span
            id="empty-verify-password"
            class="hide required-color error-message"
            >Password Cannot Be Empty</span>
        </div>

        <button id="register-button" type="submit" name="save_student">REGISTER</button>
    <small> By clicking the 'Register' button, you confirm that you accept our <font color="blue"> Privacy Notice </font>  </small>
       

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script -->
    <script src="script.js"></script>
  </body>
</html>