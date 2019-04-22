<html>
<title>Carbadvisor</title>
<head>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <!-- header -->
    <?php
        include 'views/header.php'
    ?>
    <!-- fin header -->		
    
    <!------Contenu ------>
    <div class="container">
        <!-- Search Bar-->
        <?php
            include 'views/search-bar.php'
        ?>
        <!-- Fin Search Bar-->
        <!-- Liste des stations -->
        <?php
            include 'views/list-stations.php'
        ?>
        <!-- Fin Liste des stations -->
    </div>
    <!-- ------------fin contenu -->
</body>

<script src="https://code.jquery.com/jquery-3.1.1.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js">
</script>
</html>