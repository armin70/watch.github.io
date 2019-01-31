
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    <i class="fas fa-user"></i> ورود کاربر
</button>

<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="col-md-4 float-right" action="signIn.php" method="POST">
                    <label for="userName"  class="float-right" >نام کاربری</label>
                    <input class="container" type="text" name="userName" id="userName">
                    <label for="password" class="float-right">رمز عبور</label>
                    <input class="container" type="password" name="password" id="password">
                    <button class="container">ورود</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
