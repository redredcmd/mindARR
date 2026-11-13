<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <title>Capitol University - AR Department Directory</title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- A-Frame (3D and VR Framework) -->
  <script src="https://aframe.io/releases/1.5.0/aframe.min.js"></script>

  <!-- MindAR for Image Recognition WebAR -->
  <script src="https://cdn.jsdelivr.net/npm/mind-ar@1.2.5/dist/mindar-image-aframe.prod.js"></script>

  <!-- Google Model-Viewer for Interactive 3D Animal Mascot Rendering -->
  <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.4.0/model-viewer.min.js"></script>

  <style>
    :root {
      --cu-maroon: #7B1113;
      --cu-maroon-dark: #580B0D;
      --cu-gold: #F5B700;
      --cu-gold-hover: #E0A500;
      --cu-dark: #0F172A;
      --cu-card-bg: rgba(255, 255, 255, 0.96);
      --cu-text: #1E293B;
      --cu-text-muted: #64748B;
      --radius-sm: 8px;
      --radius-md: 14px;
      --radius-lg: 20px;
      --shadow-lg: 0 12px 36px rgba(0, 0, 0, 0.25);
      --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
    }

    body, html {
      width: 100%;
      height: 100%;
      overflow: hidden;
      background-color: #000;
      color: var(--cu-text);
      -webkit-tap-highlight-color: transparent;
    }

    /* ==============================================================
       AR SCENE (FULLSCREEN)
       ============================================================== */
    a-scene {
      width: 100vw;
      height: 100vh;
      position: absolute;
      top: 0;
      left: 0;
      z-index: 1;
    }

    /* MindAR default UI style adjustments */
    .mindar-ui-overlay {
      z-index: 5 !important;
    }
    .mindar-ui-loading .loader {
      border-top-color: var(--cu-gold) !important;
    }
    .mindar-ui-scanning .scanning {
      border-color: var(--cu-gold) !important;
    }

    /* ==============================================================
       UI OVERLAY (LAYER OVER AR CAMERA)
       ============================================================== */
    #ar-ui-container {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 10;
      pointer-events: none; /* Allows click-through to A-Frame 3D objects */
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      padding: 16px;
    }

    /* Top Navigation / Brand Header */
    .top-bar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 10px;
      pointer-events: auto;
      flex-wrap: wrap;
    }

    .brand-badge {
      display: flex;
      align-items: center;
      gap: 10px;
      background: rgba(123, 17, 19, 0.92);
      backdrop-filter: blur(8px);
      padding: 8px 16px;
      border-radius: 50px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
      border: 1px solid rgba(245, 183, 0, 0.4);
    }

    .brand-logo {
      width: 34px;
      height: 34px;
      object-fit: contain;
      border-radius: 50%;
      background: #fff;
      padding: 2px;
    }

    .brand-text h1 {
      font-family: 'Cinzel', serif;
      font-size: 0.95rem;
      font-weight: 700;
      color: #fff;
      letter-spacing: 0.5px;
      line-height: 1.1;
    }

    .brand-text p {
      font-size: 0.72rem;
      color: var(--cu-gold);
      font-weight: 600;
      letter-spacing: 0.5px;
      text-transform: uppercase;
    }

    .top-actions {
      display: flex;
      gap: 8px;
    }

    .action-btn {
      background: rgba(15, 23, 42, 0.85);
      backdrop-filter: blur(8px);
      color: #fff;
      border: 1px solid rgba(255, 255, 255, 0.2);
      padding: 8px 14px;
      border-radius: 50px;
      font-size: 0.78rem;
      font-weight: 600;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 6px;
      transition: var(--transition);
      box-shadow: 0 4px 12px rgba(0,0,0,0.25);
    }

    .action-btn:hover {
      background: var(--cu-maroon);
      border-color: var(--cu-gold);
      color: #fff;
      transform: translateY(-1px);
    }

    /* Target Detection Status Pill */
    .status-banner-wrap {
      display: flex;
      justify-content: center;
      margin-top: 8px;
      pointer-events: auto;
    }

    .status-pill {
      background: rgba(15, 23, 42, 0.88);
      backdrop-filter: blur(10px);
      padding: 8px 18px;
      border-radius: 30px;
      display: flex;
      align-items: center;
      gap: 10px;
      color: #fff;
      font-size: 0.82rem;
      font-weight: 500;
      box-shadow: 0 4px 16px rgba(0,0,0,0.3);
      border: 1px solid rgba(255, 255, 255, 0.15);
      transition: var(--transition);
    }

    .status-dot {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background: #f59e0b;
      box-shadow: 0 0 10px #f59e0b;
      animation: pulse 1.8s infinite;
    }

    .status-pill.detected {
      border-color: #10b981;
      background: rgba(6, 78, 59, 0.9);
    }
    .status-pill.detected .status-dot {
      background: #10b981;
      box-shadow: 0 0 10px #10b981;
    }

    @keyframes pulse {
      0%, 100% { opacity: 1; transform: scale(1); }
      50% { opacity: 0.5; transform: scale(0.85); }
    }

    /* Bottom Quick Selector Drawer */
    .bottom-bar {
      pointer-events: auto;
      display: flex;
      flex-direction: column;
      gap: 8px;
      max-width: 900px;
      margin: 0 auto;
      width: 100%;
    }

    .drawer-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 4px 12px;
      color: #fff;
      font-size: 0.78rem;
      text-shadow: 0 1px 4px rgba(0,0,0,0.8);
      font-weight: 600;
    }

    .drawer-header span {
      color: var(--cu-gold);
    }

    .dept-cards-carousel {
      display: flex;
      gap: 8px;
      overflow-x: auto;
      padding: 6px 4px 10px;
      scrollbar-width: none;
      -webkit-overflow-scrolling: touch;
    }
    .dept-cards-carousel::-webkit-scrollbar {
      display: none;
    }

    .mini-card {
      flex: 0 0 auto;
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(6px);
      padding: 6px 10px;
      border-radius: var(--radius-md);
      display: flex;
      align-items: center;
      gap: 8px;
      cursor: pointer;
      box-shadow: 0 4px 12px rgba(0,0,0,0.3);
      border: 1px solid rgba(255, 255, 255, 0.8);
      transition: var(--transition);
    }

    .mini-card:hover, .mini-card:active {
      transform: translateY(-3px) scale(1.03);
      background: #fff;
      box-shadow: 0 8px 20px rgba(245, 183, 0, 0.35);
      border-color: var(--cu-gold);
    }

    .mini-card img {
      width: 28px;
      height: 28px;
      object-fit: contain;
    }

    .mini-card-info {
      display: flex;
      flex-direction: column;
      text-align: left;
    }

    .mini-card-code {
      font-size: 0.78rem;
      font-weight: 700;
      color: var(--cu-maroon);
      line-height: 1;
    }

    .mini-card-mascot {
      font-size: 0.65rem;
      color: var(--cu-text-muted);
      white-space: nowrap;
    }

    /* ==============================================================
       SCENE 2: DEPARTMENT INFORMATION SCENE (OVERLAY SCREEN)
       ============================================================== */
    #scene-department-info {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 100;
      background: rgba(15, 23, 42, 0.75);
      backdrop-filter: blur(16px);
      opacity: 0;
      pointer-events: none;
      visibility: hidden;
      transition: opacity 0.35s ease, visibility 0.35s ease;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 16px;
      overflow-y: auto;
    }

    #scene-department-info.active {
      opacity: 1;
      pointer-events: auto;
      visibility: visible;
    }

    .info-modal-card {
      background: var(--cu-card-bg);
      width: 100%;
      max-width: 980px;
      max-height: 94vh;
      border-radius: var(--radius-lg);
      box-shadow: var(--shadow-lg);
      border: 2px solid var(--cu-gold);
      display: flex;
      flex-direction: column;
      overflow: hidden;
      animation: modalSlideUp 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    }

    @keyframes modalSlideUp {
      from {
        transform: translateY(30px) scale(0.97);
        opacity: 0;
      }
      to {
        transform: translateY(0) scale(1);
        opacity: 1;
      }
    }

    /* Modal Top Header */
    .modal-header {
      background: linear-gradient(135deg, var(--cu-maroon) 0%, var(--cu-maroon-dark) 100%);
      padding: 14px 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      color: #fff;
      border-bottom: 3px solid var(--cu-gold);
    }

    .back-btn {
      background: rgba(255, 255, 255, 0.15);
      color: #fff;
      border: 1px solid rgba(255, 255, 255, 0.3);
      padding: 8px 18px;
      border-radius: 50px;
      font-size: 0.85rem;
      font-weight: 700;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 8px;
      transition: var(--transition);
    }

    .back-btn:hover {
      background: var(--cu-gold);
      color: var(--cu-maroon);
      border-color: var(--cu-gold);
      transform: translateX(-3px);
    }

    .back-btn .arrow-icon {
      font-size: 1.1rem;
      line-height: 1;
    }

    .modal-header-title {
      text-align: right;
    }
    .modal-header-title h2 {
      font-family: 'Cinzel', serif;
      font-size: 1.05rem;
      color: var(--cu-gold);
      letter-spacing: 0.5px;
    }
    .modal-header-title p {
      font-size: 0.72rem;
      color: rgba(255, 255, 255, 0.85);
      letter-spacing: 0.5px;
    }

    /* Modal Body Grid: Left info / Right 3D mascot */
    .modal-content-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
      padding: 24px;
      overflow-y: auto;
      max-height: calc(94vh - 140px);
    }

    @media (max-width: 768px) {
      .modal-content-grid {
        grid-template-columns: 1fr;
        padding: 16px;
        gap: 16px;
      }
    }

    /* Left Side: Department Details */
    .dept-details-pane {
      display: flex;
      flex-direction: column;
      gap: 14px;
    }

    .dept-title-group {
      display: flex;
      align-items: center;
      gap: 16px;
    }

    .dept-logo-large-wrap {
      width: 80px;
      height: 80px;
      flex-shrink: 0;
      background: #fff;
      border-radius: 50%;
      padding: 4px;
      box-shadow: 0 6px 16px rgba(0,0,0,0.12);
      border: 2px solid var(--cu-gold);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .dept-logo-large {
      width: 100%;
      height: 100%;
      object-fit: contain;
    }

    .dept-headings h3 {
      font-family: 'Cinzel', serif;
      font-size: 1.25rem;
      font-weight: 700;
      color: var(--cu-maroon);
      line-height: 1.2;
      margin-bottom: 4px;
    }

    .dept-headings .dept-code-tag {
      display: inline-block;
      background: var(--cu-gold);
      color: var(--cu-maroon);
      font-size: 0.72rem;
      font-weight: 800;
      padding: 2px 8px;
      border-radius: 4px;
      letter-spacing: 0.5px;
    }

    .badge-pill-row {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
    }

    .accreditation-badge {
      background: #eef2ff;
      color: #3730a3;
      border: 1px solid #c7d2fe;
      padding: 5px 12px;
      border-radius: 30px;
      font-size: 0.75rem;
      font-weight: 600;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }

    .mascot-badge {
      background: #fef3c7;
      color: #92400e;
      border: 1px solid #fde68a;
      padding: 5px 12px;
      border-radius: 30px;
      font-size: 0.75rem;
      font-weight: 700;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }

    .detail-card {
      background: #f8fafc;
      border-radius: var(--radius-md);
      padding: 14px 16px;
      border: 1px solid #e2e8f0;
    }

    .detail-card h4 {
      font-size: 0.8rem;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      color: var(--cu-text-muted);
      margin-bottom: 6px;
      display: flex;
      align-items: center;
      gap: 6px;
    }

    .detail-card p {
      font-size: 0.9rem;
      line-height: 1.55;
      color: #334155;
    }

    .programs-list {
      font-size: 0.85rem;
      font-weight: 600;
      color: var(--cu-maroon);
      line-height: 1.45;
    }

    /* Right Side: 3D Mascot Stage */
    .mascot-3d-pane {
      display: flex;
      flex-direction: column;
      background: linear-gradient(180deg, #f1f5f9 0%, #e2e8f0 100%);
      border-radius: var(--radius-md);
      border: 1px solid #cbd5e1;
      padding: 12px;
      position: relative;
      min-height: 340px;
    }

    .stage-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 8px;
    }

    .stage-header h4 {
      font-size: 0.85rem;
      font-weight: 700;
      color: var(--cu-maroon);
      display: flex;
      align-items: center;
      gap: 6px;
    }

    .mascot-tag-badge {
      background: var(--cu-maroon);
      color: #fff;
      font-size: 0.7rem;
      font-weight: 700;
      padding: 3px 8px;
      border-radius: 20px;
    }

    /* Google model-viewer container */
    model-viewer {
      width: 100%;
      height: 300px;
      flex: 1;
      border-radius: var(--radius-sm);
      background-color: transparent;
      --poster-color: transparent;
    }

    .stage-hint {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 8px;
      font-size: 0.72rem;
      color: var(--cu-text-muted);
    }

    .mascot-name-display {
      font-weight: 700;
      color: var(--cu-maroon);
      font-size: 0.85rem;
    }

    /* Modal Footer: Quick Switcher */
    .modal-footer {
      background: #f1f5f9;
      border-top: 1px solid #e2e8f0;
      padding: 10px 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      flex-wrap: wrap;
    }

    .footer-label {
      font-size: 0.78rem;
      font-weight: 600;
      color: var(--cu-text-muted);
    }

    .footer-switcher-buttons {
      display: flex;
      gap: 6px;
      flex-wrap: wrap;
    }

    .switch-dept-btn {
      background: #fff;
      border: 1px solid #cbd5e1;
      padding: 4px 10px;
      border-radius: 6px;
      font-size: 0.75rem;
      font-weight: 700;
      color: var(--cu-text);
      cursor: pointer;
      transition: var(--transition);
    }

    .switch-dept-btn:hover, .switch-dept-btn.current {
      background: var(--cu-maroon);
      color: #fff;
      border-color: var(--cu-maroon);
    }

    /* ==============================================================
       TARGET MODAL (HELP / PRINT PREVIEW)
       ============================================================== */
    #target-modal {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 200;
      background: rgba(0, 0, 0, 0.85);
      backdrop-filter: blur(8px);
      display: none;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    #target-modal.active {
      display: flex;
    }

    .target-dialog {
      background: #fff;
      padding: 24px;
      border-radius: var(--radius-lg);
      max-width: 420px;
      text-align: center;
      box-shadow: var(--shadow-lg);
      border: 3px solid var(--cu-gold);
    }

    .target-dialog h3 {
      font-family: 'Cinzel', serif;
      color: var(--cu-maroon);
      margin-bottom: 8px;
    }

    .target-dialog p {
      font-size: 0.82rem;
      color: var(--cu-text-muted);
      margin-bottom: 16px;
      line-height: 1.4;
    }

    .target-dialog img {
      width: 240px;
      height: 240px;
      object-fit: contain;
      margin: 0 auto 16px;
      border: 2px dashed #cbd5e1;
      padding: 8px;
      border-radius: var(--radius-md);
      background: #fff;
    }

    .close-dialog-btn {
      background: var(--cu-maroon);
      color: #fff;
      border: none;
      padding: 10px 24px;
      border-radius: 50px;
      font-weight: 700;
      font-size: 0.85rem;
      cursor: pointer;
      transition: var(--transition);
    }
    .close-dialog-btn:hover {
      background: var(--cu-gold);
      color: var(--cu-maroon);
    }
  </style>
