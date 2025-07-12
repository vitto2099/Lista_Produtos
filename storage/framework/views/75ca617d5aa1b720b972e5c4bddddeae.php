<?php $__env->startSection('title', 'Lista de Produtos'); ?>

<?php $__env->startSection('content'); ?>
  <div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-semibold text-white">Estoque Atual</h2>
    <a href="<?php echo e(route('produtos.create')); ?>"
       class="bg-purple-600 hover:bg-purple-500 text-white px-4 py-2 rounded-lg shadow transition duration-200">
       <i class="fas fa-plus mr-1"></i> Adicionar Produto
    </a>
  </div>

  <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
    <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="bg-[#1a1a25] rounded-xl p-5 border border-gray-700 hover:border-purple-500 transition duration-200 shadow-md hover:shadow-purple-600/20">
        <h3 class="text-xl font-semibold text-purple-400 mb-1"><?php echo e($produto->nome); ?></h3>
        <p class="text-sm text-gray-300">Preço: <span class="text-green-400">R$ <?php echo e(number_format($produto->preco, 2, ',', '.')); ?></span></p>
        <p class="text-sm text-gray-400">Estoque: <?php echo e($produto->estoque); ?></p>
        <p class="text-sm text-gray-500">Categoria ID: <?php echo e($produto->categoria_id); ?></p>

        <div class="mt-4 flex gap-2">
          <a href="<?php echo e(route('produtos.edit', $produto->id)); ?>"
             class="flex-1 bg-purple-700 hover:bg-purple-600 text-white font-medium px-4 py-2 rounded-lg text-center transition duration-200">
            <i class="fas fa-edit mr-1"></i> Editar
          </a>

          <form action="<?php echo e(route('produtos.destroy', $produto->id)); ?>" method="POST" class="flex-1">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit"
              class="w-full bg-gray-800 hover:bg-gray-700 text-gray-100 font-medium px-4 py-2 rounded-lg transition duration-200">
              <i class="fas fa-trash mr-1 text-purple-400"></i> Remover
            </button>
          </form>
        </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>

  <?php if(count($produtos) === 0): ?>
    <div class="text-center py-12 text-gray-400">
      <p class="text-purple-400 font-semibold text-lg">Nenhum produto encontrado.</p>
      <p class="text-sm mt-2">Clique em <span class="text-purple-300 font-medium">"Adicionar Produto"</span> para criar o primeiro item no sistema.</p>
    </div>
  <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\vck98\Desktop\DEV\laravel_18\Lista_Produtos FINAL\Lista_Produtos (2)\Lista_Produtos\resources\views/produtos/index.blade.php ENDPATH**/ ?>