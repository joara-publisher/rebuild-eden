<?php

use CodeIgniter\Pager\PagerRenderer;

/**
 * @var PagerRenderer $pager
 */
$pager->setSurroundCount(2);
?>
<ul>
    <?php if ($pager->hasPrevious()) : ?>
        <li class="pagin_prev"><a href="<?= $pager->getPrevious() ?>"></a></li>
    <?php endif ?>

    <?php foreach ($pager->links() as $link) : ?>
        <li>
            <a href="<?= $link['uri'] ?>" <?= $link['active'] ? 'class="active"' : '' ?>>
                <?= $link['title'] ?>
            </a>
        </li>
    <?php endforeach ?>

    <?php if ($pager->hasNext()) : ?>
        <li class="pagin_next"><a href="<?= $pager->getNext() ?>"></a></li>
    <?php endif ?>
</ul>