<div class="right">
  <section class="light calender">
   <div class="calendar">
    <div class="calendar-header">
        <span class="month-picker" id="month-picker">
            February
        </span>
        <div class="year-picker">
            <span class="year-change" id="prev-year">
                <pre><</pre>
            </span>
            <span id="year">2022</span>
            <span class="year-change" id="next-year">
                <pre>></pre>
            </span>
        </div>
    </div>
    <div class="calendar-body">
        <div class="calendar-week-day">
            <div>sun</div>
            <div>Mon</div>
            <div>tue</div>
            <div>wed</div>
            <div>thu</div>
            <div>fri</div>
            <div>sat</div>
        </div>
        <div class="calendar-days">
            <div>
                1
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div>2</div>
            <div>3</div>
            <div>4</div>
            <div>5</div>
            <div>6</div>
            <div>7</div>
            <div>8</div>
            <div>9</div>
            <div>10</div>
            <div>11</div>
            <div>12</div>
            <div>13</div>
            <div>14</div>
            <div>15</div>
            <div>16</div>
            <div>17</div>
            <div>18</div>
            <div>19</div>
            <div>20</div>
            <div>21</div>
            <div>22</div>
            <div>23</div>
            <div>24</div>
            <div>25</div>
            <div>26</div>
            <div>27</div>
            <div>28</div>
            <div>29</div>
            <div>30</div>
            
        </div>
        <div class="calendar-footer">
            <div class="toggle">
                <!-- <span> Dark Mode</span> -->
                <div class="dark-mode-switch">
                    <div class="dark-mode-switch-ident"></div>
                </div>
            </div>
        </div>
        <div class="month-list"></div>
    </div>
   </div>
</section>
   <script src="script.js"></script>

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
                <?php
                $listtodos = $todoModel->listTodo();
                foreach($listtodos as $key=>$value){ ?>
                                <li class="task">
                                        <p class="task-test"> <?php echo $value["task"]; ?></p>

                                        <a href="?c=todo&a=delete&id=<?php echo $value["id"];?>"> <i class="fa-solid fa-xmark"></i></a>
                                </li>
                <?php } ?>
            </ul>
        </div>
                </div>