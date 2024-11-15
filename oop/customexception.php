<?php
class customException extends Exception{
    public function error_message()
    {
        //error message
        $errorMsg = 'Error on the line '.$this->getLine().' in '.$this->getFile().': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
        return $errorMsg;
    }
}

$email = "someone@example...com";
//try to validate the email
try{
    //check if
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE)
    {
        //throw exception if email is not valid
        throw new customException($email);
    }
    //check for "example" in mail address
    if(strpos($email, "example") !== FALSE)
    {
        throw new Exception("$email is an example e-mail");
    }
}
catch(customException $e)
{
    //display custom message
    echo $e->error_message();
}
catch(Exception $e)
{
    //display generic message
    echo $e->getMessage();
}
?>