<?php
include_once ('models/M_Model.php');
class C_Index extends C_Base{
    protected function OnInput()
    {
        parent::OnInput();
        $m_model = M_Model::Instance();
        $this->title=$this->title . ": Список новин";
        $this->articles = $m_model->articles_all();

        foreach ($this->articles as $key=>$article){
        $this->articles[$key]['intro'] = $m_model->articles_intro($article);
        }
    }

    protected function OnOutput()
    {
        $vars = array('articles' => $this->articles);
        $this->content = $this->Template('views/v_index.php', $vars);
        parent::OnOutput();
    }

}




