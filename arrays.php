<?php
$calling_codes = [
    'AR' => '+54',
    'CZ' => '+420',
    'DE' => '+49',
    'HU' => '+36',
    'US' => '+1'
  ];
 
  $country_names = [
    'US' => 'USA',
    'HU' => 'Hungary',
    'CZ' => 'Czechia',
    'AR' => 'Argentina',
    'DE' => 'Germany',
    'DK' => 'Denmark',
    'IN' => 'India'
  ];

  foreach($calling_codes as $calling_code_country => $calling_code) {
    foreach($country_names as $country_abbr => $country_name) {
        if($calling_code_country == $country_abbr) {
            echo "The calling code for $country_name is $calling_code <br>";
        }
    }
  }

  echo "<hr>";
//---------------------------------------------------------Extra exercises----------------------------------------------------------
  $large_cities = [
    'Tokyo', 
    'Mexico City', 
    'New York City', 
    'Mumbai', 
    'Seoul', 
    'Shanghai', 
    'Lagos', 
    'Buenos Aires', 
    'Cairo', 
    'London',
  ];

  foreach($large_cities as $city) 
  {
    echo $city . ', <br>'; 
  }

  sort($large_cities);
  echo "<ul>";
  foreach($large_cities as $city) {
    echo "<li>$city</li>";
  }

  echo "</ul>";
  echo "<br>";

  array_push($large_cities, 'Los Angeles', 'Calcutta', 'Osaka', 'Beijing');
  var_dump($large_cities);

  echo "<br>";
  sort($large_cities);
  echo "<ul>";
  foreach($large_cities as $city) {
    echo "<li>$city</li>";
  }

  echo "</ul>";
  ?>