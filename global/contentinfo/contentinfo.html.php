<footer class="c-contentinfo">
    <div class="c-contentinfo__social">
        <a rel="me" href="https://twitter.com/bradshawsguide">
            <?php pattern('common/icon', [
                'glyph' => 'twitter',
                'label' => 'Follow George Bradshaw on Twitter',
                'size' => 24
            ]) ?>
        </a>
        <a rel="me" href="https://micro.blog/bradshawsguide">
            <?php pattern('common/icon', [
                'glyph' => 'microblog',
                'label' => 'Follow George Bradshaw on Micro.blog',
                'size' => 24
            ]) ?>
        </a>
        <a rel="me" href="https://github.com/bradshawsguide">
            <?php pattern('common/icon', [
                'glyph' => 'github',
                'label' => 'Contribute on GitHub',
                'size' => 24
            ]) ?>
        </a>
        <a rel="me" href="https://foursquare.com/bradshawsguide">
            <?php pattern('common/icon', [
                'glyph' => 'foursquare',
                'label' => 'Follow George Bradshaw on Foursquare',
                'size' => 24
            ]) ?>
        </a>
    </div>

    <p class="c-contentinfo__rights">
        <small>
            ©&#160;<time datetime="2018" title="2018">MMXVIII</time> <a rel="author" href="https://paulrobertlloyd.com">Paul Robert Lloyd</a>.
            Content:&#160;<a rel="license" href="<?= $site->license_url() ?>">Public&#160;Domain</a>
        </small>
    </p>
</footer>
