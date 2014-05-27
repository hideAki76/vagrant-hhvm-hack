<?hh

// Array
function createArray(): array<string> {
    $arry = array("PHP", "Hack");
    // Add
    $arry[] = "HHVM";
    // Modify
    $arry[0] = "Hypertext Preprocessor";
    return $arry;
}

var_dump(createArray());

// Vector
function createVector(): Vector<string> {
    $vector = Vector<string> {"PHP", "Hack"};
    // Add
    $vector[] = "HHVM";
    // Modify
    $vector[0] = "Hypertext Preprocessor";
    return $vector;
}

var_dump(createVector());

// Map
function createMap(): Map<string, string> {
    $map = Map {"php" => "PHP", "hack" => "Hack"};
    // Add
    $map["hhvm"] = "HHVM";
    // Modify
    $map["php"] = "Hypertext Preprocessor";
    return $map;
}

var_dump(createMap());
