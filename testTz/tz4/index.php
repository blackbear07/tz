<?php
    class User
    {
        private $_name;
        private $_age;

        public function __construct(string $name, int $age)
        {
            $this->_name = $name;
            $this->_age = $age;
        }

        public function СallFunction(string $nameFunction)
        {
          switch($nameFunction) {
            case "GetName":
                return $this->GetName();     
                break;
            case "GetAge":     
                return $this->GetAge();          
                break;
            default:
                return "Error";
          }
        }

        private function GetName()
        {
            return $this->_name;
        }
        private function GetAge()
        {
            return $this->_age;
        }
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $a = new User("Афу",44);

    $log = $a->СallFunction("GetName");
    echo $log;

    $log = $a->СallFunction("GetAge");
    echo $log;

    $log = $a->СallFunction("GetA34254ge");
    echo $log;
?>
</body>
</html>
