<html>
    <head>
        <title>Laravel Test</title>
    </head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <body>
        <div class="container">
            <?php echo $__env->make('inc.topnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div>
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </body>
    </html><?php /**PATH C:\xampp\htdocs\AD_WebTech_Tech\resources\views/layouts/app.blade.php ENDPATH**/ ?>