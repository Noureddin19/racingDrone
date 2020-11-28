<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/action_page.php" class="was-validated ">
                                                              <div class="form-group text-left">
                                                                  <label for="uname" class="left">Full Name</label>
                                                                  <input type="text" class="form-control border" id="uname" placeholder="Enter Name" name="uname" required>
                                                                  <div class="valid-feedback">Valid.</div>
                                                                  <div class="invalid-feedback">Please fill out this field.</div>
                                                              </div>
                                                             
                                                              <div class="form-group text-left">
                                                                  <label for="pwd">Telephone</label>
                                                                  <input type="text" class="form-control border" id="pwd" placeholder="Enter Number" name="pswd" required>
                                                                  <div class="valid-feedback">Valid.</div>
                                                                  <div class="invalid-feedback">Please fill out this field.</div>
                                                              </div>
                                                              <div class="form-group text-left">
                                                                  <label for="pwd">Email</label>
                                                                  <input type="email" class="form-control border" id="pwd" placeholder="Enter Your Email" name="pswd" required>
                                                                  <div class="valid-feedback">Valid.</div>
                                                                  <div class="invalid-feedback">Please fill out this field.</div>
                                                              </div>
                                                              
                                                             
                                                              <button type="submit" class="btn btn-primary text-dark text-center" style="background: inherit; border-color: red;">Send</button>
                                                          </form>
</body>
</html>