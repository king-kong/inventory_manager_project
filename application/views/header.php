<html>
	<head>
		<title><?php echo $title?></title>
		 <script type="text/javascript">
           <?php if ($error !== "")
             {
               echo "alert('". $error. "');";
			 }
           ;
           ?>
        </script>
	</head>
		<body>