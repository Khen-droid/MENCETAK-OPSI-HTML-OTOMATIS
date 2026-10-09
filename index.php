<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilihan Program & Semester</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        .form-card { border: 1px solid #ccc; padding: 20px; border-radius: 8px; max-width: 400px; }
        .form-group { margin-bottom: 15px; }
        label { font-weight: bold; display: block; margin-bottom: 5px; }
        select, button { width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc; }
        button { background-color: #007bff; color: white; font-weight: bold; cursor: pointer; border: none; margin-top: 10px; }
        button:hover { background-color: #0056b3; }
        .result-box { margin-top: 20px; padding: 15px; background-color: #e9ecef; border-radius: 6px; }
    </style>
</head>
<body>

    <div class="form-card">
        <h2>Form Pilihan Mahasiswa</h2>

        <?php
        // Data program dalam Array (Level 4: Fleksibel, tinggal tambah isi array)
        $program = [
            "PHP Dasar",
            "PHP Lanjutan",
            "Web Programming",
            "Laravel Dasar",
            "React JS Dasar"
        ];
        ?>

        <form method="POST" action="">
            <div class="form-group">
                <label for="semester">Semester:</label>
                <select name="semester" id="semester" required>
                    <option value="">-- Pilih Semester --</option>
                    <?php 
                    // Level 3: Perulangan for untuk cetak opsi 1-14
                    for ($i = 1; $i <= 14; $i++) { ?>
                        <option value="<?php echo $i; ?>">Semester <?php echo $i; ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="program">Program / Kursus:</label>
                <select name="program" id="program" required>
                    <option value="">-- Pilih Program --</option>
                    <?php 
                    // Perulangan foreach untuk cetak data dari Array
                    foreach ($program as $p) { ?>
                        <option value="<?php echo htmlspecialchars($p); ?>">
                            <?php echo htmlspecialchars($p); ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <button type="submit" name="submit">Simpan Pilihan</button>
        </form>

        <?php
        // Pemrosesan Data POST di halaman yang sama
        if (isset($_POST['submit'])) {
            $pilihan_semester = $_POST['semester'];
            $pilihan_program  = $_POST['program'];

            echo '<div class="result-box">';
            echo '<h3>Hasil Pilihan:</h3>';
            echo '<p><strong>Semester:</strong> ' . htmlspecialchars($pilihan_semester) . '</p>';
            echo '<p><strong>Program:</strong> ' . htmlspecialchars($pilihan_program) . '</p>';
            echo '</div>';
        }
        ?>
    </div>

</body>
</html>