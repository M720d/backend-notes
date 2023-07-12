<?php require basePath("Views/Partials/head.php") ?>
<?php require basePath("Views/Partials/nav.php")?>
<?php require basepath ("Views/Partials/banner.php")?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <!-- Your content -->
    <p> </p>
    <p>
    <ul>
      <?php foreach ($notes as $note) { ?>
        <li>
          <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover: underline"> <?= htmlspecialchars($note['body']) ?> </a>
          <!-- <?= $note['body'] ?>  -->
        </li>
      <?php } ?>

      <p class="mt-2">
        <a href="/note/create" class="text-blue-500 hover:underline">Create new Note</a>
      </p>
    </ul>
    </p>
  </div>
</main>

<?php  require basePath("Views/Partials/footer.php") ?>