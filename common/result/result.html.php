<article class="c-result">
    <header class="c-result__header">
        <?php
            if ($item->intendedTemplate() == 'station') {
                $title = $item->title()." Railway Station";
            } else {
                $title = $item->title();
            }
            $title = html::a($item->url(), $title);
            echo brick('h'.$level)->html($title)->addClass('c-result__title')
        ?>
    </header>

    <div class="c-result__main">
        <?php
            pattern('scopes/text', [
                'content' => !$item->desc()->empty() ? $item->desc() : excerpt($item->text(), $length=240)
            ]);
        ?>
    </div>

    <footer class="c-result__footer">
        <p><?= $item->uri() ?></p>
    </footer>
</article>
