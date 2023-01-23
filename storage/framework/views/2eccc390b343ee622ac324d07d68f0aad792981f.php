<?php $__env->startSection('styles'); ?>
    <!-- JQuery DataTable Css -->
    <link href="<?php echo e(asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    <div class="container-fluid">
        <div class="block-header">
            <h2>Afianzadoras</h2>
            <small class="text-muted">Bienvenido a la aplicación ARROW</small>
            <div>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crear-afianzadora')): ?>
                    <a href="<?php echo e(route('afianzadoras.create')); ?>" class="btn btn-raised btn-success">Agregar afianzadora</a>
                <?php endif; ?>

                <?php if(session('mensaje_error')): ?>
                <div class="alert alert-danger" role="alert">
                  <?php echo e(session('mensaje_error')); ?>

                </div>
                <?php endif; ?>
               
            </div>
        </div>



        <!-- Exportable Table -->
        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12">
               
                <div class="card">


                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped text-center" >
                            <thead >
                                <tr >

                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">RFC</th>
                                    <th class="text-center">Razón social</th>
                                    <th class="text-center">Domicilio</th>
                                    <th class="text-center">Teléfono</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $afianzadoras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $afianzadora): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($afianzadora->nombre); ?></td>
                                        <td><?php echo e($afianzadora->rfc); ?></td>
                                        <td><?php echo e($afianzadora->razon_social); ?></td>
                                        <td><?php echo e($afianzadora->domicilio); ?></td>
                                        <td><?php echo e($afianzadora->telefono); ?></td>


                                        <td class="d-flex justify-content-around">
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('editar-afianzadora')): ?>
                                                <a  href="<?php echo e(route('afianzadoras.edit', $afianzadora->id)); ?>"><i class="zmdi zmdi-edit text-warning"></i></a>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('borrar-afianzadora')): ?>
                                                <?php echo Form::open(['method' => 'DELETE','route' => ['afianzadoras.destroy', $afianzadora->id], 'style'=>'display:inline']); ?>

                
                                                <button type="submit" style="cursor: pointer; background: transparent; border:0px;"><i class="material-icons text-danger">delete</i></button>
                                                <?php echo Form::close(); ?>

                                            <?php endif; ?>


                                        </td>

                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <div class="pagination justify-content-end">
                            <?php echo $afianzadoras->links(); ?>

                        </div>
                    </div>



                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('bundles/datatablescripts.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/jquery-datatable/buttons/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/jquery-datatable/buttons/buttons.colVis.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/jquery-datatable/buttons/buttons.flash.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/jquery-datatable/buttons/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/jquery-datatable/buttons/buttons.print.min.js')); ?>"></script>

    <script src="<?php echo e(asset('bundles/mainscripts.bundle.js')); ?>"></script>
    <!-- Custom Js -->
    <script src="<?php echo e(asset('js/pages/tables/jquery-datatable.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projectarrow/resources/views/afianzadoras/index.blade.php ENDPATH**/ ?>