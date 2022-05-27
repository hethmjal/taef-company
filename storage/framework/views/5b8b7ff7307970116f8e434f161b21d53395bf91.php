
<?php $__env->startSection('content'); ?>
<?php if(session('success')): ?>
<div class="alert alert-success"><?php echo e(session('success')); ?></div>
<?php endif; ?>



<div class="content">
    <div class="container">
            
   

        <br>
        <div class="page-title">
            <h3><?php echo e(__('dashboard.orders')); ?>

            </h3>
        </div>
    
        <div class="mb-4 mt-4">
          <a class="btn btn-primary" href="<?php echo e(route('add_order')); ?>"> <?php echo e(__('dashboard.add orders')); ?></a>
      </div>



      <div>

        <div class="container m-auto">
            <ul class="nav nav-tabs mx-auto">
                <li class="nav-item col-md-3 col-6  "><a class="nav-link active" data-toggle="tab" href="#home"><?php echo e(__('dashboard.all orders')); ?> (<?php echo e($orders->count()); ?>) </a></li>
                <li class="nav-item col-md-3 col-6 "><a class="nav-link" data-toggle="tab" href="#menu1"><?php echo e(__('dashboard.new orders')); ?> (<?php echo e($new_orders->count()); ?>)</a></li>
                <li class="nav-item col-md-3 col-6 "><a class="nav-link" data-toggle="tab" href="#menu2"><?php echo e(__('dashboard.under review orders')); ?> (<?php echo e($underreview_orders->count()); ?>)</a></li>
              
                <li class="nav-item col-md-3 col-6 "><a class="nav-link" data-toggle="tab" href="#menu3"><?php echo e(__('dashboard.underway orders')); ?> (<?php echo e($underway_orders->count()); ?>)</a></li>
                <li class="nav-item col-md-3 col-6 "><a class="nav-link" data-toggle="tab" href="#menu4"><?php echo e(__('dashboard.complete orders')); ?> (<?php echo e($complete_orders->count()); ?>)</a></li>
                <li class="nav-item col-md-3 col-6 "><a class="nav-link" data-toggle="tab" href="#menu5"><?php echo e(__('dashboard.unacceptable orders')); ?> (<?php echo e($unacceptable_orders->count()); ?>)</a></li>
                <li class="nav-item col-md-3 col-6 "><a class="nav-link" data-toggle="tab" href="#menu6"><?php echo e(__('dashboard.canceled orders')); ?> (<?php echo e($canceled_orders->count()); ?>)</a></li>
  
  

              
            </ul>
          
            <div class="tab-content">
              <div id="home" class="tab-pane fade show active">
                <div class="box box-primary">
                    <div class="box-body">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col"></th>
                                <th scope="col"><?php echo e(__('front.name')); ?></th>
                                <th scope="col"> <?php echo e(__('front.email')); ?> </th>
                                <th scope="col"><?php echo e(__('front.phone')); ?></th>
                                <th scope="col"><?php echo e(__('dashboard.service')); ?></th>
                                <th scope="col"><?php echo e(__('dashboard.status')); ?></th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody class="orders">
                                <?php $x =1; ?>
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php  echo $x++; ?></th>
                                    <td><?php echo e($order->name); ?></td>
                                    <td><?php echo e($order->email); ?></td>
                                    <td><?php echo e($order->phone); ?></td>
            
                                    <td><?php echo e($order->service_title); ?></td>
                                    <td scope="col"><?php echo e(__('dashboard.'.$order->status)); ?></td>
            
            
                                    <td>
                                        <a class="btn btn-primary"  href="<?php echo e(route('show-orders',$order->id)); ?>"> <?php echo e(__('dashboard.more')); ?></a>
            
                                    </td>
                                  </tr>
                                
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             
                            </tbody>
                          </table>
                    </div>
                </div>

              </div>












              <div id="menu1" class="tab-pane fade">
                <div class="box box-primary">
                    <div class="box-body">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col"></th>
                                <th scope="col"><?php echo e(__('front.name')); ?></th>
                                <th scope="col"> <?php echo e(__('front.email')); ?> </th>
                                <th scope="col"><?php echo e(__('front.phone')); ?></th>
                                <th scope="col"><?php echo e(__('dashboard.service')); ?></th>
                                <th scope="col"><?php echo e(__('dashboard.status')); ?></th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody class="orders">
                                <?php $x =1; ?>
                                <?php $__currentLoopData = $new_orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php  echo $x++; ?></th>
                                    <td><?php echo e($order->name); ?></td>
                                    <td><?php echo e($order->email); ?></td>
                                    <td><?php echo e($order->phone); ?></td>
            
                                    <td><?php echo e($order->service_title); ?></td>
                                    <td scope="col"><?php echo e(__('dashboard.'.$order->status)); ?></td>
            
            
                                    <td>
                                        <a class="btn btn-primary"  href="<?php echo e(route('show-orders',$order->id)); ?>"> <?php echo e(__('dashboard.more')); ?></a>
            
                                    </td>
                                  </tr>
                                
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             
                            </tbody>
                          </table>
                    </div>
                </div>

            </div>










           







              <div id="menu2" class="tab-pane fade">
                <div class="box box-primary">
                    <div class="box-body">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col"></th>
                                <th scope="col"><?php echo e(__('front.name')); ?></th>
                                <th scope="col"> <?php echo e(__('front.email')); ?> </th>
                                <th scope="col"><?php echo e(__('front.phone')); ?></th>
                                <th scope="col"><?php echo e(__('dashboard.service')); ?></th>
                                <th scope="col"><?php echo e(__('dashboard.status')); ?></th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody class="orders">
                                <?php $x =1; ?>
                                <?php $__currentLoopData = $underreview_orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php  echo $x++; ?></th>
                                    <td><?php echo e($order->name); ?></td>
                                    <td><?php echo e($order->email); ?></td>
                                    <td><?php echo e($order->phone); ?></td>
            
                                    <td><?php echo e($order->service_title); ?></td>
                                    <td scope="col"><?php echo e(__('dashboard.'.$order->status)); ?></td>
            
            
                                    <td>
                                        <a class="btn btn-primary"  href="<?php echo e(route('show-orders',$order->id)); ?>"> <?php echo e(__('dashboard.more')); ?></a>
            
                                    </td>
                                  </tr>
                                
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             
                            </tbody>
                          </table>
                    </div>
                </div>           
               </div>










              <div id="menu3" class="tab-pane fade">
                <div class="box box-primary">
                    <div class="box-body">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col"></th>
                                <th scope="col"><?php echo e(__('front.name')); ?></th>
                                <th scope="col"> <?php echo e(__('front.email')); ?> </th>
                                <th scope="col"><?php echo e(__('front.phone')); ?></th>
                                <th scope="col"><?php echo e(__('dashboard.service')); ?></th>
                                <th scope="col"><?php echo e(__('dashboard.status')); ?></th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody class="orders">
                                <?php $x =1; ?>
                                <?php $__currentLoopData = $underway_orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php  echo $x++; ?></th>
                                    <td><?php echo e($order->name); ?></td>
                                    <td><?php echo e($order->email); ?></td>
                                    <td><?php echo e($order->phone); ?></td>
            
                                    <td><?php echo e($order->service_title); ?></td>
                                    <td scope="col"><?php echo e(__('dashboard.'.$order->status)); ?></td>
            
            
                                    <td>
                                        <a class="btn btn-primary"  href="<?php echo e(route('show-orders',$order->id)); ?>"> <?php echo e(__('dashboard.more')); ?></a>
            
                                    </td>
                                  </tr>
                                
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             
                            </tbody>
                          </table>
                    </div>
                </div>              </div>






              <div id="menu4" class="tab-pane fade">
                <div class="box box-primary">
                    <div class="box-body">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col"></th>
                                <th scope="col"><?php echo e(__('front.name')); ?></th>
                                <th scope="col"> <?php echo e(__('front.email')); ?> </th>
                                <th scope="col"><?php echo e(__('front.phone')); ?></th>
                                <th scope="col"><?php echo e(__('dashboard.service')); ?></th>
                                <th scope="col"><?php echo e(__('dashboard.status')); ?></th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody class="orders">
                                <?php $x =1; ?>
                                <?php $__currentLoopData = $complete_orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php  echo $x++; ?></th>
                                    <td><?php echo e($order->name); ?></td>
                                    <td><?php echo e($order->email); ?></td>
                                    <td><?php echo e($order->phone); ?></td>
            
                                    <td><?php echo e($order->service_title); ?></td>
                                    <td scope="col"><?php echo e(__('dashboard.'.$order->status)); ?></td>
            
            
                                    <td>
                                        <a class="btn btn-primary"  href="<?php echo e(route('show-orders',$order->id)); ?>"> <?php echo e(__('dashboard.more')); ?></a>
            
                                    </td>
                                  </tr>
                                
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             
                            </tbody>
                          </table>
                    </div>
                </div>              </div>







              <div id="menu5" class="tab-pane fade">
                <div class="box box-primary">
                    <div class="box-body">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col"></th>
                                <th scope="col"><?php echo e(__('front.name')); ?></th>
                                <th scope="col"> <?php echo e(__('front.email')); ?> </th>
                                <th scope="col"><?php echo e(__('front.phone')); ?></th>
                                <th scope="col"><?php echo e(__('dashboard.service')); ?></th>
                                <th scope="col"><?php echo e(__('dashboard.status')); ?></th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody class="orders">
                                <?php $x =1; ?>
                                <?php $__currentLoopData = $unacceptable_orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php  echo $x++; ?></th>
                                    <td><?php echo e($order->name); ?></td>
                                    <td><?php echo e($order->email); ?></td>
                                    <td><?php echo e($order->phone); ?></td>
            
                                    <td><?php echo e($order->service_title); ?></td>
                                    <td scope="col"><?php echo e(__('dashboard.'.$order->status)); ?></td>
            
            
                                    <td>
                                        <a class="btn btn-primary"  href="<?php echo e(route('show-orders',$order->id)); ?>"> <?php echo e(__('dashboard.more')); ?></a>
            
                                    </td>
                                  </tr>
                                
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             
                            </tbody>
                          </table>
                    </div>
                </div>                      </div>

              <div id="menu6" class="tab-pane fade">
                <div class="box box-primary">
                    <div class="box-body">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col"></th>
                                <th scope="col"><?php echo e(__('front.name')); ?></th>
                                <th scope="col"> <?php echo e(__('front.email')); ?> </th>
                                <th scope="col"><?php echo e(__('front.phone')); ?></th>
                                <th scope="col"><?php echo e(__('dashboard.service')); ?></th>
                                <th scope="col"><?php echo e(__('dashboard.status')); ?></th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody class="orders">
                                <?php $x =1; ?>
                                <?php $__currentLoopData = $canceled_orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php  echo $x++; ?></th>
                                    <td><?php echo e($order->name); ?></td>
                                    <td><?php echo e($order->email); ?></td>
                                    <td><?php echo e($order->phone); ?></td>
            
                                    <td><?php echo e($order->service_title); ?></td>
                                    <td scope="col"><?php echo e(__('dashboard.'.$order->status)); ?></td>
            
            
                                    <td>
                                        <a class="btn btn-primary"  href="<?php echo e(route('show-orders',$order->id)); ?>"> <?php echo e(__('dashboard.more')); ?></a>
            
                                    </td>
                                  </tr>
                                
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             
                            </tbody>
                          </table>
                    </div>
                </div>                     
             </div>
              
            </div>
          </div>
      </div>







     
    </div>
</div>
<?php $__env->startPush('js'); ?>
   
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.partials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamp\htdocs\taef-company\resources\views/admin/dashboard/orders.blade.php ENDPATH**/ ?>