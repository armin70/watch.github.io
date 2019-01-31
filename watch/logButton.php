<?php
/**
 * Created by PhpStorm.
 * User: armin.a
 * Date: 1/19/2019
 * Time: 4:32 PM
 */

                    if(isset($_SESSION['logIn'])) {
                        $log = $_SESSION['logIn'];
                        if ($log == true) {
                            echo '<p class="text-white"><a href="?log" class="btn btn-danger"><i class="fas fa-user-times"></i> خروج از حساب کاربری</a></p>';
                        } else {
                            include 'signInForm.php';

                        }
                        if (isset($_GET['log'])) {
                            $_SESSION['logIn'] = false;
                        }
                    }else{
                        include 'signInForm.php';
                    }

                    ?>