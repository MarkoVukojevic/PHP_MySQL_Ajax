<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Concert Ticket Booking</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="./js/category.js"></script>
  <style>
    body {
      background-color: #f1f8ff;
      color: #000;
    }

    .navbar {
      background-color: #e3f2fd;
    }

    .form-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f0f8ff;
      border-radius: 5px;
      margin-top: 50px;
    }

    .form-group label {
      color: #000;
    }

    .form-group select,
    .form-group input[type="number"] {
      background-color: #e8f5fe;
      color: #000;
      border: none;
    }

    .form-group select option {
      background-color: #e8f5fe;
      color: #000;
    }

    .form-group button {
      background-color: #2196f3;
      color: #fff;
      border: none;
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
      <div class="col-md-6 offset-md-3">
        <div class="form-container">
          <h2 class="text-center">Ticket Booking(<?php  session_start(); echo $_SESSION["username"]?>)</h2>
          <form>
            <div class="form-group">
              <label for="ticket-quantity">Number of Tickets</label>
              <input type="number" class="form-control" id="ticket-quantity" min="1" max="10" required>
            </div>
            <div class="form-group">
              <label for="ticket-category">Ticket Category</label>
              <select class="form-control" id="ticket-category" required>
                <option value="" selected disabled>Select Category</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block" onclick="buyTickets()">Book Tickets</button>
          </form>
        </div>
      </div>
    </div>
  </div>


</body>

</html>
