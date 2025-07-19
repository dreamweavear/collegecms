<?php foreach ($courses as $course): ?>
    <div class="mb-3">
        <h5 class="text-primary"><?= esc($course['name']) ?></h5>
        <ul class="list-unstyled ms-3">
            <?php foreach ($papers as $paper): ?>
                <?php if ($paper['course_id'] == $course['id']): ?>
                    <li class="fw-semibold"><?= esc($paper['name']) ?>
                        <ul class="list-unstyled ms-3">
                            <?php foreach ($units as $unit): ?>
                                <?php if ($unit['paper_id'] == $paper['id']): ?>
                                    <li><?= esc($unit['name']) ?>
                                        <ul class="list-unstyled ms-3">
                                            <?php foreach ($chapters as $chapter): ?>
                                                <?php if ($chapter['unit_id'] == $unit['id']): ?>
                                                    <li>
                                                        <a href="<?= site_url('student-content/'.$chapter['slug']) ?>">
                                                            <?= esc($chapter['name']) ?>
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </ul>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endforeach; ?>
