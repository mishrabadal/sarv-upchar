<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hospital management</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="angimate.css">
</head>

<body>
   
<h1>hello  india</h1>
<form>
    email <input type="text" class="form-control" id="email"> <br>
    password <input type="text" class="form-control" id="password"> <br>
    <button class="btn btn-danger" id="form-submit">submit</button>   
</form>
</body>
<script>
      $(document).ready(() => {
            $("#form-submit").click(

                function(e) {

                    e.preventDefault();
                   $.ajax({
                    type:"POST",
                    url: "data.php",
                    data: {
                          email :$("#email").val(),
                          password :$("#password").val(),

                        },
                        beforeSend :function(){
                            alert("we are saving your data");
                            $("#form-submit").css("display","none");
                        },
                        success:function(response){
                            document.write(response);
                            $("#form-submit").css("display","block");
                        }

                   });
                   
                }
            );
        });
</script>
</html>