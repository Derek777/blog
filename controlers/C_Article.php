<?php
include_once ('models/M_Model.php');
class C_Article extends C_Base{

    protected function OnInput()
    {
        parent::OnInput();
        $m_model = M_Model::Instance();
        $this->title = $this->title . " Новина № :" . $_GET['id'];
        $this->articles = $m_model->articles_all();
        foreach ($this->articles as $key =>$value) {
           if($value['id_article']==$_GET['id']){
                $this->article=$value['article'];
            }
        }

    }

    protected function OnOutput()
    {
        $vars = array('title' => $this->title, 'article' => $this->article);
        $this->content = $this->Template('views/v_article.php', $vars);
        parent::OnOutput();
    }
}
