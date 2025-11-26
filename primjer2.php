<?php



class StudentCollection implements Iterator{

    private array $students;
    private int $position = 0;

    public function __construct(array $students){
        $this->students=$students;
    }

    public function current(): mixed{
        return $this->students[$this->position];
    }

    public function key(): int{
        return $this->position;
    }

    public function next(): void{
        $this->position++;
    }

    public function rewind(): void{
        $this->position=0;
    }

    public function valid(): bool{
        return isset($this->students[$this->position]);
    }

    public function search($searchItem){
            foreach($this->students as $stud){
                if($stud===$searchItem){
                    return $stud;
                }
            }
            return null;
        }
    }


$col = new StudentCollection(["Petar","Mara","Ivo","Robert"]);

foreach($col as $student){
    echo "<br>Student: ".$student;
}
echo "<hr>";

$rezultat = $co1->search("Mara");
echo $rezultat ? "<br>Student pronađen: ".$rezultat : "Student nije pronađen";

?>