<?php
$company = [
    "departments" => [
        "HR"=>[
            "manager"=>"S johnson",
            "employees"=>["A","B"]
        ],
        "IT" => [
            "manager"=>"T smith",
            "employees"=>["C",
            "D",
            "E"]
        ],
    ],
    "location" => "Newyork",
    "founded" => 2005
];

foreach($company["departments"] as $department=>$info){
    echo "Department: $department \n <br>";
    echo "Manager: ".$info["manager"]."<br>";
    echo "Employees:".implode(",",$info["employees"])."\n\n <br>";
    echo "<br>";
}

