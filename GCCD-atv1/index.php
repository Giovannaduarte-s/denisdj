<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smartphones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class= "container mt-3 mb-3">
    <h1 class="display-5 text-center"> Conserto de celulares </h1>

    <form action="smartphones.php" method="post" class="p-5">
        <div class="mb-3">
            <label for="celularMarca" class="form-label">Marca do smartphone:</label>
            <input type="text" class="form-control" id="celularMarca" name="celularMarca" placeholder="Digite a marca do smartphone" required>
        </div>

        <div class="mb-3">
            <label for="celularModelo" class="form-label">Modelo do smartphone:</label>
            <input type="text" class="form-control" id="celularModelo" name="celularModelo" placeholder="Digite a modelo do smartphone" required>
        </div>

        <div class="mb-3">
            <label for="celularEmail" class="form-label">Email do proprietário:</label>
            <input type="email" class="form-control" id="celularEmail" name="celularEmail" placeholder="example@example.com" required>
        </div>

        <div class="mb-3">
            <label for="celularNumber" class="form-label">Telefone:</label>
            <input type="tel" class="form-control" id="celularNumber" name="celularNumber" placeholder="(99) 9 9999-9999" required>
        </div>

        <div class="mb-3">
            <label for="select" class="form-label">Método de pagamento:</label>
            <select class="form-control" aria-label="Default select exemple" id="select" name="celular" required>
                <option selected>Métodos de pagamento:</option>
                <option value="Pix">Pix</option>
                <option value="Dinheiro">Dinheiro</option>
                <option value="Cartão">Cartão</option>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="celularTecnico">
            <label class="form-check-label" for="celularTecnico">
              Mateus
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="celularTecnico" checked>
            <label class="form-check-label" for="celularTecnico">
              Dênis
            </label>

        </div>

        <div class="mb-3">
            <label for="celularProblema" class="form-label">Qual o problema?</label>
            <textarea class="form-control" id="celularProblema" name="celularProblema" rows="3"></textarea>
        </div>

        <div class="form-check">
         <input class="form-check-input" type="checkbox" value="tela" id="celularTroca">
         <label class="form-check-label" for="celularTroca">
            tela
         </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="bateria" id="celularTroca" checked>
            <label class="form-check-label" for="celularTroca">
              bateria
            </label>
        </div>

        <button type="button" class="btn btn-dark">Dark</button>
    
 </form> 
</div>           
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>