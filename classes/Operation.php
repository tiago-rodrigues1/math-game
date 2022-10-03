<?php 
    class Operation {
        private $opCode;
        public $name;
        public $sign;
    
        public function __construct(string $op) {
            $this->opCode = $op;

            $this->set_name();
            $this->set_sign();
        }

        private function set_name() {
            $operationsMap = [
                "ad" => "Adição",
                "sb" => "Subtração",
                "mt" => "Multiplicação",
                "dv" => "Divisão",
            ];

            $this->name = $operationsMap[$this->opCode];
        }

        private function set_sign() {
            $operationsMap = [
                "ad" => "+",
                "sb" => "-",
                "mt" => "x",
                "dv" => "/",
            ];

            $this->sign = $operationsMap[$this->opCode];
        }
        
        function getResult(int $num1, int $num2) {
            $operationsCalc = [
                "ad" => function(int $n1, int $n2) {
                    return $n1 + $n2;
                },
                "sb" => function(int $n1, int $n2) {
                    return $n1 - $n2;
                },
                "mt" => function(int $n1, int $n2) {
                    return $n1 * $n2;
                },
                "dv" => function(int $n1, int $n2) {
                    return $n1 / $n2;
                },
            ];

            return $operationsCalc[$this->opCode]($num1, $num2);
        }
    }
?>