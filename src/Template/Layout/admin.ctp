<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    
	
	<?php echo $this->Html->css(['admin/css/bootstrap.min.css', 'admin/css/sb-admin.css', 'admin/css/plugins/morris.css' , 'admin/font-awesome/css/font-awesome.min.css']);?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	
    
		<?=$this->fetch('content');?>
	</div>
    <!-- /#wrapper -->
    <!-- jQuery -->
	<?php echo $this->Html->script(['admin/js/jquery.js', 'admin/js/bootstrap.min.js', 'admin/js/plugins/morris/raphael.min.js','admin/js/plugins/morris/morris.min.js','admin/js/plugins/morris/morris-data.js']);?>

</body>

</html>
