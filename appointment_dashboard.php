<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPOINTMENT</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<style>
    h1{
    font-family: "Jost", sans-serif;
    font-optical-sizing: auto;
    font-weight: 600;
    font-style: normal;
  } 
    
</style>
</head>
<body>
    <h1 align="center">welcome to appointment page</h1>
  <div class="jumbotron">
  <div class="row">
        <div class="col-md-4">
        <h2>Choose your patient</h2>
        <form action="">
                <select name="" id="" class="form-control">
<option value="">sonu kumar</option>
<option value="">vikas kumar</option>
<option value="">riya </option>
<option value="">sweta</option>
<option value="">rajeev</option>
                </select>
<br>
                <div class="radio-group form-control">
                                    <label>Emergency / disability :   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </label>
                                    <label class="radio-container">NO
                                        <input type="radio" name="gender" value="male" id="gender" checked required />
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container"> &nbsp; &nbsp; &nbsp; &nbsp;YES
                                        <input type="radio" name="gender" value="female" id="gender" required />
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <button class="btn btn-success float-right">check appointment</button>


            </form>
        </div>
        <div class="col-md-5"></div>
        <div class="col-md-3">
            <h2>ADD YOUR FAMILY MEMBER</h2>
            <form action="">
                <input type="text" class="form-control" placeholder="shubham kumar">
                <button class="btn btn-success float-right">Add</button>
            </form>
            </div>
    </div>
  </div>
</body>
</html>