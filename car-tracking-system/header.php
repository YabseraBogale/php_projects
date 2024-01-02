<?php
class Head{

    public function Navigation(){
        $nav="
                <style>
                </style>
                <nav class='head'>
                    <a>link1</a>
                    <a></a>
                    <a></a>
                    <a></a>
                    
                </nav>
        
        ";
        echo $nav;
    }

}
$nav=new Head();
$nav.Navigation();

?>