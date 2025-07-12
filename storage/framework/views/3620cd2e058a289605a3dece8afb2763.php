

<?php $__env->startSection('title', 'Cadastrar Produto'); ?>

<?php $__env->startSection('content'); ?>
  <div class="max-w-xl mx-auto bg-white p-6 rounded-xl shadow border border-gray-200">
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-2xl font-semibold text-orange-600">Novo Produto</h2>
      <a href="<?php echo e(route('produtos.index')); ?>"
         class="text-sm text-gray-500 hover:text-orange-600 transition underline">
         ← Voltar
      </a>
    </div>

    <form action="<?php echo e(route('produtos.store')); ?>" method="POST" class="space-y-4">
      <?php echo csrf_field(); ?>
      <div>
        <label class="block text-sm text-gray-700">Nome:</label>
        <input type="text" name="nome" class="w-full px-4 py-2 rounded border border-gray-300 focus:ring focus:ring-orange-500" required>
      </div>

      <div>
        <label class="block text-sm text-gray-700">Preço:</label>
        <input type="number" step="0.01" name="preco" class="w-full px-4 py-2 rounded border border-gray-300 focus:ring focus:ring-orange-500" required>
      </div>

      <div>
        <label class="block text-sm text-gray-700">Estoque:</label>
        <input type="number" name="estoque" class="w-full px-4 py-2 rounded border border-gray-300 focus:ring focus:ring-orange-500" required>
      </div>

      <!-- CAMPO ADICIONADO (Categoria) -->
      <div>
        <label class="block text-sm text-gray-700">Categoria:</label>
        <select name="categoria_id" class="w-full px-4 py-2 rounded border border-gray-300 focus:ring focus:ring-orange-500" required>
          <option value="">Selecione uma categoria</option>
          <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($categoria->id); ?>"><?php echo e($categoria->nome); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      </div>

      <button type="submit"
              class="bg-orange-600 hover:bg-orange-500 text-white px-6 py-2 rounded-md transition shadow-md">
        Salvar
      </button>
    </form>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\vck98\Desktop\DEV\laravel_18\Lista_Produtos\resources\views/produtos/create.blade.php ENDPATH**/ ?>