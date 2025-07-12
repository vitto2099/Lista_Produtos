<?php $__env->startSection('title', 'Lista de Produtos'); ?>

<?php $__env->startSection('content'); ?>
  <div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-semibold">Estoque Atual</h2>
    <a href="<?php echo e(route('produtos.create')); ?>"
       class="bg-orange-600 hover:bg-orange-500 text-white px-4 py-2 rounded-md transition">
       + Adicionar Produto
    </a>
  </div>

  
  <?php
    // dd($produtos); // Descomente para ver os dados
  ?>

  <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
    <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="bg-white rounded-xl p-4 shadow hover:shadow-lg transition border border-gray-200">
        <h3 class="text-lg font-semibold text-orange-600"><?php echo e($produto->nome); ?></h3>
        <p class="text-sm text-gray-700">Preço: R$ <?php echo e(number_format($produto->preco, 2, ',', '.')); ?></p>
        <p class="text-sm text-gray-600">Estoque: <?php echo e($produto->estoque); ?></p>
        <p class="text-sm text-gray-600">Categoria ID: <?php echo e($produto->categoria_id); ?></p>
        
        <div class="mt-4 flex gap-2">
          <a href="<?php echo e(route('produtos.edit', $produto->id)); ?>"
             class="bg-yellow-400 hover:bg-yellow-300 text-black font-semibold px-3 py-1 rounded transition">
             Editar
          </a>

          <form action="<?php echo e(route('produtos.destroy', $produto->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit"
              class="bg-red-500 hover:bg-red-400 text-white font-semibold px-3 py-1 rounded transition">
              Excluir
            </button>
          </form>
        </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
  
  <?php if(count($produtos) === 0): ?>
    <div class="text-center py-8">
      <p class="text-red-500 font-bold">Nenhum produto encontrado!</p>
      <p class="text-gray-600">Adicione seu primeiro produto usando o botão acima.</p>
    </div>
  <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\vck98\Desktop\DEV\laravel_18\Lista_Produtos\resources\views/produtos/index.blade.php ENDPATH**/ ?>