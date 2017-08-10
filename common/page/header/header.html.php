<?
  if(isset($modifiers)) {
    $mods = implode(preg_filter('/^/', ' c-page__header--', $modifiers));
  }
?>
<header class="c-page__header<?= $mods ?? '' ?>">
<? if (isset($parent)): ?>
  <nav class="c-page__parent">
    <?= html::a($parent->url(), smartypants($parent->title())) ?>
  </nav>
<? endif ?>
  <h2 class="c-page__title">
    <?= smartypants($title) ?>
    <? if (isset($suffix)): ?>
      <span><?= $suffix ?></span>
    <? endif ?>
  </h2>
<? if (isset($subtitle)): ?>
  <p class="c-page__subtitle">
    <?= smartypants($subtitle) ?>
  </p>
<? endif ?>
</header>