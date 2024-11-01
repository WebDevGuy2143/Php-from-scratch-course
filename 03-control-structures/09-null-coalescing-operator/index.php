<?php

// if favoriteColor is not set, set it to 'blue', otherwise use the value of favoriteColor

// store the values for favoriteColor and secondFavoriteColor in a variable
$favoriteColor = 'red';
$secondFavoriteColor = 'green';


// $color = isset($favoriteColor) ? $favoriteColor : 'blue';


// $color = $favoriteColor ?? 'blue';

// if favoriteColor is not set, set it to 'red', otherwise check to see if $favoriteColor is set, if so, use the value of favoriteColor, otherwise use the value of SecondfavoriteColor
// $color = $isset($favoriteColor) ? $favoriteColor : (isset($favoriteColor) ? $secondFavoriteColor : 'blue');

// check if favoiriteColor is null, if so, use the value of secondFavoriteColor, otherwise use the value of favoriteColor
$color = $favoriteColor ?? $secondFavoriteColor ?? 'blue';

// display the value of $color
echo $color;
