<?ph
if (isset($_POST['uname']) && isset($_POST['uname']))
{   function validate($data)
    {
        $data = trim ($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    if(empty($uname))
    {
        header("Location: index.php?error=user name is required");
    exit();

    }
    else if(empty($pass))
    {
        header("Location: index.php?error= password is required");
        exit();

    }
    else{
        echo "valid input";
    }

}
else{
    header("Location: index.php");
    exit();
}