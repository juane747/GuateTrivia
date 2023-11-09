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
                    <img src="images/ninio3.jpg" alt="Avatar" class="avatar">
                </div>
            </div>
            <div class="col-lg-8">
                <br>
                    <div class="card">
                        <form method="GET" action="<?php echo e(route('preguntas.resultado')); ?>">
                            <div class="card-header" style="text-align: center"><?php echo e($data->pregunta); ?></div>
                            <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="opcion" id="opcion_a" value="A">
                                        <label class="form-check-label" for="flexRadioDefault_a">
                                        <?php echo e($data->respuestas->A); ?>

                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="opcion" id="opcion_b" value="B">
                                        <label class="form-check-label" for="flexRadioDefault_b">
                                            <?php echo e($data->respuestas->B); ?>

                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="opcion" id="opcion_c" value="C">
                                        <label class="form-check-label" for="flexRadioDefault_c">
                                            <?php echo e($data->respuestas->C); ?>

                                        </label>
                                    </div>
                                <input type="hidden" name= "respuesta" value="<?php echo e($data->respuestas->correcta); ?>">
                            </div>
                            <div class="card-footer">
                                    <button class="btn btn-success ">Enviar</button>
                            </div>
                        </form>
                    </div>
            </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\juane\OneDrive\Escritorio\Guatetrivia\resources\views/preguntas/index.blade.php ENDPATH**/ ?>