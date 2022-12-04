<?php 
$listtodos = $todoModel->listTodo();
?>
<div class="todo">
        <div class="header">
                <div class="add-todo">
                    <form method="POST" action="?c=todo&a=add">
                    <input type="text" name="task" placeholder="To Do">
                    <!-- <a action="?c=todo&a=add" method="POST"> -->
                    
                    
                    
                    <button class="add-button" type="submit">
                    <img src="views/icons/addbold.svg" class="svg" alt="" srcset="">
                    </button>
                    
                    
                    
                    </form>
                </div>
            </div>
            <ul>
            
                <?php  foreach($listtodos as $key=>$value){ ?>
                                <li class="task">
                                        <p class="task-test"> <?php echo $value["task"]; ?></p>

                                        <a href="?c=todo&a=delete&id=<?php echo $value["id"];?>"> <i class="fa-solid fa-xmark"></i></a>
                                </li>
                <?php  }
                ?>
            </ul>
        </div>