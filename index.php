<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>OOP Task</title>
</head>
<body>
<?php
class Student {
  public $id;
  public $name;
  public $email;
  public $mob_num;

  function __construct($id, $name, $email, $mob_num) {
    $this->id = $id;
    $this->name = $name;
    $this->email = $email;
    $this->mob_num = $mob_num;

  }
  function __destruct() {
      echo "<table class='table table-info' >
      <thead>
        <tr>
          <th scope='col'>ID no.</th>
          <th scope='col'>Student Name</th>
          <th scope='col'>Email</th>
          <th scope='col'>Mob No.</th>  
        </tr>
      </thead>
    <tbody>
      <tr>
        <th scope='row'>{$this->id}</th>
        <td>{$this->name}</td>
        <td>{$this->email}</td>
        <td>{$this->mob_num}</td>  
      </tr>
    </tbody>
  </table> ";
}
}

class Teacher extends Student {
    public $salary;
    public $subject;

    public function __construct($id, $name, $email, $mob_num, $salary, $subject) {
        $this->id      = $id;
        $this->name    = $name;
        $this->email   = $email;
        $this->mob_num = $mob_num;
        $this->salary  = $salary;
        $this->subject = $subject;

        }
    public function __destruct() {
        echo "<table class='table table-warning' >
        <thead>
          <tr>
            <th scope='col'>ID no.</th>
            <th scope='col'>Teacher Name</th>
            <th scope='col'>Email</th>
            <th scope='col'>Mob No.</th>
            <th scope='col'>Salay</th>
            <th scope='col'>Subject</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope='row'>{$this->id}</th>
            <td>{$this->name}</td>
            <td>{$this->email}</td>
            <td>{$this->mob_num}</td>
            <td>{$this->salary}</td>
            <td>{$this->subject}</td>
      
          </tr>
        </tbody>
      </table> ";
}
  }
    
$Jenan  = new Student("01124", "Jenan Musallam", "jenan@gmail.com", 962777554104);
$Leen   = new Student("01125", "Leen Awad", "leen@gmail.com", 962777114011);
$Moh    = new Student("01126", "Mohammad Al-Agi", "mohammad@gmail.com", 962777800448);
$Angham   = new Student("01127", "Angham Bani-younes", "angham@gmail.com", 962777859011);
$Taima  = new Student("01123", "Taima Alfokaha", "taima@gmail.com", 962775811487);
$Maysam = new Student("01122", "Maysam Al-Turk", "maysam@gmail.com", 962785168652);

$Adam   = new Teacher("22087", "Adam", "adam@gmail.com", 962777800448, 1100, "Math, English, Physics");
$Joe    = new Teacher("22088", "Joe", "joe@gmail.com", 962777808848, 1000, "Chemistry, Biology, Math");
$Brad   = new Teacher("22088", "Brad", "brad@gmail.com", 962777500448, 900, "Arabic, French, Geology" );

?>
</body>
</html>