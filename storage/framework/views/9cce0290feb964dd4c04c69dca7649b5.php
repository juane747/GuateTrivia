<div class="navbar">
  <div class="nav-links">
      <button class="btn"><a href="<?php echo e(url('/dashboard')); ?>">Dashboard</a></button>
  </div>
  <div class="dropdown">
      <button class="btn">Amistades</button>
      <div class="dropdown-content">
        <a href="<?php echo e(url('/mis-amigos')); ?>">Mis Amigos</a>
        <a href="<?php echo e(url('/buscar-amigos')); ?>">Buscar Amigos</a>
      </div>
  </div>
<div class="dropdown">
      <button class="btn">Solicitudes</button>
      <div class="dropdown-content">
        <a href="<?php echo e(url('/solicitud-enviada')); ?>">Enviadas</a>
        <a href="<?php echo e(url('/solicitud-recibida')); ?>">Recibidas</a>
      </div>
  </div>
  <div class="search-container">
      

      
        <form action="#">
        <input type="text" class="searchInput" name="busqueda" placeholder="Buscar...">
        <button type="submit">Buscar</button>
    </form>
    


      
  </div>
</div>
<?php /**PATH C:\Users\juane\OneDrive\Escritorio\Guatetrivia\resources\views/components/amistad-navbar.blade.php ENDPATH**/ ?>