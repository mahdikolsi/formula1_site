

<?php $__env->startSection('content'); ?>
<div class="container">
    <!-- Tab navigation -->
    <ul class="nav nav-tabs mb-4">
        <li class="nav-item">
            <a class="nav-link active" id="drivers-tab" data-bs-toggle="tab" href="#drivers">Drivers</a> 
        </li>
        <li class="nav-item">
            <a class="nav-link" id="constructors-tab" data-bs-toggle="tab" href="#constructors">Constructors</a>
        </li>
    </ul>

    <!-- Tab content -->
    <div class="tab-content">
        <!-- Drivers standings -->
        <div class="tab-pane fade show active" id="drivers">
            <h3>Drivers Standings</h3>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Position</th>
                        <th>Driver</th>
                        <th>Team</th>
                        <th>Points</th>
                        <th>Wins</th>
                        <th>Podiums</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $driversStandings = [
    ['position' => 1, 'driver' => 'M. Verstappen', 'team' => 'Red Bull', 'points' => 362, 'wins' => 7, 'podiums' => 12],
    ['position' => 2, 'driver' => 'L. Norris', 'team' => 'McLaren', 'points' => 315, 'wins' => 3, 'podiums' => 12],
    ['position' => 3, 'driver' => 'C. Leclerc', 'team' => 'Ferrari', 'points' => 291, 'wins' => 3, 'podiums' => 11],
    ['position' => 4, 'driver' => 'O. Piastri', 'team' => 'McLaren', 'points' => 251, 'wins' => 2, 'podiums' => 7],
    ['position' => 5, 'driver' => 'C. Sainz Jr.', 'team' => 'Ferrari', 'points' => 240, 'wins' => 2, 'podiums' => 7],
    ['position' => 6, 'driver' => 'L. Hamilton', 'team' => 'Mercedes', 'points' => 189, 'wins' => 2, 'podiums' => 4],
    ['position' => 7, 'driver' => 'G. Russell', 'team' => 'Mercedes', 'points' => 177, 'wins' => 1, 'podiums' => 3],
    ['position' => 8, 'driver' => 'S. Perez', 'team' => 'Red Bull', 'points' => 150, 'wins' => 0, 'podiums' => 4],
    ['position' => 9, 'driver' => 'F. Alonso', 'team' => 'Aston Martin', 'points' => 62, 'wins' => 0, 'podiums' => 0],
    ['position' => 10, 'driver' => 'N. Hulkenberg', 'team' => 'Haas', 'points' => 31, 'wins' => 0, 'podiums' => 0],
    ['position' => 11, 'driver' => 'L. Stroll', 'team' => 'Aston Martin', 'points' => 24, 'wins' => 0, 'podiums' => 0],
    ['position' => 12, 'driver' => 'Y. Tsunoda', 'team' => 'Scuderia AlphaTauri', 'points' => 22, 'wins' => 0, 'podiums' => 0],
    ['position' => 13, 'driver' => 'K. Magnussen', 'team' => 'Haas', 'points' => 14, 'wins' => 0, 'podiums' => 0],
    ['position' => 14, 'driver' => 'A. Albon', 'team' => 'Williams', 'points' => 12, 'wins' => 0, 'podiums' => 0],
    ['position' => 15, 'driver' => 'D. Ricciardo', 'team' => 'Scuderia AlphaTauri', 'points' => 12, 'wins' => 0, 'podiums' => 0],
    ['position' => 16, 'driver' => 'P. Gasly', 'team' => 'Alpine', 'points' => 9, 'wins' => 0, 'podiums' => 0],
    ['position' => 17, 'driver' => 'O. Bearman', 'team' => 'Haas', 'points' => 7, 'wins' => 0, 'podiums' => 0],
    ['position' => 18, 'driver' => 'F. Colapinto', 'team' => 'Williams', 'points' => 5, 'wins' => 0, 'podiums' => 0],
    ['position' => 19, 'driver' => 'E. Ocon', 'team' => 'Alpine', 'points' => 5, 'wins' => 0, 'podiums' => 0],
    ['position' => 20, 'driver' => 'L. Lawson', 'team' => 'Scuderia AlphaTauri', 'points' => 2, 'wins' => 0, 'podiums' => 0],
    ['position' => 21, 'driver' => 'G. Zhou', 'team' => 'Sauber', 'points' => 0, 'wins' => 0, 'podiums' => 0],
    ['position' => 22, 'driver' => 'L. Sargeant', 'team' => 'Williams', 'points' => 0, 'wins' => 0, 'podiums' => 0],
    ['position' => 23, 'driver' => 'V. Bottas', 'team' => 'Sauber', 'points' => 0, 'wins' => 0, 'podiums' => 0],
];

                    ?>

                    <?php $__currentLoopData = $driversStandings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $standing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($standing['position']); ?></td>
                        <td><?php echo e($standing['driver']); ?></td>
                        <td><?php echo e($standing['team']); ?></td>
                        <td><?php echo e($standing['points']); ?></td>
                        <td><?php echo e($standing['wins']); ?></td>
                        <td><?php echo e($standing['podiums']); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

        <!-- Constructors standings -->
        <div class="tab-pane fade" id="constructors">
            <h3>Constructors Standings</h3>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Position</th>
                        <th>Team</th>
                        <th>Points</th>
                        <th>Wins</th>
                        <th>Podiums</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $constructorsStandings = [
                            ['position' => 1, 'team' => 'McLaren', 'points' => 566, 'wins' => 5, 'podiums' => 19],
                            ['position' => 2, 'team' => 'Ferrari', 'points' => 537, 'wins' => 5, 'podiums' => 18],
                            ['position' => 3, 'team' => 'Red Bull', 'points' => 512, 'wins' => 7, 'podiums' => 16],
                            ['position' => 4, 'team' => 'Mercedes', 'points' => 366, 'wins' => 3, 'podiums' => 7],
                            ['position' => 5, 'team' => 'Aston Martin', 'points' => 86, 'wins' => 0, 'podiums' => 0],
                            ['position' => 6, 'team' => 'Haas', 'points' => 46, 'wins' => 0, 'podiums' => 0],
                            ['position' => 7, 'team' => 'Scuderia AlphaTauri', 'points' => 36, 'wins' => 0, 'podiums' => 1],
                            ['position' => 8, 'team' => 'Williams', 'points' => 17, 'wins' => 0, 'podiums' => 1],
                            ['position' => 9, 'team' => 'Alpine', 'points' => 14, 'wins' => 0, 'podiums' => 0],
                            ['position' => 10, 'team' => 'Sauber', 'points' => 0, 'wins' => 0, 'podiums' => 0],
                        ];
                    ?>

                    <?php $__currentLoopData = $constructorsStandings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $standing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($standing['position']); ?></td>
                        <td><?php echo e($standing['team']); ?></td>
                        <td><?php echo e($standing['points']); ?></td>
                        <td><?php echo e($standing['wins']); ?></td>
                        <td><?php echo e($standing['podiums']); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\formula1_site\resources\views/standings.blade.php ENDPATH**/ ?>