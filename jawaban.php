<?php
/**
 * Tugas Struktur Data TA 2025/2026
 * Nama: [Nama Kamu]
 * Institusi: PeTIK Jombang
 */
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Struktur Data | PeTIK Jombang</title>
    <style>
        :root {
            --primary: #2c3e50;
            --accent: #3498db;
            --card: rgba(255, 255, 255, 0.95);
            --text: #333;
        }

        /* Animasi Background Gradient */
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            margin: 0;
            padding: 20px;
            min-height: 100vh;
            background: linear-gradient(-45deg, #1e3c72, #2a5298, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
            color: var(--text);
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .container { max-width: 900px; margin: auto; }
        
        /* Header & Logo Section */
        header { 
            text-align: center; 
            color: white; 
            padding: 20px 0;
            margin-bottom: 40px;
            background: rgba(0, 0, 0, 0.2);
            border-radius: 20px;
            backdrop-filter: blur(10px);
        }

        .logo-placeholder {
            width: 100px;
            height: 100px;
            background: white;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
            font-weight: bold;
            color: #2a5298;
            font-size: 1.2rem;
        }

        .card { 
            background: var(--card); 
            padding: 25px; 
            border-radius: 15px; 
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            margin-bottom: 25px;
            transition: all 0.3s ease;
            border-left: 6px solid var(--accent);
        }

        .card:hover { transform: translateY(-5px); }

        h2 { color: var(--primary); margin-top: 0; display: flex; justify-content: space-between; align-items: center; font-size: 1.3rem;}
        
        pre { 
            background: #282c34; 
            color: #61afef; 
            padding: 15px; 
            border-radius: 10px; 
            overflow-x: auto;
            font-size: 0.9rem;
        }

        .badge { background: var(--accent); color: white; padding: 5px 15px; border-radius: 50px; font-size: 0.7rem; }

        table { width: 100%; border-collapse: collapse; margin-top: 10px; border-radius: 8px; overflow: hidden; }
        table th { background-color: #3498db; color: white; padding: 12px; text-align: left; }
        table td { padding: 12px; border: 1px solid #eee; }
    </style>
</head>
<body>

<div class="container">
    <header>
        <div class="logo-placeholder">PeTIK</div>
        <h1 style="margin: 0; letter-spacing: 2px;">STRUKTUR DATA</h1>
        <p style="margin: 5px 0; font-weight: 300;">Pesantren Teknologi Informasi dan Komunikasi (PeTIK) Jombang</p>
        <p style="font-size: 0.9rem; opacity: 0.8;">Tahun Ajaran 2025/2026</p>
    </header>

    <div class="card">
        <h2>1. ARRAY <span class="badge">Static</span></h2>
        <?php
        $angka = [10, 20, 30, 40, 50];
        echo "<p>Data Angka: <b>" . implode(", ", $angka) . "</b></p>";
        echo "<p>Total: " . array_sum($angka) . " | Rata-rata: " . (array_sum($angka)/count($angka)) . "</p>";
        ?>
    </div>

    <div class="card">
        <h2>2. SINGLE LINKED LIST <span class="badge">Dynamic</span></h2>
        <pre><?php
        class Node {
            public $data, $next;
            public function __construct($val) { $this->data = $val; $this->next = null; }
        }
        $head = new Node(100); $head->next = new Node(200); $head->next->next = new Node(300);
        $t = $head;
        while($t) { echo "[$t->data] " . ($t->next ? "➜ " : "➜ NULL"); $t = $t->next; }
        ?></pre>
    </div>

    <div class="card">
        <h2>3 & 4. STACK & QUEUE</h2>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <div>
                <strong>Stack (LIFO):</strong>
                <pre><?php $s = [10, 20, 30]; array_pop($s); print_r($s); ?></pre>
            </div>
            <div>
                <strong>Queue (FIFO):</strong>
                <pre><?php $q = ["A", "B", "C"]; array_shift($q); print_r($q); ?></pre>
            </div>
        </div>
    </div>

    <div class="card">
        <h2>5. BINARY TREE <span class="badge">Hierarchy</span></h2>
        <pre style="text-align: center;"><?php
        class BNode { public $d, $l, $r; public function __construct($v){$this->d=$v;} }
        $root = new BNode("Root"); $root->l = new BNode("Left"); $root->r = new BNode("Right");
        echo "      ({$root->d})\n      /    \\\n   ({$root->l->d})  ({$root->r->d})";
        ?></pre>
    </div>

    <div class="card">
        <h2>6. GRAPH <span class="badge">Relation</span></h2>
        <pre><?php
        $g = ["A"=>["B","C"], "B"=>["A"], "C"=>["A"]];
        foreach($g as $n => $e) { echo "Node $n terhubung ke ➜ " . implode(", ", $e) . "\n"; }
        ?></pre>
    </div>

    <div class="card">
        <h2>7. HASH TABLE <span class="badge">Mahasantri</span></h2>
        <table>
            <tr><th>NIM</th><th>Nama Mahasantri</th></tr>
            <?php
            $mhs = ["2025001"=>"Budi Santoso", "2025002"=>"Siti Aminah", "2025003"=>"Ahmad Fauzi"];
            foreach($mhs as $nim => $nama) echo "<tr><td>$nim</td><td>$nama</td></tr>";
            ?>
        </table>
    </div>

    <footer style="text-align: center; color: white; padding: 20px; opacity: 0.7;">
        &copy; 2026 PeTIK Jombang - Sistem Informasi Struktur Data
    </footer>
</div>

</body>
</html>