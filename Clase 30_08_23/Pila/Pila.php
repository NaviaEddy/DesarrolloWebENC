<?php
class Pila {
    private $PilaArray = [];
    private $maxSize;

    public function __construct($maxSize = PHP_INT_MAX) {
        $this->maxSize = $maxSize;
    }

    public function push($item) {
        if ($this->size() < $this->maxSize) {
            array_push($this->PilaArray, $item);
        } else {
            echo "La pila está llena. No se puede agregar más elementos.<br>";
        }
    }

    public function pop() {
        if (!$this->isEmpty()) {
            return array_pop($this->PilaArray);
        } else {
            return null; // Pila vacía, no se puede hacer pop
        }
    }

    public function peek() {
        if (!$this->isEmpty()) {
            return end($this->PilaArray);
        } else {
            return null; // Pila vacía, no hay elementos para mirar
        }
    }

    public function isEmpty() {
        return empty($this->PilaArray);
    }

    public function size() {
        return count($this->PilaArray);
    }

    public function clear() {
        $this->PilaArray = [];
    }
}

// Uso de la pila con un tope máximo de 3 elementos
$Pila1 = new Pila(3);

$Pila1->push(10);
$Pila1->push(20);
$Pila1->push(30);

echo "Tamaño de la pila: " . $Pila1->size() . "<br>";
echo "Elemento en la parte superior: " . $Pila1->peek() . "<br>";

$Pila1->push(40); // Intentamos agregar un cuarto elemento, pero la pila está llena

echo "Elementos de la pila: ";
while (!$Pila1->isEmpty()) {
    echo $Pila1->pop() . " ";
}

?>