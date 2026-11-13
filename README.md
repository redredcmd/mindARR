# Capitol University - AR Department Directory
### Lab Activity 1: CU Augmented Reality (AR) Department Directory

An interactive Augmented Reality (AR) web application that recognizes the official **Capitol University (CU)** seal as an image target. Upon scanning, the application displays Capitol University's **eight academic department logos** as interactive 3D AR objects. Selecting any department navigates to a detailed Department Information scene complete with official descriptions from the Capitol University website and an **interactive 3D animal mascot model**.

---

## 🌟 Key Features

1. **Official CU Logo Image Target Tracking**:
   - Integrates **MindAR.js** with **A-Frame** for fast, high-precision image target recognition through device camera/webcam.
   - Compiled target file: `targets.mind` (created from official `images/target.png`).

2. **Display of Eight Department Logos as Interactive AR Objects**:
   - All 8 official academic department logos appear in a radial crown around the CU emblem when the target is detected:
     1. **CCS** – College of Computer Studies (Mascot: Philippine Eagle)
     2. **COE** – College of Engineering (Mascot: Iron Tiger)
     3. **CBA** – College of Business and Accountancy (Mascot: Golden Bull)
     4. **COC** – College of Criminology (Mascot: Vigilant Wolf)
     5. **CED** – College of Education (Mascot: Wise Owl)
     6. **CME** – College of Maritime Education (Mascot: Oceanic Shark)
     7. **CAS** – College of Arts and Sciences (Mascot: Noble Lion)
     8. **CHS** – College of Health Sciences (Mascot: Healing Stallion)
   - Interactive via **3D raycasting clicks/taps** in AR or via the convenient on-screen quick drawer.

3. **Department Information Scene**:
   - Official department seal.
   - Complete formal college title.
   - Accreditations (CHED Center of Excellence / Center of Development, PACUCOA rankings).
   - Brief authentic descriptions gathered from the official Capitol University website.
   - Degree programs offered.
   - **Interactive 3D Animal Mascot** rendered with Google `<model-viewer>` (Three.js engine) supporting 360° orbit rotation, zoom, auto-rotation, and lighting.

4. **Seamless Navigation & Back Button**:
   - Prominent **"← Back to AR Scanner"** button returns instantly to the AR camera screen without reloading the page or resetting the camera stream.
   - Quick department switcher in the modal allows browsing between colleges seamlessly.

5. **Beginner-Friendly Architecture**:
   - Clean, modular HTML, vanilla CSS, and JavaScript.
   - Includes PHP API backend (`departments.php`) and MySQL database schema (`database.sql`).
   - Built-in **"🧪 Test Mode"** toggle and **"🎯 Target Help"** modal to preview AR objects and 3D models easily on desktop or mobile.

---

## 📂 Project Structure

```text
app/
├── images/
│   ├── target.png              # Official Capitol University AR Image Target
│   ├── arts_and_sciences.png   # College of Arts and Sciences Logo
│   ├── bsba.png                # College of Business and Accountancy Logo
│   ├── ccs.png                 # College of Computer Studies Logo
│   ├── crim.png                # College of Criminology Logo
│   ├── educ.png                # College of Education Logo
│   ├── engr.png                # College of Engineering Logo
│   ├── health.png              # College of Health Sciences Logo
│   └── maritime.png            # College of Maritime Education Logo
├── models/
│   ├── eagle.glb               # 3D Philippine Eagle (CCS Mascot)
│   ├── tiger.glb               # 3D Iron Tiger (COE Mascot)
│   ├── bull.glb                # 3D Golden Bull (CBA Mascot)
│   ├── wolf.glb                # 3D Vigilant Wolf (COC Mascot)
│   ├── owl.glb                 # 3D Wise Owl (CED Mascot)
│   ├── shark.glb               # 3D Oceanic Shark (CME Mascot)
│   ├── lion.glb                # 3D Noble Lion (CAS Mascot)
│   └── horse.glb               # 3D Healing Stallion (CHS Mascot)
├── database.sql                # MySQL Database Schema & Seed Data
├── departments.php             # PHP Backend API
├── index.html                  # Main WebAR Application (HTML)
├── index.php                   # Main WebAR Application (PHP Entry)
├── targets.mind                # Compiled MindAR image tracking target
└── README.md                   # Project Documentation
```

---

## 🚀 How to Run the Application

### Option A: Using XAMPP (Recommended)
1. Start **Apache** in the **XAMPP Control Panel**.
2. Open your web browser and navigate to:
   ```text
   http://localhost/app/
   ```
   *(Or `http://localhost/app/index.php`)*
3. Allow camera permissions when prompted.

### Option B: Optional MySQL Database Setup
1. Start **MySQL** in XAMPP.
2. Open **phpMyAdmin** (`http://localhost/phpmyadmin/`).
3. Click **Import** and select `database.sql`.
4. In `departments.php`, change line 13 to `$enable_mysql = true;`.

---

## 📱 How to Test AR Scanning

1. Point your device camera or webcam at the physical **Capitol University Logo** (or open `images/target.png` on another screen/phone).
2. You can also click the **"🎯 Target Help"** button at the top to display the official CU target logo on screen.
3. Once detected, the status pill turns green: **"CU Logo Recognized! Tap any department logo"**, and the eight department logos appear in AR orbiting the seal.
4. Click or tap any department logo in AR or in the bottom drawer to open its Information Scene and view the 3D animal mascot.
5. Click **"← Back to AR Scanner"** to return to scanning.
6. *(Tip: Click **"🧪 Test Mode"** to instantly test the 3D AR layout without a physical printout).*

---

## 📦 Submission Files
- **ZIP File**: `LastName__ARActivity1.zip`
- **PDF Screenshots**: `LastName__ARActivity1.pdf`
  - CU logo recognized
  - 8 department logos displayed in AR
  - Selected department information (name & description)
  - 3D animal mascot
  - Working Back button navigation
