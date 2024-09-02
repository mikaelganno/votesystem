<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<title>Bal de promo Libermann 2024</title>
  	<!-- Tell the browser to be responsive to screen width -->
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="../images/icons8-youtube-96.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="traitement.php" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h3 class="modal-title"><b>REGISTER NOW</b></h3>
                    </div>
                <div class="form-group">
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="lastname" name="lastname" required placeholder="Enter your name">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="firstname" name="firstname" required placeholder="Enter your username">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="password" name="password" required placeholder="Enter your password">
                    </div>
                </div>
                <div  class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Insert your photo</label>
                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="sign-up" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Register Now</button>
                </div>
             </form>
            </div>
        </div>
    </div>
</div>
