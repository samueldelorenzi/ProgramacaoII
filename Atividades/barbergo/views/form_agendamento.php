<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1920x1080, initial-scale=1.0">
    <title>BarberGO</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <div class="title">
        <h1>BarberGO</h1>
        <h3>Agendamento</h3>
    </div>
    <div class="container">
        <form>
            <label for="nome">Qual seu nome?</label>
            <input type="text" id="nome" placeholder="Nome">

            <label for="servico">Qual serviço está procurando?</label>
            <select id="servico">
                <option value="corte">Corte</option>
                <option value="barba">Barba</option>
                <option value="corte e barba">Corte e Barba</option>
            </select>

            <label for="data">Qual melhor dia para atendê-lo?</label>
            <input type="date" id="data">

            <label for="data">Qual melhor horário para atendê-lo?</label>
            <input type="time" id="data">

            <button>Agendar</button>
        </form>
    </div>
</body>
</html>