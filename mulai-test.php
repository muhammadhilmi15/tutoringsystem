<?php
if (empty($tingkatan)) {
  header("location:index.php?p=pre-test");
} else if (!empty($tingkatan)) {
  header("location:index.php?p=post-test");
}
?>
