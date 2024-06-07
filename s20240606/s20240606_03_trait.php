<!DOCTYPE html>
<html>

<body>

    <?php
    trait message1
    {
        public function msg1()
        {
            echo "laravel is good";
        }
    }

    class Student123
    {
        use message1;
    }

    $amy = new Student123();
    $bob = new Student123();
    $cat = new Student123();
    $dog = new Student123();
    $amy->msg1();
    ?>

</body>

</html>