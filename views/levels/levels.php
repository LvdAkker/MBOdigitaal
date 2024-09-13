<?php
// Sample data for testing. Replace this with dynamic data (e.g., from a database)
$educations = [
    ["creboNumber" => "12345", "name" => "Software Development", "level" => 4],
    ["creboNumber" => "67890", "name" => "Web Development", "level" => 3]
];
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <?php require __DIR__ . '/../templates/head.php'; ?>
</head>

<body>
    
    <?php require __DIR__ . '/../templates/menu.php'; ?>

    <div class="mt-6 mb-16 w-11/12 p-6 space-y-8 sm:p-8 bg-white mx-auto">

        <h2 class="text-2xl font-bold">Levels en Info</h2>
        <p class="my-4 font-bold text-gray-700">In het onderstaande schema kun jij jou benodigdheden voor de volgende levels bekijken,
            dit schema kan jou met veel dingen helpen, denk aan: Het makkelijk bijhouden van progressie door de opleiding, het op orde houden van je bewijslasten, 
            en nog veel meer.</p>

        <h3 class="text-xl font-bold">Overzicht van onze opleidingen</h3>

       

        <!-- Embed the Google Spreadsheet iframe below the table -->
        <div class="mt-8">
        <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTMVnelKzWq8NDVzJmr0dOVcNBwv0ocRhC6WwXUFWkLaOyEPFXJWhS6U3ZN2sSUVYbWc-NwApgm7vdZ/pubhtml?widget=true&amp;headers=false&rm=minimal" 
            width="100%" height="600" frameborder="0" scrolling="auto"></iframe>
        </div>

        <?php require __DIR__ . '/../templates/footer.php'; ?>
    </div>

</body>

</html>
