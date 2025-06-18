<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html, body {
      height: 100%;
      background: #000;
      overflow: hidden;
      font-family: 'Segoe UI', sans-serif;
    }

    #particles-js {
      position: absolute;
      width: 100%;
      height: 100%;
      background: radial-gradient(ellipse at center, #000 0%, #020202 100%);
      z-index: 0;
    }

    .overlay-text {
      position: relative;
      z-index: 1;
      color: white;
      text-align: center;
      padding-top: 25vh;
      font-size: 2em;
      text-shadow: 0 0 10px #00f0ff;
    }
  </style>
</head>
<body>

<div id="particles-js"></div>


<!-- CDN for particles.js -->
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<script>
particlesJS("particles-js", {
  particles: {
    number: {
      value: 60,
      density: {
        enable: true,
        value_area: 1000
      }
    },
    color: {
      value: "#ffffff"
    },
    shape: {
      type: "circle"
    },
    opacity: {
      value: 0.15,
      random: false
    },
    size: {
      value: 3,
      random: true
    },
    line_linked: {
      enable: false
    },
    move: {
      enable: true,
      speed: 0.6,
      direction: "none",
      straight: false,
      out_mode: "out",
      bounce: false
    }
  },
  interactivity: {
    detect_on: "canvas",
    events: {
      onhover: { enable: false },
      onclick: { enable: false },
      resize: true
    }
  },
  retina_detect: true
});
</script>
</body>
</html>
