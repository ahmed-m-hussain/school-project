<?php
require_once 'lib/config.php';
require_once 'lib/functions.php';
//session_destroy();
require_once 'view/header.php';

?>
    <div class="container mt-5">

        <div class="row">

            <div class="p-0 card col-lg-12 col-md-12 col-sm-12 bg-light text-center">
                <div class="card-header">
                    <h3>Employees <a href="#">Create Net</a></h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Action</th>
                            <th scope="col">Time</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>John Doe</td>
                            <td>Updated An Employee ID</td>
                            <td>00/00/0000</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

<?php
require_once 'view/footer.php';
