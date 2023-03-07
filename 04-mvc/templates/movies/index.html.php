<?php require __DIR__.'/../partials/header.html.php'; ?>

<div class="max-w-5xl mx-auto">
    <h1>Liste des films</h1>

    <div class="flex flex-wrap -mx-4">
        <?php foreach($movies as $movie) { ?>
            <div class="w-1/2 md:w-1/3 lg:w-1/4">
                <div class="mborder rounded-lg shadow m-3" >
                    <img src="<?= $movie->cover(); ?>" alt="<?= $movie->title; ?>" class="h-[400px] lg:h[300px] w-full rounded-t-lg">
                    <div class="p-3">
                        <h2><?= $movie->title; ?></h2>
                        <p class="text-xs text-gray-400" ><?= $movie->released_at ?></p>
                        <a href="/film/<?= $movie->id_movie; ?>" class="bg-blue-400 hover:bg-blue-200 duration-500 px-3 py-2 rounded-lg mt-3 block text-white text-center">Voir</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php require __DIR__.'/../partials/footer.html.php'; ?>