<?php $__env->startSection('title', 'Dashboard'); ?>

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
        <div class="col comic-style">
            <div class="avatar-container">
              <a href="/select-avatar">
                <img src="<?php echo e(asset('images/ninio3.jpg')); ?>" alt="Avatar" class="avatar">
              </a>
            </div>
        </div>
        <div class="col comic-style">
            <div id="play-button" class="icons">
                <a href="/preguntas" class="mr-2"><i class="fa-solid fa-circle-play fa-10x"></i></i></a>
            </div>
            <div class="add-friends">
                
                <a href="<?php echo e(url('/buscar-amigos')); ?>"><i class="fas fa-user-plus fa-3x"></i></a>

                <!-- Botón  vista "ranking" -->
                <div class="rankings-button">
                    <a href="<?php echo e(url('/rankings')); ?>" class="btn btn-primary">Ver Ranking</a>
                </div>
            </div>

        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\juane\OneDrive\Escritorio\Guatetrivia\resources\views/dashboard.blade.php ENDPATH**/ ?>