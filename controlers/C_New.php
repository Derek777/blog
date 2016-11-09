<?php

include_once ('models/M_Model.php');
class C_New extends C_Base
{
    protected $article_title;
    protected $article_content;

    protected function OnInput()
    {
        parent::OnInput();
        $m_model = M_Model::Instance();
        $this->title = $this->title . " : Додати новину ";
        if ($this->IsPost())
        {
            if ($m_model->articles_new($_POST['title'], $_POST['article']))
            {
                header('Location: index.php?c=editor');
                die();
            }

            $this->article_title = $_POST['title'];
            $this->article_content = $_POST['article'];
        }
        else
        {
            $this->article_title = '';
            $this->article_content = '';
        }
    }

    protected function OnOutput()
    {
        $vars = array('title' => $this->title, 'article' => $this->article);
        $this->content = $this->Template('views/v_new.php', $vars);
        parent::OnOutput();
    }

}