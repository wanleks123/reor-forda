<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css"> <!-- Link ke file CSS kustom jika ada -->
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Pilih Kandidat</h2>
                        <form action="process_vote.php" method="post">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="avril" name="candidate" value="Avril" required>
                                <label class="form-check-label" for="avril">Avril</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="aival" name="candidate" value="Aival" required>
                                <label class="form-check-label" for="aival">Aival</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="wahyu" name="candidate" value="Wahyu" required>
                                <label class="form-check-label" for="wahyu">Wahyu</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="ridwan" name="candidate" value="Ridwan" required>
                                <label class="form-check-label" for="ridwan">Ridwan</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-4">Kirim Suara</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
