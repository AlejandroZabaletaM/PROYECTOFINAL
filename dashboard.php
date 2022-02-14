<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
          <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
        <script type="text/javascript">
    window.setInterval(function () {
        updateStats();
    }, 2000);
    function updateStats() {
        updateConnectedUsers();
        updateDailyRevenue();
    }
    function updateConnectedUsers() {
        jQuery.get(
            'get_connected_users.php',
            function (data) {
                $('#connected_users').text(data);
            }
        );
    }
    function updateDailyRevenue() {
        jQuery.get(
            'get_daily_revenue.php',
            function (data) {
                $('#daily_revenue').text(data);
            }
        );
    }
</script>
    <title>Dashboard</title>
</head>
<body>
<h1>Bienvenido administrador</h1>
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-body">
                    Lista de usuarios en la aplicación en tiempo real: <strong><span id="connected_users">0</span></strong>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card">
                <div class="card-body">
                    Facturación del día: <strong>$ <span id="daily_revenue">0.00</span></strong>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
div.w-33 {
  width: 100%;
  background-color: white;
}

div.center {
  text-align: center;
}
</style>
<div class="w-33">
  <div class="center">
  <form action="graficas.php" method="POST">
    <h2> <input type="submit" name="Ventas" value="Ventas"></h2>
    <h2> <input type="submit" name="Productos" value="Productos"></h2>
</form>
  </div>
</div>
</body>
</html>