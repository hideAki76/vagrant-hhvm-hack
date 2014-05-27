<?hh

function many_args_function(int $num, ...): void {
  echo "num:" . $num . "\n";
  foreach (func_get_args() as $e) {
    var_dump($e);
  }
}

// Variable Number of Arguments
function test_valiable_number_of_arg(): void {
  many_args_function(100, "word", 1, array(), 3.14);
}

test_valiable_number_of_arg();
