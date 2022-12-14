
<?php $__env->startSection('links'); ?>

<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid">
                            <div>
                                
                                <h1>hi,<?php echo e(session('username')); ?></h1>
                                <h3>Your Email is: <?php echo e(session ('useremail')); ?></hh3>
                                <h3>Your Role is: <?php echo e(session ('userrole')); ?></h3>

                            </div>



                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                       
                                        <tr>  
                                                <td> ID </td>  
                                                <td> Name </td>
                                                <td> Email </td>  
                                        </tr>          
                                                  
                                                
                                                  
                                                 
                                     
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <td> ID </td> 
                                        <td> Name </td>
                                        <td> Email </td> 
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        
                                    <?php $__currentLoopData = $i; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                                        <tr>  
                                        <td></td>
                                        <td><?php echo e($n->name); ?></td>  
                                        <td><?php echo e($n->email); ?></td>  
                                        <td >
                                       </tr>  
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  




                </tbody>
            </table>
        </div>
    </div>
</div>

</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('admin/vendor/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/vendor/datatables/dataTables.bootstrap4.min.js')); ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo e(asset('admin/js/demo/datatables-demo.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Diagnostic_Center\resources\views/admin/pages/table.blade.php ENDPATH**/ ?>