

<?php $__env->startSection('content'); ?>
<div class="text-center p-4 mb-5 bg-secondary text-white">
    <h1>Formula 1 Teams 2024</h1>
    <p>Discover the teams competing in the Formula 1 World Championship.</p>
</div>

<div class="row">
<?php
    $teams = [
        ['name' => 'Mercedes', 'drivers' => 'Lewis Hamilton, George Russell', 'founded' => '2010', 'bio' => 'Dominant in the hybrid era, Mercedes has secured multiple Constructors\' Championships and aims to reclaim its championship form in 2024.', 'photo' =>  asset('storage/merce.jpg')],
        ['name' => 'Red Bull Racing', 'drivers' => 'Max Verstappen, Sergio Pérez', 'founded' => '2005', 'bio' => 'Red Bull Racing continues to lead the pack with innovative designs and recent championship wins, led by reigning champion Max Verstappen.', 'photo' =>  asset('storage/re.jpg')],
        ['name' => 'Ferrari', 'drivers' => 'Charles Leclerc, Carlos Sainz', 'founded' => '1929', 'bio' => 'Ferrari, the oldest and most successful team in F1 history, is determined to return to its former glory and challenge for the title in 2024.', 'photo' => asset('storage/ferrari.jpg')],
        ['name' => 'Aston Martin', 'drivers' => 'Fernando Alonso, Lance Stroll', 'founded' => '2021', 'bio' => 'Aston Martin aims to build on its recent progress and compete at the front of the grid, bolstered by veteran Fernando Alonso.', 'photo' => asset('storage/aston.png')],
        ['name' => 'Sauber', 'drivers' => 'Valtteri Bottas, Zhou Guanyu', 'founded' => '1970', 'bio' => 'A historic name in Formula 1, Sauber looks to regain its competitiveness with experienced drivers.', 'photo' => asset('storage/sau.png')],
        ['name' => 'Alpine', 'drivers' => 'Esteban Ocon, Pierre Gasly', 'founded' => '2021', 'bio' => 'Alpine continues to evolve as a competitive force in F1, with drivers Esteban Ocon and Pierre Gasly pushing for podium finishes.', 'photo' => asset('storage/alp.png')],
        ['name' => 'Haas', 'drivers' => 'Kevin Magnussen, Nico Hülkenberg', 'founded' => '2016', 'bio' => 'An American team that has quickly established itself in F1, Haas aims for consistent points finishes.', 'photo' => asset('storage/haas.jpg')],
        ['name' => 'McLaren', 'drivers' => 'Lando Norris, Oscar Piastri', 'founded' => '1963', 'bio' => 'With a rich history in Formula 1, McLaren is looking to return to its championship-winning ways with young talents Lando Norris and Oscar Piastri.', 'photo' => asset('storage/mcl.png')],
        ['name' => 'Scuderia AlphaTauri', 'drivers' => 'Yuki Tsunoda, Daniel Ricciardo', 'founded' => '2006', 'bio' => 'Scuderia AlphaTauri focuses on developing young talent, with Yuki Tsunoda and returning veteran Daniel Ricciardo.', 'photo' => asset('storage/alpha.jpg')],
    ];
?>

    

    <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="<?php echo e($team['photo']); ?>" class="card-img-top" alt="<?php echo e($team['name']); ?>">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($team['name']); ?></h5>
                <p class="card-text"><strong>Drivers:</strong> <?php echo e($team['drivers']); ?></p>
                <p class="card-text"><strong>Founded:</strong> <?php echo e($team['founded']); ?></p>
                <p class="card-text"><?php echo e($team['bio']); ?></p>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\formula1_site\resources\views/teams.blade.php ENDPATH**/ ?>