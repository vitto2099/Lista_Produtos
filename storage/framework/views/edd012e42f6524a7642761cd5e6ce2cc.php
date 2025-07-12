<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $__env->yieldContent('title', 'Atividade de Sistema de Produtos em PHP M2 '); ?></title>

    <!-- Fonte e Ícones -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    <!-- Estilo direto -->
    <style>
      body {
        font-family: 'Inter', sans-serif;
        background-color: #0f0f13;
        color: #f3f4f6;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
      }

      header {
        background: linear-gradient(to right, #7e3af2, #5a1fc9);
        padding: 1rem 2rem;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        display: flex;
        align-items: center;
        justify-content: space-between;
      }

      header h1 {
        font-size: 1.5rem;
        font-weight: bold;
        color: #fff;
        display: flex;
        gap: 0.6rem;
        align-items: center;
      }

      main {
        padding: 2rem;
        width: 100%;
        max-width: 1280px;
        margin: 0 auto;
        flex: 1;
      }

      footer {
        text-align: center;
        padding: 1.5rem;
        color: #9ca3af;
        font-size: 0.9rem;
        border-top: 1px solid #2d3748;
        background-color: #15151d;
      }

      .alert {
        background-color: rgba(14, 159, 110, 0.15);
        color: #0e9f6e;
        padding: 1rem 1.25rem;
        border-left: 4px solid #0e9f6e;
        border-radius: 0.5rem;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
      }
    </style>
  </head>
  <body>
    <header>
      <h1><i class="fas fa-box-open"></i> Atividade de Sistema de Produtos em PHP M2</h1>
    </header>

    <main>
      <?php if(session('success')): ?>
        <div class="alert">
          <i class="fas fa-check-circle"></i>
          <?php echo e(session('success')); ?>

        </div>
      <?php endif; ?>

      <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer>
      &copy; <?php echo e(date('Y')); ?> Sistema de Produtos Bona – Desenvolvido com  café
    </footer>
  </body>
</html>
<?php /**PATH C:\Users\vck98\Desktop\DEV\laravel_18\Lista_Produtos FINAL\Lista_Produtos (2)\Lista_Produtos\resources\views/layouts/app.blade.php ENDPATH**/ ?>