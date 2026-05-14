<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ghost0x1 | Security Researcher</title>
    <style>
        /* Matrix Theme Styling */
        body {
            background-color: #000;
            color: #0dff00;
            font-family: 'Courier New', Courier, monospace;
            margin: 0;
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #canvas {
            position: fixed;
            top: 0;
            left: 0;
            z-index: -1;
        }

        .container {
            width: 80%;
            max-width: 900px;
            background: rgba(0, 0, 0, 0.85);
            border: 1px solid #0dff00;
            box-shadow: 0 0 20px #0dff00;
            margin: 50px 0;
            padding: 30px;
            border-radius: 5px;
        }

        .header {
            text-align: center;
            border-bottom: 2px solid #0dff00;
            padding-bottom: 20px;
        }

        h1 { font-size: 2.5em; text-transform: uppercase; letter-spacing: 5px; }
        h2 { color: #fff; font-size: 1.2em; }

        .glitch {
            animation: glitch 1s linear infinite;
        }

        @keyframes glitch {
            2%, 64% { transform: translate(2px, 0) skew(0deg); }
            4%, 60% { transform: translate(-2px, 0) skew(0deg); }
            62% { transform: translate(0, 0) skew(5deg); }
        }

        .section { margin-top: 30px; }
        .section-title {
            background: #0dff00;
            color: #000;
            display: inline-block;
            padding: 2px 10px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        ul { list-style: none; padding: 0; }
        li::before { content: "> "; color: #fff; }
        li { margin-bottom: 8px; font-size: 1.1em; }

        .terminal-text {
            color: #0dff00;
            border-right: 2px solid #0dff00;
            white-space: nowrap;
            overflow: hidden;
            width: 0;
            animation: typing 3s steps(40, end) forwards;
        }

        @keyframes typing {
            from { width: 0 }
            to { width: 100% }
        }

        .contact-btn {
            display: block;
            width: 200px;
            margin: 30px auto;
            text-align: center;
            padding: 10px;
            border: 1px solid #0dff00;
            color: #0dff00;
            text-decoration: none;
            transition: 0.3s;
        }

        .contact-btn:hover {
            background: #0dff00;
            color: #000;
            box-shadow: 0 0 15px #0dff00;
        }
    </style>
</head>
<body>

<canvas id="canvas"></canvas>

<div class="container">
    <div class="header">
        <h1 class="glitch">GHOST0X1</h1>
        <div class="terminal-text">Access Granted... Systems Compromised...</div>
        <h2>Red Team Operator | Professional Bug Hunter</h2>
    </div>

    <div class="section">
        <div class="section-title">MISSION OBJECTIVES (SKILLS)</div>
        <ul>
            <li>Red Team Operations & Adversary Simulation</li>
            <li>Web Pentesting & Vulnerability Assessment</li>
            <li>Practical Network Penetration Tester (PNPT)</li>
            <li>WordPress Malware Detection & Forensic Removal</li>
            <li>Certified Ethical Hacker (CEH)</li>
            <li>Advanced Python CLI Tools Developer</li>
            <li>Black-Hat Methodology (For Defensive Purpose)</li>
        </ul>
    </div>

    <div class="section">
        <div class="section-title">SYSTEM STATUS</div>
        <p>Expert in identifying critical security flaws before the "bad guys" do. Specializing in breaking web infrastructures and securing digital assets for high-tier clients.</p>
    </div>

    <div class="section">
        <div class="section-title">CERTIFICATIONS & TOOLS</div>
        <p>Python | Burp Suite | Metasploit | Nmap | Wireshark | Custom Exploits</p>
    </div>

    <a href="teamghostofficial0x1@gmail.com" class="contact-btn">HIRE THE GHOST</a>
</div>

<script>
    // Matrix Rain Effect
    const canvas = document.getElementById('canvas');
    const ctx = canvas.getContext('2d');

    canvas.height = window.innerHeight;
    canvas.width = window.innerWidth;

    const letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789$#@%&*";
    const fontSize = 16;
    const columns = canvas.width / fontSize;
    const drops = [];

    for (let x = 0; x < columns; x++) drops[x] = 1;

    function draw() {
        ctx.fillStyle = "rgba(0, 0, 0, 0.05)";
        ctx.fillRect(0, 0, canvas.width, canvas.height);
        ctx.fillStyle = "#0dff00";
        ctx.font = fontSize + "px arial";

        for (let i = 0; i < drops.length; i++) {
            const text = letters.charAt(Math.floor(Math.random() * letters.length));
            ctx.fillText(text, i * fontSize, drops[i] * fontSize);
            if (drops[i] * fontSize > canvas.height && Math.random() > 0.975) drops[i] = 0;
            drops[i]++;
        }
    }
    setInterval(draw, 33);
</script>

</body>
</html>