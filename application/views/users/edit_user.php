<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Edit User Form</h2>
  <?php if($this->session->flashdata('msg')) { ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('msg'); ?> </div>
  <?php } ?>
  <form action="<?php echo base_url('users/update-user-data')?>" method="post">
    <input type="hidden" name="user_id" value="<?php echo $users[0]['id'] ?>">
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter name" value="<?php echo $users[0]['name'] ?>" name="name">
    </div>
    <div class="form-group">
      <label for="pwd">Email:</label>
      <input type="email" class="form-control" id="pwd" placeholder="Enter email" value="<?php echo $users[0]['email'] ?>" name="email">
    </div>
  <!--   <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div> -->
    <button type="submit" class="btn btn-default">Update</button>
  </form>
</div>

</body>
</html>
