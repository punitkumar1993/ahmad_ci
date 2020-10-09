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
<?php if($this->session->flashdata('msg')) { ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('msg'); ?> </div>
  <?php } ?>
<div class="container">
  <h2>Users Data</h2>
  <?php// print_r($users); ?>      
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
        <th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($users as $key => $value) {
      ?>
      <tr>
         <td><?php echo $value['name'] ?></td>
         <td><?php echo $value['email'] ?></td>
         <td><a href="<?php echo base_url('users/update-user/'.$value['id']) ?>">Edit User</a>
          <a href="<?php echo base_url('users/delete-user/'.$value['id']) ?>">Delete User</a></td>
      </tr>
   <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
