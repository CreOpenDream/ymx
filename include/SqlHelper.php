<?php
    //这是一个工具类，作用是完成对数据库的操作
    class SqlHelper {
        public $conn;
        public $dbname="db_ymx";
        public $username="root";
        public $password="123456";
        public $host="localhost";
        
        public function __construct() {
            $this->conn=mysqli_connect($this->host,$this->username,$this->password,$this->dbname);
            if (!$this->conn) {
                mysqli_error($this->conn);
                die("连接失败".mysqli_error($this->conn));
            }
            //设置访问数据库的编码
            mysqli_query($this->conn, "set names utf8") or die(mysqli_error($this->conn));
        }
        
        //执行dql语句
        public function execute_dql($sql) {
            $res=mysqli_query($this->conn,$sql) or die(mysqli_error($this->conn));
            
            return $res;
        }
        
        //执行dql语句，但是返回的是一个数组
        public function execute_dql2($sql) {
            $arr=array();
            $res=mysqli_query($this->conn,$sql) or die(mysqli_error($this->conn));
            
            //$i=0;
            while($row=mysqli_fetch_assoc($res)) {
                //$arr[$i++]=$row;
                $arr[]=$row;
            }
            
            //这里就可以马上把$res关闭
            mysqli_free_result($res);
            return $arr;
        }
        
        //考虑分页情况的查询，这是一个比较通用的并体现oop编程思想的代码
        //$sql1="select * from where 表名 limit 0,6";
        //$sql2="select * from count(id) from 表名";
        public function execute_dql_fenye($sql1,$sql2,$fenyePage) {
            //分页显示的数据
            $res=mysqli_query($this->conn, $sql1) or die(mysqli_error($this->conn));
            $arr=array();
            while($row=mysqli_fetch_assoc($res)) {
                $arr[]=$row;
            }
            
            //这里就可以马上把$res关闭
            mysqli_free_result($res);
            
            $res2=mysqli_query($this->conn, $sql2) or die(mysqli_error($this->conn));
            if($row=mysqli_fetch_row($res2)) {
                $fenyePage->pageCount=ceil($row[0]/$fenyePage->pageSize);
                $fenyePage->rowCount=$row[0];
            }
            
            mysqli_free_result($res2);
            
            $fenyePage->res_array=$arr;
            
            
            $navigation="";
            $navigation.= "<a href='{$fenyePage->gotoUrl}?pageNow=1'>首页</a> ";
            
            //显示上一页和下一页
            if($fenyePage->pageNow > 1) {
                $prePage=$fenyePage->pageNow-1;
                $navigation.= "<a href='{$fenyePage->gotoUrl}?pageNow=$prePage'>上一页</a> ";
            }
            
            $page_whole=5;//整体翻几页
            $start=(floor(($fenyePage->pageNow-1)/$page_whole))*$page_whole+1;
            $end=$start+$page_whole;
            
            //整体每10页向前翻页
            //如果当前pageNow在1-10
            if ($fenyePage->pageNow>$page_whole)
                $navigation.= "<a href='{$fenyePage->gotoUrl}?pageNow=".($start-1)."'><<</a> ";
            
            for(;$start<$end && $start<=$fenyePage->pageCount;$start++) {
                $navigation.= "<a href='{$fenyePage->gotoUrl}?pageNow=$start'>[$start]</a>";
            }
            
            if($start <= $fenyePage->pageCount)
                $navigation.= " <a href='{$fenyePage->gotoUrl}?pageNow=$start'>>></a>";
            
            //显示上一页和下一页
            if($fenyePage->pageNow < $fenyePage->pageCount) {
                $nextPage=$fenyePage->pageNow+1;
                $navigation.= " <a href='{$fenyePage->gotoUrl}?pageNow=$nextPage'>下一页</a> ";
            }
            
            
            $navigation.= "<a href='{$fenyePage->gotoUrl}?pageNow=$fenyePage->pageCount'>尾页</a> ";
            
            //显示当前页和共有多少页
            $navigation.= "第{$fenyePage->pageNow}页/共{$fenyePage->pageCount}页";
            
            $fenyePage->navigation=$navigation;
        }
        
        //执行dml语句
        public function execute_dml($sql) {
            $b=mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
            if(!$b) {
                return 0;
            } else {
                if(mysqli_affected_rows($this->conn)>0) {
                    return 1;//表示执行成功
                } else {
                    return 2;//表示没有行收到影响
                }
            }
        }
        
        //关闭连接的方法
        public function close_connect() {
            if(!empty($this->conn))
                mysqli_close($this->conn);
        }
    }
?>