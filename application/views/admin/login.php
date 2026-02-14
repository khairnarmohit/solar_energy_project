<!DOCTYPE html>
<html>
<head>
    <title>Convex Solar Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="<?= base_url('assets/image/web_logo.webp') ?>">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            margin:0;
            height:100vh;
            display:flex;
            align-items:center;
            justify-content:center;
            font-family: 'Segoe UI', sans-serif;
            background: url('<?= base_url("assets/image/servicepage.webp"); ?>') no-repeat center center/cover;
            position:relative;
        }

        /* Dark overlay + blur */
        body::before{
            content:"";
            position:absolute;
            inset:0;
            background:rgba(0,0,0,0.55);
            backdrop-filter: blur(6px);
        }

        .login-wrapper{
            position:relative;
            z-index:2;
        }

        .login-card{
            width:400px;
            padding:40px 35px;
            border-radius:20px;
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(20px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
            color:#fff;
        }

        .logo{
            width:90px;
            margin-bottom:15px;
        }

        .brand-title{
            font-weight:700;
            font-size:22px;
            margin-bottom:25px;
            color:#ffb347;
        }

        .form-control{
            border-radius:10px;
            padding:10px;
            background:rgba(255,255,255,0.15);
            border:none;
            color:#fff;
        }

        .form-control::placeholder{
            color:#ddd;
        }

        .form-control:focus{
            box-shadow:none;
            background:rgba(255,255,255,0.25);
            color:#fff;
        }

        .btn-orange{
            background:#ff7a00;
            border:none;
            border-radius:10px;
            padding:10px;
            font-weight:600;
        }

        .btn-orange:hover{
            background:#e56e00;
        }

        .alert{
            border-radius:10px;
        }

        label{
            font-size:14px;
            margin-bottom:5px;
        }

    </style>
</head>

<body>

<div class="login-wrapper">

    <div class="login-card text-center">

        <!-- LOGO -->
        <img src="<?= base_url('assets/image/web_logo.webp'); ?>" class="logo" alt="Convex Solar">

        <div class="brand-title">
            Convex Solar Admin
        </div>

        <!-- Flash Message -->
        <?php if($this->session->flashdata('error')){ ?>
            <div class="alert alert-danger">
                <?= $this->session->flashdata('error'); ?>
            </div>
        <?php } ?>

        <form method="post" action="<?= base_url('admin/login_process'); ?>" class="text-start">

            <div class="mb-3">
                <label>Email</label>
                <input type="email"
                       name="email"
                       class="form-control"
                       placeholder="Enter your email"
                       required>
            </div>

            <div class="mb-4">
                <label>Password</label>
                <input type="password"
                       name="password"
                       class="form-control"
                       placeholder="Enter your password"
                       required>
            </div>

            <button type="submit" class="btn btn-orange w-100">
                Login
            </button>

        </form>

    </div>

</div>

</body>
</html>