</head>

<body>

  <!-- ==============================================================
       A-FRAME 3D SCENE & MINDAR IMAGE TARGET INTEGRATION
       ============================================================== -->
  <a-scene
    mindar-image="imageTargetSrc: ./targets.mind; autoStart: true; uiLoading: yes; uiScanning: yes; uiError: yes;"
    color-space="sRGB"
    renderer="colorManagement: true, physicallyCorrectLights: true"
    vr-mode-ui="enabled: false"
    device-orientation-permission-ui="enabled: false">

    <!-- Preloaded Assets for 3D Scene -->
    <a-assets>
      <img id="asset-cu-logo" src="images/target.png">
      <img id="asset-ccs" src="images/ccs.png">
      <img id="asset-engr" src="images/engr.png">
      <img id="asset-bsba" src="images/bsba.png">
      <img id="asset-crim" src="images/crim.png">
      <img id="asset-educ" src="images/educ.png">
      <img id="asset-maritime" src="images/maritime.png">
      <img id="asset-arts" src="images/arts_and_sciences.png">
      <img id="asset-health" src="images/health.png">
    </a-assets>

    <!-- Raycasting Camera (Allows Clicking/Tapping 3D AR Objects) -->
    <a-camera
      position="0 0 0"
      look-controls="enabled: false"
      cursor="fuse: false; rayOrigin: mouse;"
      raycaster="far: 10000; objects: .clickable">
    </a-camera>

    <!-- MindAR Image Target: Capitol University Official Logo -->
    <a-entity mindar-image-target="targetIndex: 0" id="cu-target">

      <!-- Central Animated Aura Ring & Heading -->
      <a-ring
        radius-inner="0.48"
        radius-outer="0.52"
        color="#F5B700"
        material="opacity: 0.9; roughness: 0.3"
        animation="property: rotation; to: 0 0 360; loop: true; dur: 14000; easing: linear">
      </a-ring>

      <a-entity position="0 0 0.04">
        <!-- Floating Header Pill -->
        <a-plane width="0.86" height="0.22" color="#7B1113" material="opacity: 0.95"></a-plane>
        <a-text value="CAPITOL UNIVERSITY\nTap Department Logo" align="center" width="1.3" color="#F5B700" position="0 0 0.02"></a-text>
      </a-entity>

      <!-- ==============================================================
           THE EIGHT DEPARTMENT LOGOS AS INTERACTIVE AR OBJECTS
           Positioned in a radial crown around the CU logo target
           ============================================================== -->

      <!-- 1. College of Computer Studies (CCS) - Top -->
      <a-entity id="ar-dept-ccs" class="clickable" position="0 0.85 0.06" data-dept="ccs">
        <a-circle radius="0.22" color="#F5B700"></a-circle>
        <a-circle radius="0.20" color="#ffffff"></a-circle>
        <a-circle radius="0.18" src="#asset-ccs" material="transparent: true"></a-circle>
        <a-plane position="0 -0.26 0.01" width="0.44" height="0.10" color="#7B1113"></a-plane>
        <a-text position="0 -0.26 0.02" value="CCS" align="center" width="1.6" color="#ffffff"></a-text>
      </a-entity>

      <!-- 2. College of Engineering (COE) - Top-Right -->
      <a-entity id="ar-dept-engr" class="clickable" position="0.60 0.60 0.06" data-dept="engr">
        <a-circle radius="0.22" color="#F5B700"></a-circle>
        <a-circle radius="0.20" color="#ffffff"></a-circle>
        <a-circle radius="0.18" src="#asset-engr" material="transparent: true"></a-circle>
        <a-plane position="0 -0.26 0.01" width="0.44" height="0.10" color="#7B1113"></a-plane>
        <a-text position="0 -0.26 0.02" value="ENGR" align="center" width="1.6" color="#ffffff"></a-text>
      </a-entity>

      <!-- 3. College of Business and Accountancy (CBA) - Right -->
      <a-entity id="ar-dept-bsba" class="clickable" position="0.85 0 0.06" data-dept="bsba">
        <a-circle radius="0.22" color="#F5B700"></a-circle>
        <a-circle radius="0.20" color="#ffffff"></a-circle>
        <a-circle radius="0.18" src="#asset-bsba" material="transparent: true"></a-circle>
        <a-plane position="0 -0.26 0.01" width="0.44" height="0.10" color="#7B1113"></a-plane>
        <a-text position="0 -0.26 0.02" value="CBA" align="center" width="1.6" color="#ffffff"></a-text>
      </a-entity>

      <!-- 4. College of Criminology (COC) - Bottom-Right -->
      <a-entity id="ar-dept-crim" class="clickable" position="0.60 -0.60 0.06" data-dept="crim">
        <a-circle radius="0.22" color="#F5B700"></a-circle>
        <a-circle radius="0.20" color="#ffffff"></a-circle>
        <a-circle radius="0.18" src="#asset-crim" material="transparent: true"></a-circle>
        <a-plane position="0 -0.26 0.01" width="0.44" height="0.10" color="#7B1113"></a-plane>
        <a-text position="0 -0.26 0.02" value="CRIM" align="center" width="1.6" color="#ffffff"></a-text>
      </a-entity>

      <!-- 5. College of Education (CED) - Bottom -->
      <a-entity id="ar-dept-educ" class="clickable" position="0 -0.85 0.06" data-dept="educ">
        <a-circle radius="0.22" color="#F5B700"></a-circle>
        <a-circle radius="0.20" color="#ffffff"></a-circle>
        <a-circle radius="0.18" src="#asset-educ" material="transparent: true"></a-circle>
        <a-plane position="0 -0.26 0.01" width="0.44" height="0.10" color="#7B1113"></a-plane>
        <a-text position="0 -0.26 0.02" value="EDUC" align="center" width="1.6" color="#ffffff"></a-text>
      </a-entity>

      <!-- 6. College of Maritime Education (CME) - Bottom-Left -->
      <a-entity id="ar-dept-maritime" class="clickable" position="-0.60 -0.60 0.06" data-dept="maritime">
        <a-circle radius="0.22" color="#F5B700"></a-circle>
        <a-circle radius="0.20" color="#ffffff"></a-circle>
        <a-circle radius="0.18" src="#asset-maritime" material="transparent: true"></a-circle>
        <a-plane position="0 -0.26 0.01" width="0.44" height="0.10" color="#7B1113"></a-plane>
        <a-text position="0 -0.26 0.02" value="MARITIME" align="center" width="1.4" color="#ffffff"></a-text>
      </a-entity>

      <!-- 7. College of Arts and Sciences (CAS) - Left -->
      <a-entity id="ar-dept-arts" class="clickable" position="-0.85 0 0.06" data-dept="arts_and_sciences">
        <a-circle radius="0.22" color="#F5B700"></a-circle>
        <a-circle radius="0.20" color="#ffffff"></a-circle>
        <a-circle radius="0.18" src="#asset-arts" material="transparent: true"></a-circle>
        <a-plane position="0 -0.26 0.01" width="0.44" height="0.10" color="#7B1113"></a-plane>
        <a-text position="0 -0.26 0.02" value="CAS" align="center" width="1.6" color="#ffffff"></a-text>
      </a-entity>

      <!-- 8. College of Health Sciences (CHS) - Top-Left -->
      <a-entity id="ar-dept-health" class="clickable" position="-0.60 0.60 0.06" data-dept="health">
        <a-circle radius="0.22" color="#F5B700"></a-circle>
        <a-circle radius="0.20" color="#ffffff"></a-circle>
        <a-circle radius="0.18" src="#asset-health" material="transparent: true"></a-circle>
        <a-plane position="0 -0.26 0.01" width="0.44" height="0.10" color="#7B1113"></a-plane>
        <a-text position="0 -0.26 0.02" value="HEALTH" align="center" width="1.4" color="#ffffff"></a-text>
      </a-entity>

    </a-entity>
  </a-scene>

  <!-- ==============================================================
       AR SCREEN HEADS-UP DISPLAY (HUD)
       ============================================================== -->
  <div id="ar-ui-container">

    <!-- Top Navigation Bar -->
    <div class="top-bar">
      <div class="brand-badge">
        <img src="images/target.png" alt="CU Logo" class="brand-logo">
        <div class="brand-text">
          <h1>Capitol University</h1>
          <p>AR Department Directory</p>
        </div>
      </div>

      <div class="top-actions">
        <button id="btn-simulate" class="action-btn" title="Simulate Target Scan for testing">
          🧪 Test Mode
        </button>
        <button id="btn-show-target" class="action-btn" title="View CU Logo Target for scanning">
          🎯 Target Help
        </button>
      </div>
    </div>

    <!-- Recognition Status Pill -->
    <div class="status-banner-wrap">
      <div id="status-pill" class="status-pill">
        <div class="status-dot"></div>
        <span id="status-text">Point camera at Capitol University Logo</span>
      </div>
    </div>

    <!-- Bottom Department Quick Drawer (Tappable both in AR and on Screen) -->
    <div class="bottom-bar">
      <div class="drawer-header">
        <span>Eight Academic Departments</span>
        <small>Tap in AR or select below</small>
      </div>

      <div class="dept-cards-carousel" id="carousel-container">
        <!-- Rendered dynamically by JavaScript -->
      </div>
    </div>

  </div>

  <!-- ==============================================================
       SCENE 2: DEPARTMENT INFORMATION SCENE
       ============================================================== -->
  <div id="scene-department-info">
    <div class="info-modal-card">

      <!-- Modal Header with Back Button -->
      <div class="modal-header">
        <button id="btn-back" class="back-btn" title="Return to AR Scanner">
          <span class="arrow-icon">←</span> Back to AR Scanner
        </button>

        <div class="modal-header-title">
          <h2>Department Directory</h2>
          <p>Capitol University • Cagayan de Oro City</p>
        </div>
      </div>

      <!-- Department Information & 3D Animal Mascot Stage -->
      <div class="modal-content-grid">

        <!-- Left Column: Department Description & Details -->
        <div class="dept-details-pane">

          <div class="dept-title-group">
            <div class="dept-logo-large-wrap">
              <img id="info-logo" src="images/ccs.png" alt="Department Logo" class="dept-logo-large">
            </div>
            <div class="dept-headings">
              <span id="info-code" class="dept-code-tag">CCS</span>
              <h3 id="info-name">College of Computer Studies</h3>
            </div>
          </div>

          <div class="badge-pill-row">
            <span id="info-accreditation" class="accreditation-badge">
              ⭐ CHED Center of Development (COD)
            </span>
            <span id="info-mascot" class="mascot-badge">
              🦅 Mascot: Philippine Eagle
            </span>
          </div>

          <!-- Description from Official CU Website -->
          <div class="detail-card">
            <h4>📖 Department Overview</h4>
            <p id="info-description">
              Gathering description from the official Capitol University website...
            </p>
          </div>

          <!-- Degree Programs -->
          <div class="detail-card">
            <h4>🎓 Degree Programs Offered</h4>
            <p id="info-programs" class="programs-list">
              BS in Information Technology (BSIT), BS in Computer Science (BSCS)
            </p>
          </div>

        </div>

        <!-- Right Column: Interactive 3D Animal Mascot Model -->
        <div class="mascot-3d-pane">
          <div class="stage-header">
            <h4>🦁 3D Animal Mascot</h4>
            <span class="mascot-tag-badge">Interactive 3D</span>
          </div>

          <!-- Google Model Viewer for 3D Mascot -->
          <model-viewer
            id="mascot-viewer"
            src="models/eagle.glb"
            alt="3D Animal Mascot"
            camera-controls
            auto-rotate
            rotation-per-second="30deg"
            shadow-intensity="1.2"
            shadow-softness="0.8"
            bounds="tight"
            exposure="1.15"
            loading="eager"
            autoplay>
          </model-viewer>

          <div class="stage-hint">
            <span id="info-mascot-name" class="mascot-name-display">Philippine Eagle</span>
            <span>👆 Drag to rotate • Pinch to zoom</span>
          </div>
        </div>

      </div>

      <!-- Modal Footer: Quick Switcher to Other Departments -->
      <div class="modal-footer">
        <span class="footer-label">Select Another Department:</span>
        <div class="footer-switcher-buttons" id="switcher-buttons">
          <!-- Dynamically populated -->
        </div>
      </div>

    </div>
  </div>

  <!-- ==============================================================
       TARGET MODAL (HELP / PRINT PREVIEW)
       ============================================================== -->
  <div id="target-modal">
    <div class="target-dialog">
      <h3>Official CU Image Target</h3>
      <p>Scan this official Capitol University seal using your mobile device or webcam to display the 8 department logos in AR!</p>
      <img src="images/target.png" alt="Capitol University Logo">
      <div>
        <button id="btn-close-target" class="close-dialog-btn">Got It / Close</button>
      </div>
    </div>
  </div>

  <!-- ==============================================================
       JAVASCRIPT APPLICATION LOGIC
       Clean, simple, beginner-friendly
       ============================================================== -->
  <script>
    // Master data for the 8 academic departments
    const DEPARTMENTS = {
      'ccs': {
        id: 'ccs',
        code: 'CCS',
        name: 'College of Computer Studies',
        mascot: 'Philippine Eagle',
        mascot_title: 'The Soaring Cyber Eagle',
        logo: 'images/ccs.png',
        model: 'models/eagle.glb',
        accreditation: 'CHED Center of Development (COD) in IT Education',
        description: 'The College of Computer Studies at Capitol University is recognized by the Commission on Higher Education (CHED) as a Center of Development in Information Technology. It prepares students for globally competitive IT careers through a cutting-edge curriculum in software engineering, mobile development, intelligent systems, and networking.',
        programs: 'BS in Information Technology (BSIT), BS in Computer Science (BSCS)'
      },
      'engr': {
        id: 'engr',
        code: 'COE',
        name: 'College of Engineering',
        mascot: 'Iron Tiger',
        mascot_title: 'The Mighty Engineering Tiger',
        logo: 'images/engr.png',
        model: 'models/tiger.glb',
        accreditation: 'CHED Center of Development (COD) | PACUCOA Level III',
        description: 'The College of Engineering delivers premier engineering education recognized for technical excellence and high licensure examination performance. Students receive comprehensive laboratory training, structural design competencies, and technological problem-solving skills across diverse engineering disciplines.',
        programs: 'BS Civil Engineering, BS Mechanical Engineering, BS Electrical Engineering, BS Electronics Engineering'
      },
      'bsba': {
        id: 'bsba',
        code: 'CBA',
        name: 'College of Business and Accountancy',
        mascot: 'Golden Bull',
        mascot_title: 'The Thriving Bull of Commerce',
        logo: 'images/bsba.png',
        model: 'models/bull.glb',
        accreditation: 'PACUCOA Accredited | Top CPA Board Performance',
        description: 'The College of Business and Accountancy develops ethical, forward-thinking business leaders, entrepreneurs, and certified public accountants. The college blends analytical financial rigor with modern marketing strategies and ethical managerial leadership.',
        programs: 'BS in Accountancy (BSA), BS in Business Administration (Financial, Marketing, and Human Resource Management)'
      },
      'crim': {
        id: 'crim',
        code: 'COC',
        name: 'College of Criminology',
        mascot: 'Vigilant Wolf',
        mascot_title: 'The Guardian Wolf of Justice',
        logo: 'images/crim.png',
        model: 'models/wolf.glb',
        accreditation: 'CHED Center of Development (COD) in Criminology',
        description: 'The College of Criminology provides rigorous academic training and tactical discipline for future public safety officers and law enforcement agents. Equipped with state-of-the-art ballistics, dactyloscopy, and criminalistics laboratories, the college upholds values of integrity, law enforcement, and human rights.',
        programs: 'Bachelor of Science in Criminology (BSCrim)'
      },
      'educ': {
        id: 'educ',
        code: 'CED',
        name: 'College of Education',
        mascot: 'Wise Owl',
        mascot_title: 'The Enlightened Owl of Wisdom',
        logo: 'images/educ.png',
        model: 'models/owl.glb',
        accreditation: 'CHED Center of Excellence (COE) | PACUCOA Level IV',
        description: 'The College of Education is a distinguished Center of Excellence recognized across Northern Mindanao for preparing compassionate, innovative, and pedagogical leaders. The college shapes dynamic educators equipped with modern teaching techniques and digital learning resources.',
        programs: 'Bachelor of Elementary Education (BEEd), Bachelor of Secondary Education (BSEd) with various majors'
      },
      'maritime': {
        id: 'maritime',
        code: 'CME',
        name: 'College of Maritime Education',
        mascot: 'Oceanic Shark',
        mascot_title: 'The Navigating Shark of the Seas',
        logo: 'images/maritime.png',
        model: 'models/shark.glb',
        accreditation: 'CHED & MARINA STCW Compliant | DNV Certified',
        description: 'The College of Maritime Education prepares disciplined maritime officers in strict compliance with MARINA and international STCW standards. Features world-class navigational bridge and engine room simulators, students undergo rigorous practical training for careers on global merchant vessels.',
        programs: 'BS Marine Transportation (BSMT), BS Marine Engineering (BSMarE)'
      },
      'arts_and_sciences': {
        id: 'arts_and_sciences',
        code: 'CAS',
        name: 'College of Arts and Sciences',
        mascot: 'Noble Lion',
        mascot_title: 'The Valiant Lion of Arts & Sciences',
        logo: 'images/arts_and_sciences.png',
        model: 'models/lion.glb',
        accreditation: 'PACUCOA Level III Accredited Pillar of Liberal Arts',
        description: 'The College of Arts and Sciences serves as the intellectual cornerstone of Capitol University. It fosters critical inquiry, ethical responsibility, and effective communication through interdisciplinary humanities, social sciences, and behavioral research programs.',
        programs: 'BA in Communication, BA in Political Science, BS in Psychology'
      },
      'health': {
        id: 'health',
        code: 'CHS',
        name: 'College of Health Sciences',
        mascot: 'Healing Stallion',
        mascot_title: 'The Resilient Stallion of Healing',
        logo: 'images/health.png',
        model: 'models/horse.glb',
        accreditation: 'PACUCOA Accredited | Outstanding Nursing Licensure Record',
        description: 'The College of Health Sciences is renowned for academic excellence in healthcare and patient-centered nursing care. With intensive clinical rotations in hospital and community environments, the college develops competent, compassionate health professionals who excel in local and international healthcare systems.',
        programs: 'Bachelor of Science in Nursing (BSN)'
      }
    };

    // DOM Elements
    const cuTarget = document.querySelector('#cu-target');
    const statusPill = document.querySelector('#status-pill');
    const statusText = document.querySelector('#status-text');
    const sceneDeptInfo = document.querySelector('#scene-department-info');
    const btnBack = document.querySelector('#btn-back');
    const carouselContainer = document.querySelector('#carousel-container');
    const switcherButtons = document.querySelector('#switcher-buttons');
    const targetModal = document.querySelector('#target-modal');
    const btnShowTarget = document.querySelector('#btn-show-target');
    const btnCloseTarget = document.querySelector('#btn-close-target');
    const btnSimulate = document.querySelector('#btn-simulate');

    // Department Info modal fields
    const infoLogo = document.querySelector('#info-logo');
    const infoCode = document.querySelector('#info-code');
    const infoName = document.querySelector('#info-name');
    const infoAccreditation = document.querySelector('#info-accreditation');
    const infoMascot = document.querySelector('#info-mascot');
    const infoDescription = document.querySelector('#info-description');
    const infoPrograms = document.querySelector('#info-programs');
    const infoMascotName = document.querySelector('#info-mascot-name');
    const mascotViewer = document.querySelector('#mascot-viewer');

    let currentDeptId = null;
    let isSimulated = false;

    // 1. Initialize UI Elements (Carousel & Footer Switcher)
    function buildUIElements() {
      carouselContainer.innerHTML = '';
      switcherButtons.innerHTML = '';

      Object.values(DEPARTMENTS).forEach(dept => {
        // Bottom drawer mini card
        const card = document.createElement('div');
        card.className = 'mini-card';
        card.setAttribute('data-dept', dept.id);
        card.innerHTML = `
          <img src="${dept.logo}" alt="${dept.code}">
          <div class="mini-card-info">
            <span class="mini-card-code">${dept.code}</span>
            <span class="mini-card-mascot">${dept.mascot}</span>
          </div>
        `;
        card.addEventListener('click', () => openDepartment(dept.id));
        carouselContainer.appendChild(card);

        // Modal footer switcher button
        const btn = document.createElement('button');
        btn.className = 'switch-dept-btn';
        btn.textContent = dept.code;
        btn.setAttribute('data-dept', dept.id);
        btn.title = dept.name;
        btn.addEventListener('click', () => openDepartment(dept.id));
        switcherButtons.appendChild(btn);
      });
    }

    // 2. Open Department Information Scene
    function openDepartment(deptId) {
      const dept = DEPARTMENTS[deptId];
      if (!dept) return;

      currentDeptId = deptId;

      // Fill in details
      infoLogo.src = dept.logo;
      infoCode.textContent = dept.code;
      infoName.textContent = dept.name;
      infoAccreditation.textContent = `⭐ ${dept.accreditation}`;
      infoMascot.textContent = `🐾 Mascot: ${dept.mascot}`;
      infoDescription.textContent = dept.description;
      infoPrograms.textContent = dept.programs;
      infoMascotName.textContent = `${dept.mascot} (${dept.mascot_title})`;

      // Load 3D Mascot Model
      mascotViewer.src = dept.model;

      // Update active switcher button
      document.querySelectorAll('.switch-dept-btn').forEach(btn => {
        if (btn.getAttribute('data-dept') === deptId) {
          btn.classList.add('current');
        } else {
          btn.classList.remove('current');
        }
      });

      // Show the Department Information Scene
      sceneDeptInfo.classList.add('active');
    }

    // 3. Return / Back to AR Scanner Screen
    function closeDepartment() {
      sceneDeptInfo.classList.remove('active');
      currentDeptId = null;
    }

    // Back button event listener
    btnBack.addEventListener('click', closeDepartment);

    // 4. MindAR Target Recognition Events
    if (cuTarget) {
      cuTarget.addEventListener('targetFound', () => {
        statusPill.classList.add('detected');
        statusText.textContent = 'CU Logo Recognized! Tap any department logo';
      });

      cuTarget.addEventListener('targetLost', () => {
        if (!isSimulated) {
          statusPill.classList.remove('detected');
          statusText.textContent = 'Point camera at Capitol University Logo';
        }
      });
    }

    // 5. Connect 3D AR Click Events (Raycaster clicks on AR objects)
    function setupARClickListeners() {
      const arDeptEntities = document.querySelectorAll('[data-dept]');
      arDeptEntities.forEach(entity => {
        entity.addEventListener('click', (evt) => {
          const deptId = entity.getAttribute('data-dept');
          if (deptId) {
            openDepartment(deptId);
          }
        });
      });
    }

    // 6. Test Mode Simulation Toggle (Great for quick desktop testing/grading)
    if (btnSimulate) {
      btnSimulate.addEventListener('click', () => {
        isSimulated = !isSimulated;
        if (isSimulated) {
          if (cuTarget && cuTarget.object3D) {
            cuTarget.object3D.visible = true;
            cuTarget.object3D.position.set(0, 0, -2.5);
            cuTarget.object3D.scale.set(1.2, 1.2, 1.2);
          }
          statusPill.classList.add('detected');
          statusText.textContent = 'CU Logo Recognized! Tap any department logo';
          btnSimulate.innerHTML = '🧪 Exit Test Mode';
          btnSimulate.style.borderColor = '#10b981';
          btnSimulate.style.color = '#10b981';
        } else {
          if (cuTarget && cuTarget.object3D) {
            cuTarget.object3D.visible = false;
            cuTarget.object3D.position.set(0, 0, 0);
            cuTarget.object3D.scale.set(1, 1, 1);
          }
          statusPill.classList.remove('detected');
          statusText.textContent = 'Point camera at Capitol University Logo';
          btnSimulate.innerHTML = '🧪 Test Mode';
          btnSimulate.style.borderColor = '';
          btnSimulate.style.color = '';
        }
      });
    }

    // 7. Target Help Modal Handlers
    btnShowTarget.addEventListener('click', () => {
      targetModal.classList.add('active');
    });

    btnCloseTarget.addEventListener('click', () => {
      targetModal.classList.remove('active');
    });

    targetModal.addEventListener('click', (e) => {
      if (e.target === targetModal) {
        targetModal.classList.remove('active');
      }
    });

    // Initialize application on page load
    window.addEventListener('DOMContentLoaded', () => {
      buildUIElements();
      setupARClickListeners();

      // Optional: Fetch updated descriptions from PHP API if available
      fetch('departments.php')
        .then(res => res.json())
        .then(data => {
          if (data && data.departments) {
            data.departments.forEach(dept => {
              if (DEPARTMENTS[dept.id]) {
                Object.assign(DEPARTMENTS[dept.id], dept);
              }
            });
            buildUIElements();
          }
        })
        .catch(() => {
          // Graceful fallback to static dataset
        });
    });
  </script>

</body>
</html>
