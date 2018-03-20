<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>halaman crud</title>
	<link rel="stylesheet" href="">
</head>

<body>
    <h1>Login berhasil !</h1>
    <h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
    <a href="<?php echo base_url('login/logout'); ?>">Logout</a>
	<a href="crud/add">Create</a>
	<table width='80%' border=1>
		 <tr>
        <th>id</th> 
        <th>Name</th> 
        <th>Email</th> 
        <th>Message</th> 
        <th>Update</th>
    	 </tr>
    	 <?php foreach ($content->result_array() as $key): ?>
    	<tr>
        <th><?php echo $key['id'] ?></th> 
        <th><?php echo $key['Nama'] ?></th> 
        <th><?php echo $key['Email'] ?></th> 
        <th><?php echo $key['Message'] ?></th> 
        <th><a href="crud/delete/<?php echo $key['id']?>">Delete</a></th>
    	 </tr>
    	 <?php endforeach ?>
	</table>
</body>

</html>