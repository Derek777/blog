<a href="index.php?c=editor">Консоль редактора</a>
<form  method="post">
    Назва
    <br />
    <input type="text" name="title" value="<?=$this->article_title?>" />
    <br />
    <br />
    Вміст
    <br />
    <textarea name="article"><?=$this->article_content?></textarea>
    <br />
    <input type="hidden" name="id" value="<?=$this->article_id?>" />
    <input type="submit" name="edit" value="Зберегти" />
    <input type="submit" name="delete" value="Видалити" />

</form>