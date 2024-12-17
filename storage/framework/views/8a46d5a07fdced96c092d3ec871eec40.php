

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Add Standing</h1>
    <form action="<?php echo e(route('standings.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="team_name" class="form-label">Team Name</label>
            <input type="text" name="team_name" id="team_name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="points" class="form-label">Points</label>
            <input type="number" name="points" id="points" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="wins" class="form-label">Wins</label>
            <input type="number" name="wins" id="wins" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="losses" class="form-label">Losses</label>
            <input type="number" name="losses" id="losses" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\formula1_site\resources\views/standings/create.blade.php ENDPATH**/ ?>