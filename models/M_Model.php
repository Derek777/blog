<?phpclass M_Model{    private static $instance;    private $msql;    public static function Instance()    {        if (self::$instance == null)            self::$instance = new M_Model();        return self::$instance;    }    private function __construct()    {        $this->msql = M_MSQL::Instance();    }    public function articles_all()    {                $query = "SELECT * FROM articles ORDER BY id_article DESC";        return $this->msql->Select($query);    }    public function articles_get($id_article)    {        $t = "SELECT title, article FROM articles WHERE id_article='$id_article'";        $query = sprintf($t, $id_article);        $result = $this->msql->Select($query);        return $result[0];    }    public function articles_new($title, $content)    {                $title = trim($title);        $content = trim($content);               if ($title == '' or $content== '')            return false;                $obj = array();        $obj['title'] = $title;        $obj['article'] = $content;        $this->msql->Insert('articles', $obj);        return true;    }    public function articles_edit($id_article, $title, $content)    {                $title = trim($title);        $content = trim($content);                if ($title == '' or $content== '')            return false;                $obj = array();        $obj['title'] = $title;        $obj['article'] = $content;        $t = "id_article = '%d'";        $where = sprintf($t, $id_article);        $this->msql->Update('articles', $obj, $where);        return true;    }    public function articles_delete($id_article)    {        $t = "id_article = '%d'";        $where = sprintf($t, $id_article);        $this->msql->Delete('articles', $where);        return true;    }    public function articles_intro($article){        if(strlen($article['article']) >10)            return substr($article['article'], 0, 10);        else            return $article['article'];    }}