<a href="index.php?c=editor">Консоль редактора</a>

<? foreach ($this->articles as $article): ?>
    <li>
        <?=$article['id_article']?>
        <a href="index.php?c=article&id=<?=$article['id_article']?>">
            <?=$article['title']?>
        </a><br />
        <?=$article['intro']?>
        <hr />
    </li>
<? endforeach ?>



