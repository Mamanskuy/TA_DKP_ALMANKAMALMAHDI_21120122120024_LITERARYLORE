<?php
class login
{
    protected $email;
    protected $password;
    protected $dataUser;

    public function __construct($email, $password) 
    {
        $this->dataUser = [
            (object) [
                'email'     => "alman1@gmail.com",
                'password'  => "alman1"
            ],
            (object) [
                'email'     => "alman2@gmail.com",
                'password'  => "alman2"
            ]
        ];
        $this->email = $email;
        $this->password = $password;
    }

    public function login1()
    {
        $user = $this->cekakun();
        if ($user) {
            $this->beranda();
            return $user->email;
        } else {
            return false;
        }
    }

    protected function cekakun()
    {
        foreach ($this->dataUser as $key => $value) {
            if ($value->email == $this->email && $value->password == $this->password) {
                return $value;
            }
        }
        return false;
    }

    protected function beranda()
    {
        header("Location: beranda.php");
        exit();
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $user = new login($email, $password);
    $loggedInUser = $user->login1();
    if ($loggedInUser) {
        echo "Logged in as: " . $loggedInUser;
    } else {
        echo '<script>alert("Username atau password salah!");</script>';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>LiteraryLore | Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/login.css
    ">
</head>
<body id="bg-login">
    <div class="box-login">
    <h1>LiteraryLore</h1>
    <h1>Login</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" class="input-control">
        <br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" class="input-control">
        <br><br>
        <input type="submit" value="Login" class="btn">
    </form>
    </div>
</body>
</html>
