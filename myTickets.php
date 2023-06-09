<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Tickets</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="./js/ticket.js"></script>
  <style>
    body {
      background-color: #f1f8ff;
      color: #000;
    }

    .navbar {
      background-color: #e3f2fd;
    }

    .ticket-list-container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f0f8ff;
      border-radius: 5px;
      margin-top: 50px;
    }

    .ticket {
      background-color: #e8f5fe;
      color: #000;
      padding: 10px;
      margin-bottom: 10px;
      border-radius: 5px;
    }

    .ticket h3 {
      margin-top: 0;
    }

    .back-link {
      color: #000;
      text-decoration: none;
    }
  </style>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg">
        <a class="navbar-brand" href="/tickets/index.html">Concert Tickets</a>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/tickets/myTickets.php">My Tickets</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/tickets/ticket.php">Back to booking</a>
    
          </li>
        </ul>
      </nav>

  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="ticket-list-container">
          <h2 class="text-center">My Tickets(<?php  session_start(); echo $_SESSION["username"]?>)</h2>
        </div>
      </div>
    </div>
  </div>

</body>

</html>
