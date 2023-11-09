<?php $__env->startSection('content'); ?>
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-link','data' => ['href' => route('dashboard'),'active' => request()->routeIs('dashboard'),'class' => 'text-green-600 font-semibold']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('dashboard')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('dashboard')),'class' => 'text-green-600 font-semibold']); ?>
            <?php echo e(__('Dashboard')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="p-6 bg-white border-b border-gray-800 page-header">
                        <h2 class="text-2xl font-semibold text-center text-green-600 dark:text-green-400 mb-4">
                            Ranking de Usuarios
                        </h2>

                        <table class="min-w-full mt-4 border">
                            <!-- Encabezados de la taba -->
                            <thead class="bg-green-100 dark:bg-gray-700">
                            <tr>
                                <th class="px-8 py-2 front-bold border text-green-800">Puesto</th>
                                <th class="px-8 py-2 font-bold border text-green-800">Mejor Trofeo</th>
                                <th class="px-4 py-2 font-bold border text-green-800">Nombre de Usuario</th>
                                <th class="px-4 py-2 font-bold border text-green-800">Correo Electrónico</th>
                                <th class="px-4 py-2 font-bold border text-green-800">Nivel de Usuario</th>
                            </tr>
                            </thead>
                            <!-- Contenido de la tabla -->
                            <tbody>
                            <?php
                                $contador=0;
                            ?>
                            <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="px-8 py-2 border text-green-700"><?php echo e(++$contador); ?></td>
                                    <td class="px-8 py-2 border text-green-700"><?php echo e($usuario->mejortrofeo); ?></td>
                                    <td class="px-4 py-2 border text-green-700"><?php echo e($usuario->name); ?></td>
                                    <td class="px-4 py-2 border text-green-700"><?php echo e($usuario->email); ?></td>
                                    <td class="px-4 py-2 border text-green-700"><?php echo e($usuario->nivelusuario); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\juane\OneDrive\Escritorio\Guatetrivia\resources\views/rankings.blade.php ENDPATH**/ ?>