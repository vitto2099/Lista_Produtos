

<?php $__env->startSection('title', 'Editar Produto'); ?>

<?php $__env->startSection('content'); ?>
  <div class="max-w-xl mx-auto bg-gray-800 p-6 rounded-xl shadow-md">
    <h2 class="text-2xl font-semibold text-white mb-4">Editar Produto</h2>

    <form action="<?php echo e(route('produtos.update', $produto)); ?>" method="POST" class="space-y-4">
      <?php echo csrf_field(); ?>
      <?php echo method_field('PUT'); ?>

      <div>
        <label class="block text-sm text-gray-300">Nome:</label>
        <input type="text" name="nome" value="<?php echo e($produto->nome); ?>" class="w-full px-4 py-2 rounded bg-gray-700 text-white border border-gray-600 focus:ring focus:ring-orange-500" required>
      </div>

      <div>
        <label class="block text-sm text-gray-300">Preço:</label>
        <input type="number" step="0.01" name="preco" value="<?php echo e($produto->preco); ?>" class="w-full px-4 py-2 rounded bg-gray-700 text-white border border-gray-600 focus:ring focus:ring-orange-500" required>
      </div>

      <div>
        <label class="block text-sm text-gray-300">Estoque:</label>
        <input type="number" name="estoque" value="<?php echo e($produto->estoque); ?>" class="w-full px-4 py-2 rounded bg-gray-700 text-white border border-gray-600 focus:ring focus:ring-orange-500" required>
      </div>

      <button type="submit"
              class="bg-orange-600 hover:bg-orange-500 text-white px-6 py-2 rounded-md transition shadow-md">
        Atualizar
      </button>
    </form>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\vck98\Desktop\DEV\laravel_18\Lista_Produtos\resources\views/produtos/edit.blade.php ENDPATH**/ ?>