<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $__env->yieldContent('title', 'Sistema de Produtos'); ?></title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    <style>
      body {
        font-family: 'Inter', sans-serif;
      }
    </style>
  </head>
  <body class="bg-gray-100 text-gray-900 transition-colors">

    <header class="flex items-center justify-between px-6 py-4 bg-white shadow-md">
      <h1 class="text-2xl font-bold text-orange-600">Sistema de Produtos</h1>
    </header>

    <main class="p-6 max-w-6xl mx-auto">
      <?php if(session('success')): ?>
        <div class="mb-4 px-4 py-3 bg-green-100 text-green-800 border border-green-300 rounded">
          <?php echo e(session('success')); ?>

        </div>
      <?php endif; ?>
      <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer class="text-center text-sm text-gray-500 py-6 border-t border-gray-300 mt-12">
      &copy; <?php echo e(date('Y')); ?> Sistema de Produtos - Desenvolvido com Café ☕
    </footer>
  </body>
</html>
<?php /**PATH C:\Users\vck98\Desktop\DEV\laravel_18\Lista_Produtos\resources\views/layouts/app.blade.php ENDPATH**/ ?>