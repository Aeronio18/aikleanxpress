<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>AIKlean Xpress</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <style>
     :root {
      --turquesa: #40e0d0;
      --blanco-nieve: #F8F9FA;
      --azul-oscuro: #003366;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Montserrat', sans-serif;
      background-color: var(--blanco-nieve);
      color: var(--azul-oscuro);
    }

    header {
      background-color: var(--azul-oscuro);
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }

    header h1 {
      color: white;
      font-size: 1.8rem;
    }

    nav a {
      color: white;
      margin: 0 1rem;
      text-decoration: none;
      font-weight: bold;
      font-size: 1rem;
    }

    nav {
      display: flex;
      flex-wrap: wrap;
    }

    .hero {
      background-image: url('https://images.unsplash.com/photo-1600585154340-be6161f636bf?auto=format&fit=crop&w=1600&q=80');
      background-size: cover;
      background-position: center;
      color: white;
      text-align: center;
      padding: 5rem 2rem;
    }

    .hero h1 {
      font-size: 3rem;
      text-shadow: 2px 2px 5px #000;
    }

    .hero p {
      font-size: 1.2rem;
      margin: 1rem 0;
    }

    .btn {
      background-color: var(--turquesa);
      color: var(--azul-oscuro);
      padding: 0.75rem 1.5rem;
      border: none;
      border-radius: 25px;
      font-weight: bold;
      text-decoration: none;
      transition: 0.3s;
    }

    .btn:hover {
      background-color: white;
      color: var(--azul-oscuro);
    }

    .section {
      padding: 4rem 2rem;
      text-align: center;
    }

    .section h2 {
      margin-bottom: 1rem;
      color: var(--azul-oscuro);
    }

    .paquetes {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 2rem;
      margin-top: 2rem;
    }

    .card {
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      padding: 2rem;
      max-width: 300px;
      text-align: left;
    }

    .card h3 {
      color: var(--turquesa);
      margin-bottom: 0.5rem;
    }

    .card p {
      font-size: 0.95rem;
    }

    footer {
      background-color: var(--azul-oscuro);
      color: white;
      text-align: center;
      padding: 1.5rem;
      margin-top: 2rem;
    }

    a {
      color: var(--turquesa);
    }

    @media (max-width: 768px) {
      header {
        flex-direction: column;
        align-items: flex-start;
      }

      nav {
        margin-top: 1rem;
        flex-direction: column;
        align-items: flex-start;
      }

      .paquetes {
        flex-direction: column;
        align-items: center;
      }

      .hero h1 {
        font-size: 2.2rem;
      }
    }

  </style>
</head>
<body>

  <header>
    <h1>AIKlean Xpress</h1>
    <nav>
      <a href="#inicio">Inicio</a>
      <a href="#sobre">Sobre Nosotros</a>
      <a href="#paquetes">Paquetes</a>
      <a href="#contacto">Contacto</a>
      <a href="#login">Iniciar Sesión</a>
    </nav>
  </header>

  <section class="hero" id="inicio">
    <h1>Tu hogar limpio sin esfuerzo</h1>
    <p>Servicios confiables y rápidos con un toque profesional</p>
    <a href="#paquetes" class="btn">Explora nuestros paquetes</a>
  </section>

  <section class="section" id="sobre">
    <h2>Sobre Nosotros</h2>
    <p>Somos una empresa moderna de limpieza profesional dedicada a ofrecer servicios de calidad, puntualidad y confianza para mantener tu hogar impecable en todo momento.</p>
  </section>

  <section class="section" id="paquetes">
    <h2>Paquetes de Limpieza</h2>
    <div class="paquetes">
      <div class="card">
        <h3><i class="fas fa-broom"></i> Básico</h3>
        <p>Limpieza semanal de superficies, baños, cocina y pisos. Ideal para mantenimiento regular.</p>
      </div>
      <div class="card">
        <h3><i class="fas fa-sparkles"></i> Premium</h3>
        <p>Incluye limpieza profunda, ventanas, organización de espacios y productos ecológicos.</p>
      </div>
      <div class="card">
        <h3><i class="fas fa-bolt"></i> Express</h3>
        <p>Servicio rápido en 90 minutos para dejar todo listo antes de visitas o eventos especiales.</p>
      </div>
      <div class="card">
        <h3><i class="fas fa-bolt"></i> Empresarial</h3>
        <p>Servicio rápido en 90 minutos para dejar todo listo antes de visitas o eventos especiales.</p>
      </div>
    </div>
  </section>

  <section class="section" id="contacto">
    <h2>Contáctanos</h2>
    <p>📧 <a href="mailto:contacto@aikleanxpress.com">contacto@aikleanxpress.com</a><br>📞 (123) 456-7890</p>
  </section>

  <section class="section" id="login">
    <h2>Iniciar Sesión</h2>
    <p><a href="/login" class="btn">Accede a tu cuenta</a></p>
  </section>

  <footer>
    <p>&copy; 2025 AIKlean Xpress. Todos los derechos reservados.</p>
  </footer>

</body>
</html>
