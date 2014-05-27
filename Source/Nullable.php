<?hh //strict

// Type Aliasing
type word = string;

// Nullable
function Say($word) {
  return "Say $word";
}

function Test_nullable_type(): void {
  echo Say("hello!").PHP_EOL;
  echo Say(null).PHP_EOL;
}

Test_nullable_type();
