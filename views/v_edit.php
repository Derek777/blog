<a href="index.php?c=editor">������� ���������</a>
<form  method="post">
    �����
    <br />
    <input type="text" name="title" value="<?=$this->article_title?>" />
    <br />
    <br />
    ����
    <br />
    <textarea name="article"><?=$this->article_content?></textarea>
    <br />
    <input type="hidden" name="id" value="<?=$this->article_id?>" />
    <input type="submit" name="edit" value="��������" />
    <input type="submit" name="delete" value="��������" />

</form>