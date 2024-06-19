<?php $__env->startSection('content'); ?>
<div class="row justify-content-center mt-3">
 <div class="col-md-8">
 <?php $__sessionArgs = ['success'];
if (session()->has($__sessionArgs[0])) :
if (isset($value)) { $__sessionPrevious[] = $value; }
$value = session()->get($__sessionArgs[0]); ?>
 <div class="alert alert-success" role="alert">
 <?php echo e($value); ?>

 </div>
 <?php unset($value);
if (isset($__sessionPrevious) && !empty($__sessionPrevious)) { $value = array_pop($__sessionPrevious); }
if (isset($__sessionPrevious) && empty($__sessionPrevious)) { unset($__sessionPrevious); }
endif;
unset($__sessionArgs); ?>
 <div class="card">
 <div class="card-header">
 <div class="float-start">
 Edit Product
 </div>
 <div class="float-end">
 <a href="<?php echo e(route('products.index')); ?>" class="btn
btn-primary btn-sm">&larr; Back</a>
 </div>
 </div>
 <div class="card-body">
 <form action="<?php echo e(route('products.update', $product->id)); ?>" method="post">
 <?php echo csrf_field(); ?>
<?php echo method_field("PUT"); ?>
 <div class="mb-3 row">
 <label for="code" class="col-md-4 col-formlabel text-md-end text-start">Code</label>
 <div class="col-md-6">
 <input type="text" class="form-control
<?php $__errorArgs = ['code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="code" name="code" value="<?php echo e($product->code); ?>">
 <?php $__errorArgs = ['code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
 <span class="text-danger"><?php echo e($message); ?></span>
 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
 </div>
 </div>
 <div class="mb-3 row">
 <label for="name" class="col-md-4 col-formlabel text-md-end text-start">Name</label>
 <div class="col-md-6">
 <input type="text" class="form-control
<?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="name" name="name" value="<?php echo e($product->name); ?>">
 <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
 <span class="text-danger"><?php echo e($message); ?></span>
 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
 </div>
 </div>
 <div class="mb-3 row">
 <label for="quantity" class="col-md-4 colform-label text-md-end text-start">Quantity</label>
 <div class="col-md-6">
 <input type="number" class="form-control
<?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="quantity" name="quantity"
value="<?php echo e($product->quantity); ?>">
 <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
 <span class="text-danger"><?php echo e($message); ?></span>
 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
 </div>
 </div>
 <div class="mb-3 row">
 <label for="price" class="col-md-4 col-formlabel text-md-end text-start">Price</label>
 <div class="col-md-6">
 <input type="number" step="0.01"
class="form-control <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="price"
name="price" value="<?php echo e($product->price); ?>">
 <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
 <span class="text-danger"><?php echo e($message); ?></span>
 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
 </div>
 </div>
 <div class="mb-3 row">
 <label for="description" class="col-md-4 colform-label text-md-end text-start">Description</label>
 <div class="col-md-6">
 <textarea class="form-control
<?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="description"
name="description"><?php echo e($product->description); ?></textarea>
 <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
 <span class="text-danger"><?php echo e($message); ?></span>
 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
 </div>
 </div>
<div class="mb-3 row">
 <input type="submit" class="col-md-3 offsetmd-5 btn btn-primary" value="Update">
 </div>
 </form>
 </div>
 </div>
 </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\laravel_11_crud\resources\views/products/edit.blade.php ENDPATH**/ ?>