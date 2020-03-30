<?php 

Class Properties

{

    public $name;
    public $surname;
    public $age;
    public $sex;
    public $health;
    public $stamina;
    public $strength;
    public $wisdon;
    public $inteligence;
    public $charisma;
    public $dexerity;

    public function __construct($race, $name, $surname, $age, $sex, $health, $stamina, $strength, $wisdon, $inteligence, $charisma, $dexerity )
{
    $this->race = $race;
    $this->name = $name;
    $this->surname = $surname;
    $this->age = $age;
    $this->sex = $sex;
    $this->health = $health;
    $this->stamina = $stamina;
    $this->strength = $strength;
    $this->wisdon = $wisdon;
    $this->inteligence = $inteligence;
    $this->charisma = $charisma;
    $this->dexerity = $dexerity;

    $this->name = $this->name();
    $this->surname = $this->surname();



}

public function name()
{
    $male_names = array("Arjhan", "Balasar", "Bharash", "Donaar", "Ghesh", "Heskan", "Kriv", "Medrash", "Mehen", "Nadarr", "Pandjed", "Patrin", "Rhogar", "Shamash", "Shedinn", "Tarhun", "Torinn");
    $female_names = array("Akra", "Biria", "Daara", "Farideh", "Harann", "HaviJar", "Jheria", "Kava", "Korinn", "Mishanna", "Nala", "Perra", "Raianna", "Sora", "Surina", "Tava", "Uadjita");
    $children_names = array("Artista", "Bohumil", "Horlivec", "Křivič", "Lezec", "Štítořez");

if ($this->sex = "male"){
    $random_surname_index = array_rand($male_names);
    return $male_names[$random_name];
}else if ($this->sex = "female") {
    $random_name = array_rand($female_names);
    return $female_names[$random_name];
}

}

public function surname()
{
    $races_surnames = array("Balderk", "Dankil", "Gorunn", "Holderhek", "Loderr", "Lutgehr", "Rumnaheim", "Strakeln", "Torunn", "Ungart");
    $random_surname_index = array_rand($races_surnames);
    return $races_surnames[$random_surname_index];
}

}

Class Race extends Properties
{
    public $race;
}

$properties = new Properties(100, 250, 60, 200, 220, 150, "female", "Drakorozený");

?>