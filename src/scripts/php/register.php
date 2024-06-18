<?php
require_once('version2.php');

class GenerationCode
{
    public $code,$perimeter_code='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    public function generation_code ($input,$length=16)
    {
        $input_lenght=strlen($input);
        $random_input='';
        for ($i=0; $i<$length; $i++)
        {
            $random_char=$input[mt_rand(0,$input_lenght-1)];
            $random_input .=$random_char;
        }
        $this-> code = $random_input;
        return $random_input;
    }

    public function GetGenerationCode(){
        return $this->code;
    }
}

class CheckedCode extends GenerationCode
{
      
    public function CheckUserCode ($user_code)
    {
        if ($user_code=== $this->GetGenerationCode())
        {
            echo "Успешная регистрация";
            return true;
            
        }
        else
        {
            return false;
        }
    } 
    
}

$full_name=$_POST['full_name'];
$mail=$_POST['mail'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$type_user=$_POST['type_user'];
$adress=$_POST['adress'];


$sql="INSERT INTO `USERS` (full_name,mail,password,phone,type_user,adress) VALUES ('$full_name','$mail','$password','$phone','$type_user','$adress')";
echo "успешная регистрация";
$conn->query($sql);
?>