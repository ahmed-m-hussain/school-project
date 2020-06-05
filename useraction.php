<?php
require_once 'lib/config.php';
require_once 'lib/functions.php';
//session_destroy();
require_once 'view/header.php';

$user_actions = $mysqli->query("select * from action_login");
$user_actions = $user_actions->fetch_all(MYSQLI_ASSOC);
// xml file path
/*$path = "data.csv";

// Read entire file into string
$xmlfile = file_get_contents($path);

// Convert xml string into an object
$new = simplexml_load_string($xmlfile);

// Convert into json
$Convert = json_encode($new);

// Convert into associative array
$xmlToArray = json_decode($Convert, true);

$myfile = fopen("new.xml", "w");
$data = '<Vectors3>' . "\n";
foreach ($xmlToArray['employee'] as $data) {
    $keys = implode(',', array_keys($data));
    $values = '"' . implode('","', array_values($data)) . '"';
    $v = $mysqli->query("INSERT INTO employees ($keys) VALUES($values)");
}*/
?>
    <div class="container mt-5">

        <div class="row">

            <div class="p-0 card col-lg-12 col-md-12 col-sm-12 bg-light text-center">
                <div class="card-header">
                    <h3>Users Actions</h3>
                </div>
                <div class="card-body">

                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action Tim</th>
                            <th scope="col">Username</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($user_actions as $action) { ?>
                            <tr>
                                <?php foreach (array_keys($action) as $row) { ?>
                                    <th><?= $action[$row] ?></th>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

<?php
require_once 'view/footer.php';
