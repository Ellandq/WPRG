<?php

    function calculateTriangleArea($base, $height) {
        return 0.5 * $base * $height;
    }

    function calculateRectangleArea($width, $height) {
        return $width * $height;
    }

    function calculateTrapezoidArea($top, $bottom, $height) {
        return 0.5 * ($top + $bottom) * $height;
    }

    echo "Choose a shape to calculate the area of: \n";
    echo "1. Triangle \n";
    echo "2. Rectangle \n";
    echo "3. Trapezoid \n";

    $choice = readline();
    $area;

    switch ($choice) {
    case 1:
        echo "Enter the base of the triangle: ";
        $base = readline();
        echo "Enter the height of the triangle: ";
        $height = readline();

        $area = calculateTriangleArea($base, $height);
        echo "The area of the triangle is: " . $area . "\n";
        break;
    case 2:
        echo "Enter the width of the rectangle: ";
        $width = readline();
        echo "Enter the height of the rectangle: ";
        $height = readline();

        $area = calculateRectangleArea($width, $height);
        echo "The area of the rectangle is: " . $area . "\n";
        break;
    case 3:
        echo "Enter the length of the top of the trapezoid: ";
        $top = readline();
        echo "Enter the length of the bottom of the trapezoid: ";
        $bottom = readline();
        echo "Enter the height of the trapezoid: ";
        $height = readline();

        $area = calculateTrapezoidArea($top, $bottom, $height);
        echo "The area of the trapezoid is: " . $area . "\n";
        break;
    default:
        echo "Invalid choice. \n";
        break;
    }

?>
