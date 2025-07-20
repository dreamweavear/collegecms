<!-- Views/student/chapter_view.php -->





 <section class="py-5">       

        <!-- Main Content -->
        <div class="col-md-9 p-4">
            <?php if (isset($chapter)): ?>
                <h2 class="mb-3"><?= esc($chapter['name']) ?></h2>
                <div><?= $chapter['content'] ?></div>
            <?php else: ?>
                <h3>Select a chapter to read content</h3>
            <?php endif; ?>
        </div>



</section>


</main>
</div>
</div>


