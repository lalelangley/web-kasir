<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinterest-like Layout</title>
    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f3f3f3;
        }
        .grid-item {
            margin-bottom: 15px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        .grid-item img {
            width: 100%;
            height: auto;
            display: block;
        }
        .grid-container {
            column-count: 4; /* Jumlah kolom untuk tampilan desktop */
            column-gap: 15px;
        }
        @media (max-width: 992px) {
            .grid-container {
                column-count: 2; /* Untuk tablet */
            }
        }
        @media (max-width: 576px) {
            .grid-container {
                column-count: 1; /* Untuk smartphone */
            }
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <header class="text-center mb-4">
            <h1>Pinterest-like Layout</h1>
            <p>Explore the gallery below!</p>
        </header>
        <div class="grid-container">
            <!-- Contoh item -->
            <div class="grid-item">
                <img src="https://via.placeholder.com/300x400" alt="Image 1">
                <div class="p-3">
                    <h5>Title 1</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="grid-item">
                <img src="https://via.placeholder.com/300x300" alt="Image 2">
                <div class="p-3">
                    <h5>Title 2</h5>
                    <p>Praesent vel nisl vitae lectus tincidunt dapibus.</p>
                </div>
            </div>
            <div class="grid-item">
                <img src="https://via.placeholder.com/300x500" alt="Image 3">
                <div class="p-3">
                    <h5>Title 3</h5>
                    <p>Suspendisse potenti. Integer luctus lacinia dolor.</p>
                </div>
            </div>
            <!-- Tambahkan lebih banyak item -->
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
