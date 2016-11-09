<?php

include_once ('models/M_Model.php');
class C_Editor extends C_Base{

    protected function OnInput()
    {
        parent::OnInput();
        $m_model = M_Model::Instance();
        $this->title = $this->title . ": Консоль редактора";
        $this->articles = $m_model->articles_all();
    }

    protected function OnOutput()
    {
        $vars = array('title' => $this->title, 'articles' => $this->articles);
        $this->content = $this->Template('views/v_editor.php', $vars);
        parent::OnOutput();
    }
}


