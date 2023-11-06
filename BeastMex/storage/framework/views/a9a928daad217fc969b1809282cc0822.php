<?php $__env->startSection('titulo','Inicio de sesion'); ?>

<?php $__env->startSection('contenido'); ?>

<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container mt-5 col-md-6">
  <?php if(session()->has('Inicio de sesion')): ?>
      <script>
        Swal.fire({
          'Inicio de sesion exitoso',
          'Has iniciado sesion',
          'success',
        });
      </script>
  <?php endif; ?>
<form method="POST" action="pLogin">
  <?php echo csrf_field(); ?>
    <div class="input-group mb-3">
      <span class="input-group-text"><i class="bi bi-envelope-at-fill"></i></span>
      <div class="form-floating">
        <input type="email" name="txtCorreo" class="form-control" placeholder="Ingrese correo">
        <label for="floatingInputGroup1">Ingrese correo</label>
      </div>
    </div>
    
    <div class="input-group mb-3">
      <span class="input-group-text"><i class="bi bi-file-lock2-fill"></i></span>
      <div class="form-floating">
        <input type="password" name="txtContra" class="form-control" placeholder="Ingrese contraseña">
        <label for="floatingInputGroup1">Ingrese contraseña</label>
      </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
  </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\PWS182PM\BeastMex\resources\views/login.blade.php ENDPATH**/ ?>