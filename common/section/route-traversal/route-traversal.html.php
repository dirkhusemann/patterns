<section class="c-section c-section--route-traversal">
    <?= brick('h'.$level)->html($title)->attr('class', 'c-section__title') ?>
    <?php
        foreach ($routes as $route) {
            pattern('common/route-traversal', [
                'title' => html::a($route->url(), smartypants($route->shortTitle())),
                'level' => $level + 1,
                'route' => $route
            ]);
        }
    ?>
</section>
