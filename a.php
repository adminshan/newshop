<?php
        $web=[
		                '192.168.42.100',
				                '192.168.42.10'
						        ];
        foreach($web as $k=>$v){
		                $cmd='ssh '.$v . ' "cd /data/wwwroot/default/shop.lengning && git pull"';
				                echo $cmd;echo "<br>";
				                $res=shell_exec($cmd);
						                echo $res;echo "<hr>";
						        }
?>
