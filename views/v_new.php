
<br/>
<a href="index.php">Головна</a> 
<a href="index.php?c=editor">Консоль редактора</a>
<hr/>
<h1>Нова стаття</h1>
<form method="post">
    Назва:
    <br/>
    <input type="text" name="title" placeholder="Заголовок" value="<?=$this->article_title?>" />
    <br/>
    <br/>
    Вміст:
    <br/>
    <textarea name="article" placeholder="Текст новини"><?=$this->article_content?></textarea>
    <br/>
    <input type="submit" value="Добавити" />
</form>
<hr/>
<small>VVcompany777 </small>