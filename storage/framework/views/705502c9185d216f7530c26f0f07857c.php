<?php $__env->startSection('content'); ?>

<!-- Ventana modal Insignias -->
<div class="modal fade" id="ventanaModal" tabindex="-1" role="dialog" aria-labelledby="tituloVentana" aria-hidden="true">
    <div class="modal-dialog" role="document" >
      <div class="modal-content">
        <div class="modal-header">
          <h5 id="tituloVentana" >Título de la ventana modal</h5>
          <button class="close" data-dismiss="modal" aria-label="Cerrar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div id="avatares" class="alert alert-success">
            <img src="<?php echo e(asset('images/Plata.png')); ?>" alt="">
            <img src="<?php echo e(asset('images/PiezadeOro.png')); ?>" alt="">
            <img src="<?php echo e(asset('images/diamante.png')); ?>" alt="">
            <img src="<?php echo e(asset('images/Zafiro.png')); ?>" alt="">                    
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-warming" type="button" data-dismiss="modal" >Cerrar</button>
          <button class="btn btn-success" > Aceptar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Ventana modal Insignias -->


    <div class="container-fluid container-full-height">
        <div class="row">
            <div class="col-lg-4">
                <div class="avatar-container">
                    <a href="/dashboard">
                        <img src="images/ninio3.jpg" alt="Avatar" class="avatar">
                    </a>
                </div>
            </div>
            <div class="col-lg-8">
                <br>
                    <div class="card">
                        <div class="card-header" style="text-align: center">RESULTADO</div>
                        <div class="card-body">
                            <h1 style="text-align: center">Su puntuacion fue de: <?php echo e($nota); ?></h1>
                        </div>
                    </div>

            </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\juane\OneDrive\Escritorio\Guatetrivia\resources\views/preguntas/resultados.blade.php ENDPATH**/ ?>