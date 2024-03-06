<?php  
   include_once 'atas.php';
?>
<div class="container my-5">
            <h1 class="text-center mb-4">Triangle Area Calculator</h1>
            <form action="" method="post">
                <div class="form-floating mb-3">
                    <label for="base">Base</label>
                    <input type="number" class="form-control" id="base" name="base" required>
                </div>
                <div class="form-floating mb-3">
                    <label for="height">Height</label>
                    <input type="number" class="form-control" id="height" name="height" required>
                </div>
                <button name="submit" type="submit" class="btn btn-primary">Calculate Area</button>
            </form>
        </div>

    <?php
      require_once 'libfunsi.php';
     $base = $_POST['base'];
     $height = $_POST['height'];
     $area = hitungluas($base, $height);
     $type = deteksisegitiga($base, $height);
    
    ?>

    <div class="mt-4">
        <h2>hasil:</h2>
        <p>alas: <?= $base ?>cm</p>
        <p>tinggi:<?= $height ?>cm</p>
        <p>luas:<?= $area ?>cm</p>
        <p>jenis:<?= $type ?></p>
    </div>


