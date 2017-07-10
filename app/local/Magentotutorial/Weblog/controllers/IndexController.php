<?php
class Magentotutorial_Weblog_IndexController extends Mage_Core_Controller_Front_Action {
    public function testModelAction() {
        $params = $this->getRequest()->getParams();
        $blogpost = Mage::getModel('weblog/blogpost');
        echo("Loading the blogpost with an ID of ".$params['id']);
        $blogpost->load($params['id']);
        $data = $blogpost->getData();
        var_dump($data);
    }
    public function createNewPostAction() {
        $blogpost = Mage::getModel('weblog/blogpost');
        $blogpost->setTitle('Code Post!');
        $blogpost->setPost('This post was created from code!');
        $blogpost->save();
        echo 'post with ID ' . $blogpost->getId() . ' created';
    }

    public function editFirstPostAction() {
        $blogpost = Mage::getModel('weblog/blogpost');
        $blogpost->load(1);
        $blogpost->setTitle("The First post!");
        $blogpost->save();
        echo 'post edited';
    }
    public function deleteFirstPostAction() {
        $blogpost = Mage::getModel('weblog/blogpost');
        $blogpost->load(1);
        $blogpost->delete();
        echo 'post removed';
    }
    public function showAllBlogPostsAction() {
        $posts = Mage::getModel('weblog/blogpost')->getCollection();
        foreach($posts as $blogpost){
            echo '<h3>'.$blogpost->getTitle().'</h3>';
            echo nl2br($blogpost->getPost());
        }
    }


    public function CodeAction() {

        /*/for($m = 0; $n; $n=(int) ($n/10))
        {
            $k = $n%10;
            if($k>0)
                $m = $k;
        }
        echo $m;*/
        $a='sanya';
        $c = 's';
        $d=0;
        for($i=0; $i<strlen($a);$i++)
        {
            print_r($a[$i]);

            if($a[$i] == $c)
                $d++;

        }
        echo strlen($a) - $d;

    }
}