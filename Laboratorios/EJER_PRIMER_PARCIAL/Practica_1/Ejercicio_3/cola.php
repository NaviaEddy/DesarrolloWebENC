<?php
class Cola {
    private $tipo;
    private $elementos;

    public function __construct($tipo) {
        if ($tipo !== 'Normal' && $tipo !== 'Doble Entrada') {
            echo "Tipo de cola no válido\n";
        }
        $this->tipo = $tipo;
        $this->elementos = [];
    }

    public function insertar($elemento) {
        if ($this->tipo === 'Normal') {
            array_push($this->elementos, $elemento);
            echo "Se inserto correctamente";
        } 
    }

    public function mostrar() {
        return $this->elementos;
    }

    public function eliminar() {
        if ($this->tipo === 'Normal') {
            if (!empty($this->elementos)) {
                echo "Se elimino correctamente";
                return array_shift($this->elementos);
            } else {
                echo "La cola está vacía. No se puede eliminar.\n";
            }
        } 
    }

    public function insertarDelante($elemento) {
        if ($this->tipo === 'Doble Entrada') {
            array_unshift($this->elementos, $elemento);
        } 
    }

    public function insertarDetras($elemento) {
        if ($this->tipo === 'Doble Entrada') {
            array_push($this->elementos, $elemento);
        } 
    }

    public function eliminarDelante() {
        if ($this->tipo === 'Doble Entrada') {
            if (!empty($this->elementos)) {
                echo "Se elimino correctamente";
                return array_shift($this->elementos);
            } else {
                echo "La cola está vacía. No se puede eliminar desde el frente.\n";
            }
        } 
    }

    public function eliminarDetras() {
        if ($this->tipo === 'Doble Entrada') {
            if (!empty($this->elementos)) {
                echo "Se elimino correctamente";
                return array_pop($this->elementos);
            } else {
                echo "La cola está vacía. No se puede eliminar desde atrás.\n";
            }
        } 
    }
}


?>