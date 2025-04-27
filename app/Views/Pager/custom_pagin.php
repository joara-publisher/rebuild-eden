<?php

use CodeIgniter\Pager\PagerRenderer;

/**
 * @var PagerRenderer $pager
 */
$pager->setSurroundCount(2);
?>
<ul>
    <?php foreach ($pager->links() as $link) : ?>
        <li <?= $link['active'] ? 'class="active"' : '' ?>>
            <a href="<?= $link['uri'] ?>">
                <?= $link['title'] ?>
            </a>
        </li>
    <?php endforeach ?>  
</ul>