<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/audio/src/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Gravador de Áudio</title>
   
</head>

<body class="light-mode">

<div class="toggle-button">
    <button id="toggle-button" class="btn btn-primary">
        <i class="fas fa-moon"></i> Modo Escuro
    </button>
</div>

<div class="container text-center mt-4">
    <div>
        <img src="src/img/logo.png" alt="logo" class="mb-4">
    </div>
    <h2>Gravador de Áudio</h2>
</div>

<div class="container mt-4" style="color: black;">
    <div class="row">
        <?php for ($i = 0; $i < 8; $i++): ?>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Canal <?php echo $i + 1; ?></h3>
                        <select id="inputSelect<?php echo $i; ?>" class="form-control mb-2" onchange="updateInputDevice(<?php echo $i; ?>)">
                            <option value="">Selecionar Dispositivo</option>
                        </select>
                        <button id="startButton<?php echo $i; ?>" class="btn btn-primary mb-2" onclick="startRecording(<?php echo $i; ?>)">
                            <i class="fas fa-microphone"></i> Iniciar Gravação
                        </button>
                        <button id="stopButton<?php echo $i; ?>" class="btn btn-danger mb-2" onclick="stopRecording(<?php echo $i; ?>)">
                            <i class="fas fa-stop"></i> Parar Gravação
                        </button>
                        <button class="btn btn-secondary mb-2" onclick="toggleMute(<?php echo $i; ?>)">
                            <i class="fas fa-volume-mute"></i> Silenciar/Desmutar
                        </button>
                        <input type="range" id="volumeControl<?php echo $i; ?>" class="form-control-range mb-2" min="0" max="1" step="0.01" value="0.5" onchange="setVolume(<?php echo $i; ?>, this.value)">
                        <label for="volumeControl<?php echo $i; ?>"> Volume</label>
                        <audio controls id="audio<?php echo $i + 1; ?>" class="w-100"></audio>
                        <button id="downloadButton<?php echo $i; ?>" class="btn btn-success mb-2" style="display:none;" onclick="downloadRecording(<?php echo $i; ?>)">
                            <i class="fas fa-download"></i> Baixar Gravação
                        </button>
                        <button id="uploadButton<?php echo $i; ?>" class="btn btn-info mb-2" style="display:none;" onclick="uploadRecording(<?php echo $i; ?>)">
                            <i class="fas fa-upload"></i> Upload Gravação
                        </button>

                        <h5>Equalizador</h5>
                        <label for="bassControl<?php echo $i; ?>">Graves</label>
                        <input type="range" id="bassControl<?php echo $i; ?>" class="form-control-range mb-2" min="-24" max="24" step="1" value="0" onchange="setBass(<?php echo $i; ?>, this.value)">
                        <label for="midControl<?php echo $i; ?>">Médios</label>
                        <input type="range" id="midControl<?php echo $i; ?>" class="form-control-range mb-2" min="-24" max="24" step="1" value="0" onchange="setMid(<?php echo $i; ?>, this.value)">
                        <label for="trebleControl<?php echo $i; ?>">Agudos</label>
                        <input type="range" id="trebleControl<?php echo $i; ?>" class="form-control-range mb-2" min="-24" max="24" step="1" value="0" onchange="setTreble(<?php echo $i; ?>, this.value)">
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="/audio/src/script/script.js"></script>

<footer class="footer text-center">
    <div class="container">
        &copy; Desenvolvido por Helton Machado.
    </div>
</footer>

</body>
</html>
