<?php require __DIR__.'/../partials/header.html.php'; ?>

<div class="w-1/2">
    <div class="flex border rounded-lg shadow m-3" >
        <img class="w-1/2 rounded-t-lg" src="<?= $movie->cover();?>" alt="<?= $movie->title; ?>">
        <div class="p-3">
            <h2 class="text-2xl font-black" ><?= $movie->title; ?></h2>
            <div class="flex my-1">
                <p class="text-xs text-gray-400 " ><?= $movie->released_at; ?></p>
                <span class="text-xs text-gray-400 pl-2">-</span>
                <p class="text-xs text-gray-400 pl-2"><?= $movie->duration ?></p>
            </div>
            <div>
                <h3 class="font-bold">Description :</h3>
                <p class="text-sm" ><?= $movie->description ?></p>
            </div>
            

        </div>
    </div>
</div>

<?php require __DIR__.'/../partials/footer.html.php'; ?>