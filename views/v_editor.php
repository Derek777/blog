<a href="index.php">Головна</a> |
<b>Консоль редактора</b>
<hr/>
<ul>
    <li>
        <b><a href="index.php?c=new">Нова стаття</a></b>
    </li>
    <? foreach ($articles as $article): ?>
        <li>
            <a href="index.php?c=edit&id=<?=$article['id_article']?>&title=<?=$article['title']?>&article=<?=$article['article']?>">
                <?=$article['title']?>
            </a>
        </li>
    <? endforeach ?>
</ul>
<hr/>
<small><p>VVcompany777</p></small>
