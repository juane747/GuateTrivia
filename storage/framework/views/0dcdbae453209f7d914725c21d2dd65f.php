<?php $__env->startSection('title', 'Buscar amigos'); ?>
    
<?php $__env->startSection('content'); ?>

<div class="container">
  <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.amistad-navbar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('amistad-navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
  
  <div class="titulo-tabla"><h1>Buscar Amigos</h1></div>
    <div class="table-responsive small">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            
            <th scope="col">Usuario</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $usuariosNoAmigos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            
            <td><?php echo e($usuario->name); ?></td>
            <td>
              <form action="<?php echo e(route('enviar-solicitud-amistad')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="persona1" value="<?php echo e(Auth::id()); ?>">
                <input type="hidden" name="persona2" value="<?php echo e($usuario->id); ?>">
                <input type="hidden" name="estado_solicitud" value="1">
                <button type="submit" class="btn btn-primary">Enviar solicitud</button>
              </form>              
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\juane\OneDrive\Escritorio\Guatetrivia\resources\views/amistad/buscar-amigos.blade.php ENDPATH**/ ?>