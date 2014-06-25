<?php

interface Bakeable {
    public function getCookTime();
    public function getCookTemp();
}

class ClayPot implements Bakeable {
    public function getCookTime() { return 300; }
    public function getCookTemp() { return 950; }
}

class Cake implements Bakeable {
    public function getCookTime() { return 18; }
    public function getCookTemp() { return 350; }
}

class Pizza implements Bakeable {
    public function getCookTime() { return 18; }
    public function getCookTemp() { return 350; }
}

class Oven {
    public function bake(Bakeable $food) {
        $cook_time = $food->getCookTime();
        $cook_temp = $food->getCookTemp();
    }
}
