        <nav class="main_navigation <?= (isset($_COOKIE['menu_opened']) && $_COOKIE['menu_opened'] == 'true') ? 'opened no_animation' : '' ?>">
            <div class="employee_info">
                <div class="profile_picture">
                    <img src="img/user.png" alt="User Profile Picture">
                </div>
                <span class="name">عبدالباسط الهلالي</span>
                <span class="privilege">نذير مقصع</span>
            </div>
            <ul class="app_navigation">
                <li><a href="/"><i class="fa fa-dashboard"></i> الاحصائيات العامة</a></li>
                <li><a href="/employee"><i class="fa fa-users"></i> الموظفين</a></li>

        <li class="submenu">
            <a href="javascript:;"><i class="fa fa-user"></i> <?//= $text_users ?>المستخدمين</a>
            <ul>
                <li><a href="/user"><i class="fa fa-user-circle"></i> <?//= $text_users_list ?>قائمة المستخدمين</a></li>
                <li><a href="/usersgroups"><i class="fa fa-group"></i> <?//= $text_users_groups ?>المجموعات</a></li>
                <li><a href="/privileges"><i class="fa fa-key"></i> <?//= $text_users_privileges ?>الصلاحيات</a></li>
            </ul>
        </li>
                <li><a href="/auth/logout"><i class="fa fa-sign-out"></i> تسجيل الخروج</a></li>
            </ul>
        </nav>
        <div class="action_view <?= (isset($_COOKIE['menu_opened']) && $_COOKIE['menu_opened'] == 'true') ? 'collapsed no_animation' : '' ?>">
            <?php if (isset($_SESSION['message'])) { ?>
                <p class="message <?= isset($error) ? 'error' : '' ?>"><?= $_SESSION['message'] ?></p>
            <?php unset($_SESSION['message']);
            } ?>

