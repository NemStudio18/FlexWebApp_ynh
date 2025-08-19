<?php
// Get current timestamp for cache busting
$timestamp = time();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Webapp - Front Mode</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 600px;
            width: 100%;
        }

        .logo {
            font-size: 3rem;
            color: #4facfe;
            margin-bottom: 20px;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 2.5rem;
            font-weight: 700;
        }

        .subtitle {
            color: #666;
            font-size: 1.2rem;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .mode-badge {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            display: inline-block;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin: 30px 0;
        }

        .feature {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .feature:hover {
            transform: translateY(-5px);
        }

        .feature i {
            font-size: 2rem;
            margin-bottom: 15px;
        }

        .feature h3 {
            margin-bottom: 10px;
            font-size: 1.1rem;
        }

        .feature p {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .chat-container {
            margin: 30px 0;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 15px;
            border: 2px dashed #dee2e6;
        }

        .chat-gif {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .info-box {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            color: white;
            padding: 20px;
            border-radius: 15px;
            margin: 20px 0;
        }

        .info-box h3 {
            margin-bottom: 15px;
            font-size: 1.3rem;
        }

        .info-box ul {
            list-style: none;
            text-align: left;
        }

        .info-box li {
            margin: 10px 0;
            padding-left: 20px;
            position: relative;
        }

        .info-box li:before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #fff;
            font-weight: bold;
        }

        .cta-button {
            display: inline-block;
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            color: white;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            margin: 20px 10px;
            box-shadow: 0 10px 20px rgba(79, 172, 254, 0.3);
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 30px rgba(79, 172, 254, 0.4);
        }

        .footer {
            margin-top: 30px;
            color: #666;
            font-size: 0.9rem;
        }
        
        .sftp-info, .connection-info {
            background: #f8f9fa;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
        }
        
        .sftp-info h3, .connection-info h3 {
            color: #495057;
            margin-bottom: 15px;
        }
        
        .sftp-info dl, .connection-info dl {
            display: grid;
            grid-template-columns: 80px 1fr;
            gap: 10px;
            margin: 15px 0;
        }
        
        .sftp-info dt, .connection-info dt {
            font-weight: bold;
            color: #495057;
        }
        
        .sftp-info dd, .connection-info dd {
            margin: 0;
            color: #6c757d;
        }
        
        .password-note, .connection-note {
            background: #fff3cd;
            border: 1px solid #ffeaa7;
            border-radius: 6px;
            padding: 12px;
            margin-top: 15px;
            color: #856404;
            font-size: 0.9em;
        }
        
        .password-note i, .connection-note i {
            margin-right: 8px;
        }
        
        .generated-password-info {
            background: #e8f5e8;
            border: 1px solid #4caf50;
            border-radius: 6px;
            padding: 15px;
            margin-top: 15px;
        }
        
        .generated-password-info h4 {
            color: #2e7d32;
            margin-bottom: 10px;
            font-size: 1rem;
        }
        
        .generated-password-info p {
            margin: 8px 0;
            color: #2e7d32;
        }
        
        .generated-password-info code {
            background: #fff;
            padding: 4px 8px;
            border-radius: 4px;
            font-family: monospace;
            font-weight: bold;
            color: #2e7d32;
        }
        
        .small-note {
            font-size: 0.85em;
            opacity: 0.8;
            font-style: italic;
        }

        .php-info {
            background: #e3f2fd;
            color: #1565c0;
            padding: 15px;
            border-radius: 10px;
            margin: 20px 0;
            font-family: monospace;
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .container {
                padding: 30px 20px;
            }
            
            h1 {
                font-size: 2rem;
            }
            
            .features {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <i class="fas fa-route"></i>
        </div>
        
        <div class="mode-badge">
            <i class="fas fa-arrow-right"></i> Front Mode - SPA Routing
        </div>
        
        <h1>Welcome to My Webapp!</h1>
        <p class="subtitle">
            Your custom web application is ready with <strong>Front Mode</strong> routing. 
            All routes will be handled by this PHP file for SPA-like behavior.
        </p>

        <div class="php-info">
            <i class="fas fa-code"></i> <strong>PHP Info:</strong> 
            Version <?php echo phpversion(); ?> | 
            Server: <?php echo $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown'; ?> | 
            Time: <?php echo date('Y-m-d H:i:s'); ?>
        </div>

        <div class="features">
            <div class="feature">
                <i class="fas fa-route"></i>
                <h3>Front Mode</h3>
                <p>All routes handled by PHP</p>
            </div>
            <div class="feature">
                <i class="fas fa-rocket"></i>
                <h3>Fast & Modern</h3>
                <p>Built with the latest web technologies</p>
            </div>
            <div class="feature">
                <i class="fas fa-code"></i>
                <h3>PHP Ready</h3>
                <p>Full PHP support enabled</p>
            </div>
        </div>

        <div class="chat-container">
            <h3><i class="fas fa-cat"></i> Random Cat GIF</h3>
            <img src="https://cataas.com/cat/gif" alt="Random Cat" class="chat-gif" id="catGif">
            <p style="margin-top: 15px; color: #666;">
                <i class="fas fa-sync-alt"></i> Click the image to get a new cat!
            </p>
        </div>

                       <div class="info-box">
                   <h3><i class="fas fa-info-circle"></i> Front Mode Features</h3>
                   <ul>
                       <li>All URLs route to this PHP file</li>
                       <li>Perfect for Single Page Applications</li>
                       <li>Dynamic content generation with PHP</li>
                       <li>Easy routing management</li>
                   </ul>
               </div>
               
               <div class="sftp-info">
                   <h3><i class="fas fa-key"></i> SFTP Connection Details</h3>
                   <dl>
                       <dt>Domain</dt>
                       <dd>__DOMAIN__</dd>
                       <dt>Port</dt>
                       <dd>__SSH_PORT__</dd>
                       <dt>User</dt>
                       <dd>__ID__</dd>
                                               <dt>Password</dt>
                        <dd><code>__PASSWORD__</code></dd>
                   </dl>
                   <p class="password-note">
                       <i class="fas fa-info-circle"></i> <strong>Note:</strong> If no password was provided during installation and you chose SFTP access, a random password was generated and displayed during installation. Please check your installation logs for this password.
                   </p>
                   
                   <div class="generated-password-info">
                       <h4><i class="fas fa-key"></i> Generated Password (if applicable)</h4>
                       <p><strong>Password:</strong> <code>Check installation logs</code></p>
                       <p class="small-note">If no password was provided during installation, a random password was generated and displayed in the installation logs. Please check your installation logs for this password.</p>
                   </div>
               </div>
               
               <div class="db-info">
                   <h3><i class="fas fa-database"></i> Database Connection Details</h3>
                   <dl>
                       <dt>Database</dt>
                       <dd>__DB_NAME__</dd>
                       <dt>Username</dt>
                       <dd>__DB_USER__</dd>
                       <dt>Password</dt>
                       <dd><code>__DB_PWD__</code></dd>
                       <dt>Host</dt>
                       <dd>localhost</dd>
                       <dt>Port</dt>
                       <dd>3306</dd>
                   </dl>
                   <p class="db-note">
                       <i class="fas fa-info-circle"></i> <strong>Note:</strong> Database credentials are automatically generated during installation. Keep them secure for your application configuration.
                   </p>
               </div>

        <div>
            <a href="#" class="cta-button" onclick="refreshCat()">
                <i class="fas fa-upload"></i> Start Building
            </a>
            <a href="#" class="cta-button" onclick="refreshCat()">
                <i class="fas fa-cog"></i> Configure
            </a>
        </div>

        <div class="footer">
            <p><i class="fas fa-heart"></i> Powered by YunoHost | <i class="fas fa-php"></i> PHP Mode</p>
        </div>
    </div>

    <script>
        function refreshCat() {
            const catGif = document.getElementById('catGif');
            catGif.src = 'https://cataas.com/cat/gif?' + new Date().getTime();
        }

        // Refresh cat every 30 seconds
        setInterval(refreshCat, 30000);

        // Add click event to cat image
        document.getElementById('catGif').addEventListener('click', refreshCat);
    </script>
</body>
</html>
