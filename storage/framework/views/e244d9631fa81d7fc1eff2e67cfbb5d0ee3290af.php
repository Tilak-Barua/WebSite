
<?php $__env->startSection('content'); ?>
<div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>


                                    <?php if(Session::has('msg')): ?>
                                     <div class="alert alert_success" role="alert"><?php echo e(Session::get('msg')); ?></div>
                                    <?php endif; ?>



                            <form class="user" action="<?php echo e(URL::to('/store_data')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                                <div class="form-group" >
                                    <div class="">
                                        <input type="text" class="form-control form-control-user" name="name" id="exampleFirstName"
                                            placeholder="Name">
                                    </div>
                                 
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="role" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Role">
                                    </div>
                                </div>

                                <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-user btn-block">Register Account</button>
                                </div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                              
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.default_reg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Diagnostic_Center\resources\views/admin/pages/register.blade.php ENDPATH**/ ?>