<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/3e0c251e14.js" crossorigin="anonymous"></script>
    <style>
      body{
        height:600px;
    
      }
      div{
      
    margin-top:40px;
    height:50px;
    
    display: inline-block;
    padding-bottom:3px;
    
      }
      h3{
        font-weight: 300;
        font-family: Prague-Regular;
        color: #000;
        
      }
    .register{
    width: 600px;
    
    
    
    position: relative;
    top:-170px;
    margin-left:260px;
    
    }
    
      .f1{
    background:#fff;
    margin-left:30px;
    }
    .form-group{
    
    margin-bottom:-30px;
    }
    input.form-control{
    background:transparent;
    
    }
   
  i.u:focus{
    display: none;
    opacity: 0;
  }
    
    </style>
  </head>
  <body>
    <div style="border-bottom:1px solid #fff;margin-left:500px;position: relative;top:-25px">
      <center>
      <h3>Registration form</h3>
      <a href="user.php">registered users</a>
      </center>
    </div>
    <div class="container form">
      <div class="row">
        <div class="col-md-12 f1">
          <form method="post" action="datainsert3.php">
            <div class="register">
              <div class="row">
                <div class="form-group col-md-6">
                  
                  <input type="text" class="form-control" name="sname" placeholder="    Enter First Name"style="border: 1px solid #eaebeb">
                   <i class="fas fa-user u" style="position: relative;top:-31px;left:7px;width:9px;font-size:14px"></i>
                </div>
                <div class="form-group col-md-6">
                  
                  <input type="text" class="form-control" name="s" placeholder="    Enter Last Name"style="border: 1px solid #eaebeb">
                   <i class="fas fa-user" style="position: relative;top:-31px;left:7px;width:9px;font-size:14px"></i>
                </div>
               
                <div class="form-group col-md-6">
                  
                  <input type="text" class="form-control" name="smob" placeholder="    Enter Mobile Number" style="border: 1px solid #eaebeb">
                  <i class="fas fa-mobile-alt" style="position: relative;top:-31px;left:7px;width:9px;font-size:14px"></i>
                </div>
                 <div class="form-group col-md-6">
                  
                  <input type="text" class="form-control" name="semail"placeholder="    Enter Email"style="border: 1px solid #eaebeb">
                  <i class="fas fa-envelope-square" style="position: relative;top:-31px;left:7px;width:9px;font-size:14px"></i>
                </div>
                <div class="form-group col-md-6">
                  
                  <input type="text" class="form-control" name="sg" placeholder="    Enter 10th" style="border: 1px solid #eaebeb">
                  <i class="fas fa-user-graduate" style="position: relative;top:-31px;left:7px;width:9px;font-size:14px"></i>
                </div>
                <div class="form-group col-md-6">
                  
                  <select name="intern" class="form-control"style="border: 1px solid #eaebeb">
                    <option value="0">Select</option>
                    <option value="web designing">Web designing</option>
                  </select>
                </div>
                
                <div class="form-group col-md-6" style="margin-left:9px">
                  
                  <input type="radio" name="m" value="male" >
                  <span style="color:grey">Male</span>
                  <input type="radio"  name="m" value="female">
                  <span style="color:grey">Female</span>
                </div>
                
                <div class="form-group col-md-6">
                  <input type="submit" name="submit" class="btn btn-primary form-control" style=" background-color: #0275d8;width:600px">
                  
                </div>
                 
                
              
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>