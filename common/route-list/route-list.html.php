<ul class="c-route-list">
<?php foreach ($routes as $route): ?>
    <li class="c-route-list__item">
        <h2 class="c-route-list__label"><?= html::a($route->url(), $route->shortTitle()) ?></h2>
        <?php if (!$route->subtitle()->empty()): ?><p class="c-route-list__desc"><?= $route->subtitle() ?></p><?php endif ?>
    </li>
<?php endforeach ?>
</ul>
