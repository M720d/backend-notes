<?php require basePath("Views/Partials/head.php") ?>
<?php require basePath("Views/Partials/nav.php")?>
<?php require basepath ("Views/Partials/banner.php") ?>


  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<form method="post" >
  <div class="space-y-12">


        <div class="col-span-full">
          <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Add Note</label>
          <div class="mt-2">
          <textarea id="body" name="body" rows="3" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          <?= empty($errors) ? '' : $_POST['body']; ?>
          </textarea>
          </div>
          <p class="mt-3">
            <button type="submit">Submit the answer</button>
            <?php if(isset($errors['body'])){ ?>
                <p> <?= $errors['body']; ?></p>
                <?php } ?>
        </p>
        </div>
       
    </div>
</form>

    </div>
  </main>
  <?php  require basePath("Views/Partials/footer.php") ?>

