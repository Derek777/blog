
<br/>
<a href="index.php">�������</a> 
<a href="index.php?c=editor">������� ���������</a>
<hr/>
<h1>���� ������</h1>
<form method="post">
    �����:
    <br/>
    <input type="text" name="title" placeholder="���������" value="<?=$this->article_title?>" />
    <br/>
    <br/>
    ����:
    <br/>
    <textarea name="article" placeholder="����� ������"><?=$this->article_content?></textarea>
    <br/>
    <input type="submit" value="��������" />
</form>
<hr/>
<small>VVcompany777 </small>