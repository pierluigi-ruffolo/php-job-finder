<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>

<?php  
$jobs = [
    [
        'title' => 'Web Developer',
        'location' => 'Milano',
        'remote' => true,
        'salary' => 35000,
        'experience' => 2
    ],
    [
        'title' => 'Graphic Designer',
        'location' => 'Roma',
        'remote' => false,
        'salary' => 28000,
        'experience' => 1
    ],
    [
        'title' => 'Project Manager',
        'location' => 'Torino',
        'remote' => true,
        'salary' => 45000,
        'experience' => 5
    ],
    [
        'title' => 'Data Analyst',
        'location' => 'Bologna',
        'remote' => false,
        'salary' => 32000,
        'experience' => 3
    ],
    [
        'title' => 'Marketing Specialist',
        'location' => 'Napoli',
        'remote' => true,
        'salary' => 30000,
        'experience' => 2
    ],
];
?>




<body>
<nav class="navbar navbar-expand-lg bg-white shadow-sm py-3">
    <div class="container justify-content-center">
        <a class="navbar-brand fw-bold text-success text-uppercase" href="" style="letter-spacing: 2px;">
            <i class="bi bi-building-fill me-2"></i> Trova Lavoro
        </a>
    </div>
</nav>

<div class="container pt-5">
    <table class="table">
  <thead>
    <tr>
    <th scope="col">Posizione</th>
    <th scope="col">Città</th>
    <th scope="col">Modalità</th>
    <th scope="col">RAL (€)</th>
    <th scope="col">Esperienza (Anni)</th>
    </tr>
  </thead>
  <tbody>
<?php  foreach ($jobs as $job) { 
 
   $isRemoteText = $job["remote"] ? "Si" : "No";

  
     ?>
   <tr>
      <th scope="row"><?php echo $job["title"] ?></th>
      <td><?php echo $job["location"] ?></td>
      <td><span class= "badge <?php echo $isRemoteText == "Si" ? "text-bg-success" : "text-bg-danger"  ?>"> <?php echo $isRemoteText ?></span></td>
      <td><?php echo $job["salary"] ?></td>
      <td><?php echo $job["experience"] ?></td>
    </tr>
<?php } ?>
</tbody>
</table>
</div>
</body>
</html>