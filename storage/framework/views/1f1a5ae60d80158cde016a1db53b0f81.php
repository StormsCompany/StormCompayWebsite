<!DOCTYPE html>
<html lang="en">

<head>
				<meta charset="UTF-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="ie=edge">
				<title>Document</title>
</head>

<body>
				<h1>You have a message from <?php echo e($messagedata['name']); ?></h1>
				<p>Email <?php echo e($messagedata['email']); ?></p>
				<p><?php echo e($messagedata['message']); ?></p>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\StormCompayWebsite\resources\views/emails/guestmessage.blade.php ENDPATH**/ ?>