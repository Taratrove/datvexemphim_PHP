<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Information user</title>

    <?php
    include_once('templates/styles.php');
    ?>
</head>
<body>

<?php
include("templates/header.php");
?>

<div class="container mt-5 mb-5">
    <h2 class="part-line">User Informations</h2>
    <div class="row my-5">
        <div class="col-md-4">
            <div class="card border-0 shadow-lg mb-4">
                <img src="uploads/<?php echo $user['image']; ?>" alt="User Image" class="card-img-top rounded-circle mx-auto d-block mt-3" style="width: 250px; height: 250px; object-fit: cover;">
                <div class="card-body text-center">
                    <h3 class="card-title"><?php echo $user['name']; ?></h3>
                    <p class="card-text text-muted text-uppercase">@<?php echo $user['username']; ?></p>
                    <ul class="list-unstyled text-left">
                        <hr>
                        <li class="d-flex justify-content-between"><span><strong>Hotline:</strong> 1900 ...</span> <i class="fa fa-angle-right"></i></li>
                        <hr>
                        <li class="d-flex justify-content-between"><span><strong>Email:</strong> support@azircinema.com</span> <i class="fa fa-angle-right"></i></li>
                        <hr>
                        <li class="d-flex justify-content-between"><span><strong>Câu hỏi thường gặp</strong></span> <i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Lịch sử giao dịch</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Thông tin cá nhân</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Thông báo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Quà tặng</a>
                    </li>
                </ul>
            </nav>

            <form action="update_user_info.php" method="post">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name">Họ và tên:</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $user['name']; ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="birthday">Ngày sinh:</label>
                        <input type="date" class="form-control" id="birthday" name="birthday" value="<?php echo $user['birthday']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $user['email']; ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="phone">Số điện thoại:</label>
                        <input type="tel" class="form-control" id="phone" name="phone" value="<?php echo $user['phone']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="gender">Gender:</label>
                        <select class="form-control" id="gender" name="gender">
                            <option value="Male" <?php echo ($user['gender'] == 'Male') ? 'selected' : ''; ?>>Nam</option>
                            <option value="Female" <?php echo ($user['gender'] == 'Female') ? 'selected' : ''; ?>>Nữ</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="password">Mật khẩu:</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="********" disabled>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" data-toggle="modal" data-target="#changePasswordModal">Thay đổi</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary float-right">Cập nhật</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="changePasswordModalLabel">Thay đổi mật khẩu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label for="newPassword">Mật khẩu mới:</label>
                <input type="password" class="form-control" id="newPassword" name="newPassword">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary">Lưu thay đổi</button>
            </div>
        </div>
    </div>
</div>

<?php
include("templates/footer.php");
?>

</body>
</html>