<!DOCTYPE html>
<html lang="nl">

<head>
    <?php require __DIR__ . '/../templates/head.php'; ?>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Zorgt ervoor dat de body minstens de hoogte van het venster heeft */
        }

        .content {
            flex: 1; /* Zorgt ervoor dat deze sectie de beschikbare ruimte opvult */
            margin-top: 6rem; /* Zorgt voor ruimte boven de inhoud */
            margin-bottom: 4rem; /* Zorgt voor ruimte onder de inhoud */
            width: 90%; /* Maak deze breedte aanpasbaar */
            padding: 1.5rem; /* Padding rondom de inhoud */
            background-color: white; /* Achtergrondkleur voor de inhoud */
            margin-left: auto;
            margin-right: auto; /* Centreert de inhoud */
        }

        .sidenav {
            position: fixed;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            display: flex;
            justify-content: space-around; /* Spreidt de knoppen over de breedte */
            width: 100%; /* Laat de sidenav de volledige breedte innemen */
            padding: 0 50px; /* Voeg padding toe aan de zijkanten */
        }

        .level-button {
            width: 80px; /* Breder dan voorheen */
            height: 40px; /* Iets lager dan voorheen */
            border-radius: 20px; /* Afgeronde hoeken */
            background-color: #007bff;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            border: none;
            font-size: 18px;
        }

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .overlay-content {
            background: white;
            padding: 20px;
            border-radius: 8px;
            max-width: 400px;
            text-align: center;
        }
    </style>
</head>

<body>
    
    <?php require __DIR__ . '/../templates/menu.php'; ?>

    <div class="content">
        <div class="sidenav">
            <?php for ($i = 1; $i <= 7; $i++): ?>
                <button class="level-button" onclick="showOverlay(<?php echo $i; ?>)">
                    <?php echo $i; ?>
                </button>
            <?php endfor; ?>
        </div>

        <div class="overlay" id="overlay">
            <div class="overlay-content">
                <p id="overlay-text"></p>
                <button onclick="closeOverlay()">Sluiten</button>
            </div>
        </div>
    </div>

    <?php require __DIR__ . '/../templates/footer.php'; ?>

    <script>
        function showOverlay(level) {
            const overlay = document.getElementById('overlay');
            const overlayText = document.getElementById('overlay-text');
            overlayText.textContent = 'Je hebt level ' + level + ' geselecteerd.';
            overlay.style.display = 'flex';
        }

        function closeOverlay() {
            const overlay = document.getElementById('overlay');
            overlay.style.display = 'none';
        }
    </script>

</body>

</html>
