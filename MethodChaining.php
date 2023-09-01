<?php

class signup{
    private $data = array();
    private $filename = '';
    public function sanitize($data){
           foreach($data as $key => $value){
            $data[$key] = addslashes($value);
           }   
           $this->data = $data;
           return $this;
    }
    public function file($filename){
        if(!file_exists($filename)){
            file_put_contents($filename,'');
        }
        $this->filename = $filename; 
        return $this;
    }
    public function save_file(){
        $old_data = file_get_contents($this->filename);
        $old_array = json_decode($old_data);
        $old_array[] = $this->data;
        $string = json_encode($old_array);
        file_put_contents($this->filename,$string);
    }
    public function read(){
        $data = file_get_contents($this->filename);
        return json_decode($data);
    }
}
if(count($_POST)>0){
    $myclass = new signup();
    $myclass->sanitize($_POST)->file('mydata.json')->save_file();
    $result = $myclass->file('mydata.json')->read();
    echo "<pre>";
    print_r($result);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
</head>
<body>
    <form method="post">
        <input type="text" name="name" placeholder="Name"><br>
        <input type="text" name="password" placeholder="Password"><br>
        <input type="submit" value="signup">
    </form>
</body>
</html>