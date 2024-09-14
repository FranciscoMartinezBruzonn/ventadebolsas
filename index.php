<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre de la Tienda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet"> <!-- Archivo de estilos opcional -->
</head>
<body>

<?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="hero text-center py-5">
    <div class="container">
        <h1 class="display-4">Bienvenido a Nuestra Tienda</h1>
        <p class="lead">Explora nuestros productos y encuentra lo que necesitas.</p>
        <a href="#categories" class="btn btn-orange btn-lg">Ver Categorías</a>
    </div>
</section>

<!-- Categories Section -->
<section id="categories" class="container py-5">
    <h2 class="text-center mb-4">Categorías de Productos</h2>
    <div class="row">
        <?php
        // Simulación de categorías
        $categories = [
            ['id' => 'category1', 'name' => 'Categoría 1', 'image' => 'category1.jpg', 'description' => 'Descripción breve de la categoría.'],
            ['id' => 'category2', 'name' => 'Categoría 2', 'image' => 'category2.jpg', 'description' => 'Descripción breve de la categoría.'],
            ['id' => 'category3', 'name' => 'Categoría 3', 'image' => 'category3.jpg', 'description' => 'Descripción breve de la categoría.'],
            ['id' => 'category4', 'name' => 'Categoría 4', 'image' => 'category4.jpg', 'description' => 'Descripción breve de la categoría.'],
            ['id' => 'category5', 'name' => 'Categoría 5', 'image' => 'category5.jpg', 'description' => 'Descripción breve de la categoría.'],
            ['id' => 'category6', 'name' => 'Categoría 6', 'image' => 'category6.jpg', 'description' => 'Descripción breve de la categoría.']
        ];

        foreach ($categories as $category) {
            echo '
            <div class="col-md-4 mb-4">
                <div class="card border-dark">
                    <img src="' . $category['image'] . '" class="card-img-top" alt="' . $category['name'] . '">
                    <div class="card-body bg-dark text-light">
                        <h5 class="card-title">' . $category['name'] . '</h5>
                        <p class="card-text">' . $category['description'] . '</p>
                        <a href="#' . $category['id'] . '" class="btn btn-orange">Ver Productos</a>
                    </div>
                </div>
            </div>';
        }
        ?>
    </div>
</section>

<!-- Category Products Sections -->
<?php
foreach ($categories as $category) {
    echo '
    <section id="' . $category['id'] . '" class="category-products py-5">
        <div class="container">
            <h2 class="text-center mb-4">' . $category['name'] . '</h2>
            <div class="row">';
    
    // Simulación de productos
    for ($i = 1; $i <= 10; $i++) {
        $productName = 'Producto ' . $i;
        $productDescription = 'Descripción del Producto ' . $i . '.';
        $productPrice = number_format(rand(10, 100), 2);
        
        echo '
        <div class="col-md-4 mb-4">
            <div class="card border-dark">
                <img src="product' . $i . '.jpg" class="card-img-top" alt="' . $productName . '">
                <div class="card-body bg-dark text-light">
                    <h5 class="card-title">' . $productName . '</h5>
                    <p class="card-text">' . $productDescription . '</p>
                    <p class="card-text"><strong>Precio:</strong> $' . $productPrice . '</p>
                    <a href="#" class="btn btn-orange">Comprar Ahora</a>
                </div>
            </div>
        </div>';
    }

    echo '
            </div>
        </div>
    </section>';
}
?>

<!-- Contact Form Section -->
<section id="contact" class="container py-5">
    <h2 class="text-center mb-4">Contáctanos</h2>
    <form>
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Mensaje</label>
            <textarea class="form-control" id="message" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-orange">Enviar</button>
    </form>
</section>

<?php include 'footer.php'; ?>

<!-- Smooth Scroll Script -->
<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>

<!-- Bootstrap Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
