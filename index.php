<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobFinder | Boolean Exercise</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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

$selectedSalary = $_GET["salary"] ?? "";
$selectedExperience = $_GET["experience"] ?? "";
$selectedRemote = $_GET["remote"] ?? "";

$isSalaryRequested = false;
if ($selectedSalary != "" && is_numeric($selectedSalary)) {
    $isSalaryRequested = true;
}
$isExprerienceRequested = false;
if ($selectedExperience != "") {
if ($selectedExperience == "all" || $selectedExperience == "junior" ||  $selectedExperience == "senior"){
$isExprerienceRequested = true;
}
}
$isRemoteRequested = false;
if ($selectedRemote  == "on"){
$isRemoteRequested = true;
}

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
<form action="index.php" method="GET" class="mb-5">
    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-body p-4">
            
            <div class="d-flex align-items-center mb-4">
                <div class="bg-primary text-white rounded-circle p-2 me-3 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                    <i class="bi bi-filter"></i>
                </div>
                <h5 class="m-0 fw-bold">Trova la tua opportunità</h5>
            </div>
            
            <div class="row g-3">
                <div class="col-md-4">
                    <label for="salary" class="form-label small fw-bold text-muted">Stipendio Minimo (RAL)</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white">€</span>
                        <input type="number" name="salary" id="salary" value="<?php echo $selectedSalary?>" class="form-control" placeholder="es. 30.000">
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="experience" class="form-label small fw-bold text-muted">Livello di Esperienza</label>
                    <select name="experience" id="experience" class="form-select">
                        <option value="all"<?php echo $selectedExperience == "all" ? "selected" : ""?>>Tutti i livelli</option>
                        <option value="junior"<?php echo $selectedExperience == "junior" ? "selected" : ""?>>Junior (0-2 anni)</option>
                        <option value="senior"<?php echo $selectedExperience == "senior" ? "selected" : ""?>>Senior (3+ anni)</option>
                    </select>
                </div>

                <div class="col-md-4 d-flex align-items-end pb-2">
                    <div class="form-check form-switch custom-switch">
                        <input class="form-check-input" type="checkbox" name="remote" id="remote" <?php echo $isRemoteRequested ? "checked" : "" ?>>
                        <label class="form-check-label fw-semibold" for="remote">Solo Smart Working</label>
                    </div>
                </div>

                <div class="col-12 mt-4">
                    <button type="submit" class="btn btn-primary px-5 py-2 fw-bold">
                        Applica Filtri
                    </button>
                    <a href="index.php" class="btn btn-link text-decoration-none text-muted">Svuota tutto</a>
                </div>
            </div>
       </div>
    </div>
</form>



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


if ($isSalaryRequested) {
 if ($job["salary"] < (int)$selectedSalary) {
       continue;
    }
}


if ($isExprerienceRequested) {
if($selectedExperience == "junior"){
    if ($job["experience"]  > 2) {
        continue;
    }
}
if($selectedExperience == "senior") {
  if ($job["experience"]  < 3) {
        continue;
    }
}
}
if ($isRemoteRequested) {
if ($job["remote"]  == false) {
continue;
}

}

   $isRemoteText = $job["remote"] ? "Si" : "No";
   ?>
   <tr>
      <th scope="row"><?php echo $job["title"] ?></th>
      <td><?php echo $job["location"] ?></td>
      <td><span class= "badge <?php echo $isRemoteText == "Si" ? "text-bg-success" : "text-bg-danger"  ?>"> <?php echo $isRemoteText ?></span></td>
      <td><?php echo number_format($job["salary"], 0, ',', '.') ?></td>
      <td><?php echo $job["experience"] ?></td>
    </tr>
<?php } ?>
</tbody>
</table>
</div>
</body>
</html>