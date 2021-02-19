<!DOCTYPE html>
<html lang="pt">
<head>
    <title>Dynamic Tables</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h2 class="text-center h4 mt-2 mb-5">Dynamics Tables</h2>

    <?php $companyNames = array("Id", "Company", "Address", "Email", "Number"); ?>

    <?php
        $enterprises = array(
            'company' => array(
                'id'      => 1,
                'name'    => "BukaTek",
                'address' => "Cassenda",
                'email'   => "btk@gmail.com",
                'number'  => 936956559,
            )
        );
    ?>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <?php foreach($companyNames as $headerTitle):?>
                        <th scope="col"><?=$headerTitle;?></th>
                    <?php endforeach;?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?=$enterprises['company']['id'];?></th>
                     <th><?=$enterprises['company']['name'];?></th>
                     <td><?=$enterprises['company']['address'];?></td>
                     <td><?=$enterprises['company']['email'];?></td>
                     <td><?=$enterprises['company']['number'];?></td>
                 </tr>
            </tbody>
        </table>
    </div>
</body>
</html>