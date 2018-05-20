<?php  
// Numbers
echo 1 <=> 1;	// 0
echo 1 <=> 2;	// -1
echo 2 <=> 1;	// 1

// Strings
echo "aaa" <=> "aaa";	// 0
echo "abc" <=> "bcd";	// -1
echo "bcd" <=> "abc";	// 1

// Arrays
echo [1, 2, 3] <=> [1, 2, 3];	// 0
echo [1, 2, 3] <=> [];			// 1
echo [1, 2, 3] <=> [1, 2, 1];	// 1
echo [1, 2, 3] <=> [1, 2, 4];	// -1
