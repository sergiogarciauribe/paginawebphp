<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php require_once 'includes/header.php'; ?>
  <main>
    <h2>Contacto</h2>
    <form action="process_contact.php" method="POST">
      <label>Nombre:</label>
      <input type="text" name="nombre" required>

      <label>Email:</label>
      <input type="email" name="email" required>

      <label>Mensaje:</label>
      <textarea name="mensaje" required></textarea>

      <button type="submit">Enviar</button>
    </form>
  </main>

  <?php require_once 'includes/footer.php'; ?>

</body>

</html>