<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php
    include('header.php');
    ?>
    <!-- Boxicons -->
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

	<!-- css -->
<link rel="stylesheet" href="../Style.css">




<title>ChronoTec</title>
</head>

<body>
<div class="container">
  <div class="left">
    <div class="calendar">
      <div class="month">
        <i class="fas fa-angle-left prev"></i>
        <div class="date">febrero 2025</div>
        <i class="fas fa-angle-right next"></i>
      </div>
      <div class="weekdays">
        <div>Dom</div>
        <div>Lun</div>
        <div>Mar</div>
        <div>Mié</div>
        <div>Jue</div>
        <div>Vie</div>
        <div>Sáb</div>
      </div>
      <div class="days"></div>
      <div class="goto-today">
        <div class="goto">
          <input type="text" placeholder="mm/aaaa" class="date-input" />
          <button class="goto-btn">Ir</button>
        </div>
        <button class="today-btn">Hoy</button>
      </div>
    </div>
  </div>
  <div class="right">
    <div class="today-date">
      <div class="event-day">Mié</div>
      <div class="event-date">19 de febrero 2025</div>
    </div>
    <div class="events"></div>
    <div class="add-event-wrapper">
      <div class="add-event-header">
        <div class="title">Añadir Evento</div>
        <i class="fas fa-times close"></i>
      </div>
      <div class="add-event-body">
        <div class="add-event-input">
          <input type="text" placeholder="Nombre del Evento" class="event-name" />
        </div>
        <div class="add-event-input">
          <input
            type="text"
            placeholder="Hora de inicio"
            class="event-time-from"
          />
        </div>
        <div class="add-event-input">
          <input
            type="text"
            placeholder="Hora de finalización"
            class="event-time-to"
          />
        </div>
      </div>
      <div class="add-event-footer">
        <button class="add-event-btn">Agregar Evento</button>
      </div>
    </div>
  </div>
  <button class="add-event">
    <i class="fas fa-plus"></i>
  </button>
</div>
<script src="../Admin/script/script.js"></script>
</body>
</html>