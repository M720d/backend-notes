<?php require basePath("Views/Partials/head.php") ?>
<?php require basePath("Views/Partials/nav.php") ?>
<?php require basepath("Views/Partials/banner.php") ?>


<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <!-- Your content -->
    <p> This is Notes khjkhjgftdtrtyfytguyuiyuihuiy78t64534ec4drdfgghvhbvjbkjnkn page</p>
    <br>
    <p>
      <?php foreach ($note as $note) { ?>
        <li>
          <?= htmlspecialchars($note['body']) ?>
        </li>
      <?php } ?>
    <p>

    </p>

    <br>
    <a href="/notes" class="text-blue-500 hover: underline">Go Back to Notes Page</a>
    </p>
  </div>

  <form class="mt-6" method="POST">
    <input type = "hidden" name = "_method" value = "DELETE">
  <input type="hidden" name ="id" value="<?= $note['id'] ?>">
    <button class="text-sm text-red-500">Delete </buttons>
  </form>

</main>

<?php require basePath("Views/Partials/footer.php") ?>

<!-- if(empty($notes)){
            echo "No notes found";
          }
          else { -->