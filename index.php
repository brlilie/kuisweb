

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bimsi Masuk Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="front.css">
    <link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro&display=swap" rel="stylesheet">
</head>
<body>
    <div class="bg-image"></div>
    <div class="bg-overlay"></div>


  <div class="container-fluid login-container">
      <div class="left-text">
        <div class="judulbimsi">
            BIMSI
        </div>
        <p>Ngebantu kamu, <em><b>segera lulus!</b></em></p>
      </div>


        <div class="signup-card">
         <h4 class="judul-login mb-4 text-center">Masuk Akun</h4>
         <form action="process_login.php" method="POST">
                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text">
                            <img src="assets/icon/email_icon.png" alt="Email Icon" style="width: 20px; height: 20px;">
                        </span>
                        <input type="text" name="username" class="form-control" placeholder="username" required>
                    </div>
                </div>
                <div class="mb-3">
                <div class="input-group">
                    <span class="input-group-text">
                        <img src="assets/icon/lock_icon.png" alt="Email Icon" style="width: 20px; height: 20px;">
                    </span>
                    
                    <input type="password" name="password" class="form-control" placeholder="password" required>
                </div>
                </div>

                <div class="d-flex justify-content-center mt-3">
                    <button class="button" type="submit">Masuk</button>
                </div> 
            </form>
        </div>
    </div>
  
    <!-- Bootstrap Icon CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

</body>
</html>

