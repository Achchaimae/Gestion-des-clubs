
<?php  foreach($listclubs as $key=>$value){ ?>
                <li class="task">
                        <p class="task-test"> <?php echo $value["task"]; ?></p>

                        <a href="?c=Todo&a=delete&id=<?php echo $value["id"];?>"> <i class="fa-solid fa-xmark"></i></a>
                </li>
<?php  }
?>