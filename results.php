


<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pemilihan</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container results-container">
        <h2>Hasil Pemilihan</h2>
        <table>
            <thead>
                <tr>
                    <th>Kandidat</th>
                    <th>Jumlah Suara</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data akan diisi dengan PHP -->
                <?php
                include 'db.php';
                $sql = "SELECT candidate, COUNT(*) AS vote_count FROM votes GROUP BY candidate";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>{$row['candidate']}</td><td>{$row['vote_count']}</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
