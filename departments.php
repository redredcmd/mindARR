<?php
/**
 * Capitol University AR Department Directory
 * Backend PHP API Endpoint
 * 
 * Set $enable_mysql = true if you have started MySQL in XAMPP
 * and imported database.sql via phpMyAdmin.
 * Otherwise, the built-in dataset is served instantly.
 */

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

$enable_mysql = false; // Change to true to load from MySQL database

// Master Department Directory Dataset
$departments = [
    'ccs' => [
        'id' => 'ccs',
        'code' => 'CCS',
        'name' => 'College of Computer Studies',
        'mascot' => 'Philippine Eagle',
        'mascot_title' => 'The Soaring Cyber Eagle',
        'logo' => 'images/ccs.png',
        'model' => 'models/eagle.glb',
        'accreditation' => 'CHED Center of Development (COD) in IT Education',
        'description' => 'The College of Computer Studies at Capitol University is recognized by the Commission on Higher Education (CHED) as a Center of Development in Information Technology. It prepares students for globally competitive IT careers through cutting-edge curriculum in software engineering, mobile development, intelligent systems, and networking.',
        'programs' => 'BS in Information Technology (BSIT), BS in Computer Science (BSCS)'
    ],
    'engr' => [
        'id' => 'engr',
        'code' => 'COE',
        'name' => 'College of Engineering',
        'mascot' => 'Iron Tiger',
        'mascot_title' => 'The Mighty Engineering Tiger',
        'logo' => 'images/engr.png',
        'model' => 'models/tiger.glb',
        'accreditation' => 'CHED Center of Development (COD) in Civil Engineering | PACUCOA Level III',
        'description' => 'The College of Engineering delivers premier engineering education recognized for technical excellence and high licensure examination performance. Students receive comprehensive laboratory training, structural design competencies, and technological problem-solving skills across diverse engineering disciplines.',
        'programs' => 'BS Civil Engineering, BS Mechanical Engineering, BS Electrical Engineering, BS Electronics Engineering'
    ],
    'bsba' => [
        'id' => 'bsba',
        'code' => 'CBA',
        'name' => 'College of Business and Accountancy',
        'mascot' => 'Golden Bull',
        'mascot_title' => 'The Thriving Bull of Commerce',
        'logo' => 'images/bsba.png',
        'model' => 'models/bull.glb',
        'accreditation' => 'PACUCOA Accredited | Top CPA Board Performance',
        'description' => 'The College of Business and Accountancy develops ethical, forward-thinking business leaders, entrepreneurs, and certified public accountants. The college blends analytical financial rigor with modern marketing strategies and ethical managerial leadership.',
        'programs' => 'BS in Accountancy (BSA), BS in Business Administration (Financial, Marketing, and Human Resource Management)'
    ],
    'crim' => [
        'id' => 'crim',
        'code' => 'COC',
        'name' => 'College of Criminology',
        'mascot' => 'Vigilant Wolf',
        'mascot_title' => 'The Guardian Wolf of Justice',
        'logo' => 'images/crim.png',
        'model' => 'models/wolf.glb',
        'accreditation' => 'CHED Center of Development (COD) in Criminology | PACUCOA Accredited',
        'description' => 'The College of Criminology provides rigorous academic training and tactical discipline for future public safety officers and law enforcement agents. Equipped with state-of-the-art ballistics, dactyloscopy, and criminalistics laboratories, the college upholds values of integrity, law enforcement, and human rights.',
        'programs' => 'Bachelor of Science in Criminology (BSCrim)'
    ],
    'educ' => [
        'id' => 'educ',
        'code' => 'CED',
        'name' => 'College of Education',
        'mascot' => 'Wise Owl',
        'mascot_title' => 'The Enlightened Owl of Wisdom',
        'logo' => 'images/educ.png',
        'model' => 'models/owl.glb',
        'accreditation' => 'CHED Center of Excellence (COE) for Teacher Education | PACUCOA Level IV',
        'description' => 'The College of Education is a distinguished Center of Excellence recognized across Northern Mindanao for preparing compassionate, innovative, and pedagogical leaders. The college shapes dynamic educators equipped with modern teaching techniques and digital learning resources.',
        'programs' => 'Bachelor of Elementary Education (BEEd), Bachelor of Secondary Education (BSEd) with various majors'
    ],
    'maritime' => [
        'id' => 'maritime',
        'code' => 'CME',
        'name' => 'College of Maritime Education',
        'mascot' => 'Oceanic Shark',
        'mascot_title' => 'The Navigating Shark of the Seas',
        'logo' => 'images/maritime.png',
        'model' => 'models/shark.glb',
        'accreditation' => 'CHED & MARINA STCW Compliant | DNV Certified',
        'description' => 'The College of Maritime Education prepares disciplined maritime officers in strict compliance with MARINA and international STCW standards. Featuring world-class navigational bridge and engine room simulators, students undergo rigorous practical training for careers on global merchant vessels.',
        'programs' => 'BS Marine Transportation (BSMT), BS Marine Engineering (BSMarE)'
    ],
    'arts_and_sciences' => [
        'id' => 'arts_and_sciences',
        'code' => 'CAS',
        'name' => 'College of Arts and Sciences',
        'mascot' => 'Noble Lion',
        'mascot_title' => 'The Valiant Lion of Arts & Sciences',
        'logo' => 'images/arts_and_sciences.png',
        'model' => 'models/lion.glb',
        'accreditation' => 'PACUCOA Level III Accredited | Foundation of Holistic Learning',
        'description' => 'The College of Arts and Sciences serves as the intellectual cornerstone of Capitol University. It fosters critical inquiry, ethical responsibility, and effective communication through interdisciplinary humanities, social sciences, and behavioral research programs.',
        'programs' => 'BA in Communication, BA in Political Science, BS in Psychology'
    ],
    'health' => [
        'id' => 'health',
        'code' => 'CHS',
        'name' => 'College of Health Sciences',
        'mascot' => 'Healing Stallion',
        'mascot_title' => 'The Resilient Stallion of Healing',
        'logo' => 'images/health.png',
        'model' => 'models/horse.glb',
        'accreditation' => 'PACUCOA Accredited | Outstanding Nursing Licensure Record',
        'description' => 'The College of Health Sciences is renowned for academic excellence in healthcare and patient-centered nursing care. With intensive clinical rotations in hospital and community environments, the college develops competent, compassionate health professionals who excel in local and international healthcare systems.',
        'programs' => 'Bachelor of Science in Nursing (BSN)'
    ]
];

// Optional MySQL loading
if ($enable_mysql) {
    $db_host = '127.0.0.1';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'cu_ar_directory';
    
    $conn = @new mysqli($db_host, $db_user, $db_pass, $db_name);
    if (!$conn->connect_error) {
        $result = $conn->query("SELECT * FROM departments");
        if ($result && $result->num_rows > 0) {
            $db_data = [];
            while ($row = $result->fetch_assoc()) {
                $db_data[$row['id']] = $row;
            }
            $departments = $db_data;
        }
        $conn->close();
    }
}

// Check single department query
$dept_id = isset($_GET['id']) ? trim($_GET['id']) : '';
if ($dept_id !== '') {
    if (isset($departments[$dept_id])) {
        echo json_encode([
            'status' => 'success',
            'department' => $departments[$dept_id]
        ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Department not found'
        ], JSON_PRETTY_PRINT);
    }
    exit;
}

// Return all departments
echo json_encode([
    'status' => 'success',
    'total' => count($departments),
    'departments' => array_values($departments)
], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
