<?php
// 1
for ($i = 1; $i <= 10; $i++) {
 print $i;
}
echo "<br/>";
// 2
for ($i = 1; ; $i++) {
 if ($i > 10) {
 break;
 }
 print $i;
}
echo "<br/>";
// 1
for ($i = 1; $i <= 10; $i++) {
 print $i;
}
echo "<br/>";
// 2
for ($i = 1; ; $i++) {
 if ($i > 10) {
 break;
 }
 print $i;
}
echo "<br/>";
// 1
for ($i = 1; $i <= 10; $i++) {
 print $i;
}
echo "<br/>";
// 2
for ($i = 1; ; $i++) {
 if ($i > 10) {
 break;
 }
 print $i;
}
echo "<br/>";
// 3
$i = 1;
for (;;) {
 if ($i > 10) {
 break;
 }
 print $i;
 $i++;
}
echo "<br/>";
// 4
for ($i = 1; $i <= 10; print $i, $i++);
echo "<br/>";
// 1
for ($i = 1; $i <= 10; $i++) {
 print $i;
}
echo "<br/>";
// 2
for ($i = 1; ; $i++) {
 if ($i > 10) {
 break;
 }
 print $i;
}
echo "<br/>";
// 3
$i = 1;
for (;;) {
 if ($i > 10) {
 break;
 }
 print $i;
 $i++;
}
echo "<br/>";
// 4
for ($i = 1; $i <= 10; print $i, $i++);
?>