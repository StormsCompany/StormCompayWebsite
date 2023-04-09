<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1">

				<!-- CSRF Token -->
				<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

				<title><?php echo e(config('app.name', 'Laravel')); ?></title>

				<!-- Fonts -->
				<link rel="dns-prefetch" href="//fonts.gstatic.com">
				
				<!-- gpstyle-->
				<!-- fevicon -->
				<link rel="icon" href="<?php echo e(asset('assets/images/fevicon.png')); ?>" type="image/gif" />
				<!-- Scrollbar Custom CSS -->
				
				<!-- Tweaks for older IEs-->
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
								media="screen" />

				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
								integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
								crossorigin="anonymous" referrerpolicy="no-referrer" />
				<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
				<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
								crossorigin="anonymous"></script>

				<!-- Scripts -->
                    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
				<link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
</head>

<body>
				<div id="app">
								

								<main class="py-4">
												<?php echo $__env->yieldContent('content'); ?>
								</main>
				</div>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\StormCompayWebsite\resources\views/layouts/app.blade.php ENDPATH**/ ?>