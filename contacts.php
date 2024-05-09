<?php
    include('tpl/header.php');
    include('tpl/nav.php');
?>
<main class="flex" id="contacts_main">
  <?php
    include("dbconnect.php");

    $result = $mysqli->query("SELECT * FROM remarks");
    $table = "<table id='contacts'>";
    $k = 1;

    while ($myrow = $result->fetch_assoc()) {
      $table .= "<tr>";
      $table .= "<td>".$myrow['topic']."</td>";
      $table .= "<td>".$myrow['text']."</td>";
      $table .= "</tr>";
      $k++;
    }

    $table .= "</table>";
    echo $table;
  ?>
</main>
<?php
    include('tpl/footer.php');
?>