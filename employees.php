<?php
require_once 'lib/config.php';
require_once 'lib/functions.php';
//session_destroy();
require_once 'view/header.php';
$query_search = '';
$where = '';
if (isset($_GET['officeCode']) and $officeCode = $_GET['officeCode']) {
    $where .= " where officeCode = '$officeCode'";
}
if ($where) {
    if (isset($_GET['jobTitle']) and $jobTitle = $_GET['jobTitle']) {
        $where .= " and where jobTitle = '$jobTitle'";
    }
} else {
    if (isset($_GET['jobTitle']) and $jobTitle = $_GET['jobTitle'])
        $where .= " where officeCode = '$jobTitle'";

}
if ($where) {
    if (isset($_GET['reportsTo']) and $reportsTo = $_GET['reportsTo']) {
        $where .= " and where reportsTo = '$reportsTo'";
    }
} else {
    if (isset($_GET['reportsTo']) and $reportsTo = $_GET['reportsTo'])
        $where .= " where reportsTo = '$reportsTo'";

}

if ($where) {
    $username = $_SESSION['user']->username ?? null;
    $mysqli->query("INSERT INTO action_login (username,action_time,description) VALUES('$username',now(),'use Employees filter')");

}
$employees = $mysqli->query("select * from employees $where");
$employees = $employees->fetch_all(MYSQLI_ASSOC);
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
                    <h3>Employees</h3>
                </div>
                <div class="card-body">
                    <form class="form">
                        <table>
                            <tr>
                                <td>
                                    <input class="form-control" type="text" value="<?= _get('officeCode') ?>"
                                           name="officeCode"
                                           placeholder="Office Code">
                                </td>
                                <td>
                                    <input class="form-control" type="text" value="<?= _get('officeCode') ?>"
                                           name="officeCode"
                                           placeholder="Office Code">
                                </td>
                                <td>
                                    <input class="form-control" type="text" value="<?= _get('reportsTo') ?>"
                                           name="reportsTo" placeholder="Report To">
                                </td>
                                <td>
                                    <input class="form-control" type="text" value="<?= _get('jobTitle') ?>"
                                           name="jobTitle"
                                           placeholder="Job Title">
                                </td>
                                <td>
                                    <button type="submit">Filter</button>
                                </td>
                                <td>
                                    <button onclick="print()" type="button">Print</button>
                                </td>
                            </tr>
                        </table>


                    </form>

                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Job Title</th>
                            <th scope="col">Reports To</th>
                            <th scope="col">Office Code</th>
                            <th scope="col">Email</th>
                            <th scope="col">Extension</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($employees as $employee) { ?>
                            <tr>
                                <?php foreach (array_keys($employee) as $row) { ?>
                                    <th><?= $employee[$row] ?></th>
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
