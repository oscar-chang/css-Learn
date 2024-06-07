<!DOCTYPE html>
<html>

<body>

    <?php
    interface Fly
    {
        public function fly();
    }

    interface Attack
    {
        public function attack();
    }

    class Cat implements Fly, Attack
    {
        public function fly()
        {
            echo "fly ok";
        }

        public function attack()
        {
            echo "attack ok";
        }
    }

    $animal = new Cat();
    $animal->fly();
    $animal->attack();
    ?>

</body>

</html>