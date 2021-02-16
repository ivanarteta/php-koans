<?php

namespace koans;

use function PHPUnit\Framework\stringContains;

class Operator{


    public function addFunction(): int{
        return 3+2;
    }

    public function substractFunction(): string{
        return substr("holaa", 3, 2);
    }

    public function multiplicateFunction(): int{
        return 3*2;
    }

    public function divideFunction():int{
        return 4/2;
    }

    public function moduleFunction(): int{
        return 3%2;
    }

    public function exponentFunction():int{
        return 3**2;
    }

    public function assignVariableToAnotherVariableFunction(int $int, int $int1): int{
        $int1 = $int;
        return $int1;
    }

    public function addVariableToAnotherVariableFunction(int $int, int $int1): int{
        $int .= $int1;
        return $int;
    }

    public function multiplyVariableToAnotherVariableFunction(int $int, int $int1): int{
        return $int*$int1;
    }

    public function divideVariableByAnotherVariableFunction(int $int, int $int1): int{
        return $int/$int1;
    }

    public function moduleVariableByAnotherVariableFunction(int $int, int $int1): int{
        return $int%$int1;
    }

    public function equalFunction(string $string, string $string1): bool{
        return strpos($string, $string1);
    }

    public function identicalFunction(string $string, string $string1): bool{
        return $string === $string1;
    }

    public function notEqualFunction(string $string, string $string1): bool{
        return !strpos($string, $string1);
    }

    public function notIdenticalFunction(int $int, int $int1){
        return !($int === $int1);
    }

    public function greaterThanFunction(int $int, int $int1): bool{
        return ($int > $int1);
    }

    public function lessThanFunction(int $int, int $int1): bool{
        return ($int < $int1);
    }

    public function greaterThanOrEqualToFunction(int $int, int $int1): bool{
        return ($int >= $int1);
    }

    public function lessThanOrEqualToFunction(int $int, int $int1): bool{
        return ($int <= $int1);
    }
}