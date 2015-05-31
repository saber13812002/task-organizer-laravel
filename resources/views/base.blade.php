<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task Organizer-Board</title>
    <link rel="stylesheet" href="/public/css/normalize.css">
    <link rel="stylesheet" href="/public/css/board.css">
    <link rel="stylesheet" href="/public/css/font.css">
    <link rel="stylesheet" href="/public/css/semantic.min.css">
    <link rel="stylesheet" href="/public/css/ionicons.css">
    <link rel="stylesheet" href="/public/css/iconate.css">
    <link rel="icon" href="/public/img/new_fav.png" type="image/gif">
</head>
<body>
        
        <div class="navbar">
        <div class="my-nav">
            <img src="img/new-icon.png" style="width:100%; margin-left:15px">
          <ul>
            <a href="#" class="addboard">
                <li>
                    <i class="ion-ios-plus-empty" id="dayatIcon"></i></a><br>
                    <label class="label">Add Board<label>
                </li>
            </a>
            <a href="board.html">
                <li>
                    <i class="ion-ios-list-outline" id="dayatIcon"></i></a><br>
                    <label class="label">Board List<label>
                </li>
            </a>
            
            <a href="#">
                <li id="user">
                    <i class="ion-ios-person-outline" ></i><br>
                    <label class="label">Account</label></a>
                </li>
            </a>

          </ul>
        </div>
    </div>
    
    <!-- content -->

    <div class="content">
        <h2>My Boards</h2>
        <div class="ui grid board">
            <div class="four wide column">
                <a href="#">
                    <div class="box">
                        <h3>Board 1 Lorem ipsum dolor sit amet, .</h3>
                        <div class="corner-edit">
                            <i class="ion-ios-compose-outline edit"></i>
                            <i class="ion-ios-trash-outline delete"></i>
                        </div>
                        
                    </div>
                </a>
            </div>
            <div class="four wide column">
                <a href="card.html">
                    <div class="box">
                        <h3>Board 1</h3>
                        <div class="corner-edit">
                            <i class="ion-ios-compose-outline edit"></i>
                            <i class="ion-ios-trash-outline delete"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="four wide column">
                <a href="card.html">
                    <div class="box">
                        <h3>Board 1</h3>
                        <div class="corner-edit">
                            <i class="ion-ios-compose-outline edit"></i>
                            <i class="ion-ios-trash-outline delete"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="four wide column">
                <a href="card.html">
                    <div class="box">
                        <h3>Board 1</h3>
                        <div class="corner-edit">
                            <i class="ion-ios-compose-outline edit"></i>
                            <i class="ion-ios-trash-outline delete"></i>
                        </div>
                    </div>
                </a>
            </div>
          </div>
    </div>
    <!-- content -->

    <!-- modal -->
    <div class="ui basic modal">
      <div class="ui two column centered grid">
                <div class="column">
                    <input id="boardname" type="text" class="validate" placeholder="Enter the board name . . .">
                </div>
              </div>
    </div>
    <!-- modal -->
    <div class="ui small test modal edit transition" style="margin-top: -98px;">
        <div class="ui action input edit-modal">
          <input type="text" placeholder="Edit Name Here...">
          <button class="ui icon button">
            <i class="checkmark icon"></i>
          </button>
          <button class="ui icon button">
            <i class="remove icon"></i>
          </button>
        </div>
    </div>
    <!-- modal -->
    <div class="ui small test modal transition hidden" style="margin-top: -98px;">
        <div class="header">
          Delete Your Board
        </div>
        <div class="addit">
            <div class="content">
              <p>Are you sure you want to delete your Board?</p>
            </div>
        </div>
        <div class="actions">
          <button class="ui icon button">
            <i class="checkmark icon"></i>
          </button>
          <button class="ui icon button">
            <i class="remove icon"></i>
          </button>
        </div>
      </div>
    <!-- modal -->

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="libs/customize bs/js/bootstrap.min.js"></script>
    <script src="libs/semantic-ui/semantic.min.js"></script>
    <script src="libs/iconate-master/src/iconate.js"></script>

    <script>
        $(document).on('click', '.addboard', function(){
            $('.basic.modal')
              .modal('show')
            ;
        });
        $(document).on('click', '.edit', function(){
            $('.small.modal.edit')
              .modal('show')
            ;
        })
        $(document).on('click', '.delete', function(){
            $('.small.modal')
              .modal('show')
            ;
        })
        
    </script>
</body>
</html>
