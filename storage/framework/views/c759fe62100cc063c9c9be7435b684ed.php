

<?php $__env->startSection('header'); ?>
    <div class="flex justify-between items-center">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Minhas Tarefas')); ?>

        </h2>
        <a href="<?php echo e(route('tarefas.create')); ?>"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Nova Tarefa
        </a>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <!-- Filtros -->
                    <div class="mb-6">
                        <form method="GET" action="<?php echo e(route('tarefas.index')); ?>" class="flex gap-4">
                            <select name="status" class="border-gray-300 rounded-md shadow-sm"
                                onchange="this.form.submit()">
                                <option value="">Todas as Tarefas</option>
                                <option value="pendente" <?php echo e(request('status') == 'pendente' ? 'selected' : ''); ?>>
                                    Pendentes
                                </option>
                                <option value="concluida" <?php echo e(request('status') == 'concluida' ? 'selected' : ''); ?>>
                                    Concluídas
                                </option>
                            </select>
                        </form>
                    </div>

                    <!-- Mensagens de sucesso/erro -->
                    <?php if(session('success')): ?>
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>

                    <?php if(session('error')): ?>
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                            <?php echo e(session('error')); ?>

                        </div>
                    <?php endif; ?>

                    <!-- Lista de Tarefas -->
                    <?php if($tarefas->count() > 0): ?>
                        <div class="space-y-4">
                            <?php $__currentLoopData = $tarefas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tarefa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div
                                    class="border rounded-lg p-4 <?php echo e($tarefa->status == 'concluida' ? 'bg-green-50' : 'bg-white'); ?>">
                                    <div class="flex justify-between items-start">
                                        <div class="flex-1">
                                            <h3
                                                class="text-lg font-semibold <?php echo e($tarefa->status == 'concluida' ? 'line-through text-gray-500' : 'text-gray-900'); ?>">
                                                <?php echo e($tarefa->titulo); ?>

                                            </h3>
                                            <?php if($tarefa->descricao): ?>
                                                <p class="text-gray-600 mt-2"><?php echo e($tarefa->descricao); ?></p>
                                            <?php endif; ?>

                                            <div class="flex items-center gap-4 mt-3 text-sm text-gray-500">
                                                <span
                                                    class="px-2 py-1 rounded-full text-xs <?php echo e($tarefa->status == 'concluida' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800'); ?>">
                                                    <?php echo e(ucfirst($tarefa->status)); ?>

                                                </span>

                                                <?php if($tarefa->data_vencimento): ?>
                                                    <span>
                                                        <strong>Vence em:</strong>
                                                        <?php echo e($tarefa->data_vencimento->format('d/m/Y')); ?>

                                                    </span>
                                                <?php endif; ?>

                                                <span>
                                                    <strong>Criada em:</strong>
                                                    <?php echo e($tarefa->created_at->format('d/m/Y H:i')); ?>

                                                </span>
                                            </div>
                                        </div>

                                        <div class="flex gap-2 ml-4">
                                            <!-- Botão Toggle Status -->
                                            <form method="POST" action="<?php echo e(route('tarefas.toggle-status', $tarefa)); ?>"
                                                class="inline">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('PATCH'); ?>
                                                <button type="submit"
                                                    class="px-3 py-1 text-sm rounded <?php echo e($tarefa->status == 'pendente' ? 'bg-green-500 hover:bg-green-700 text-white' : 'bg-yellow-500 hover:bg-yellow-700 text-white'); ?>">
                                                    <?php echo e($tarefa->status == 'pendente' ? 'Concluir' : 'Reabrir'); ?>

                                                </button>
                                            </form>

                                            <!-- Botão Ver -->
                                            <a href="<?php echo e(route('tarefas.show', $tarefa)); ?>"
                                                class="bg-blue-500 hover:bg-blue-700 text-white px-3 py-1 text-sm rounded">
                                                Ver
                                            </a>

                                            <!-- Botão Editar -->
                                            <a href="<?php echo e(route('tarefas.edit', $tarefa)); ?>"
                                                class="bg-yellow-500 hover:bg-yellow-700 text-white px-3 py-1 text-sm rounded">
                                                Editar
                                            </a>

                                            <!-- Botão Excluir -->
                                            <form method="POST" action="<?php echo e(route('tarefas.destroy', $tarefa)); ?>" class="inline"
                                                onsubmit="return confirm('Tem certeza que deseja excluir esta tarefa?')">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit"
                                                    class="bg-red-500 hover:bg-red-700 text-white px-3 py-1 text-sm rounded">
                                                    Excluir
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        <!-- Paginação -->
                        <div class="mt-6">
                            <?php echo e($tarefas->appends(request()->query())->links()); ?>

                        </div>
                    <?php else: ?>
                        <div class="text-center py-12">
                            <p class="text-gray-500 text-lg">Nenhuma tarefa encontrada.</p>
                            <a href="<?php echo e(route('tarefas.create')); ?>"
                                class="mt-4 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Criar Primeira Tarefa
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\gestao-tarefas\resources\views/tarefas/index.blade.php ENDPATH**/ ?>