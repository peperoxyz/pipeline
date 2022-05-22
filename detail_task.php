
<?php include '../pipeline/templates/header.php'; ?>
<div class="container mt-5 px-2">
    <div class="mb-2 d-flex justify-content-between align-items-center">
        <div class="position-relative"> <span class="position-absolute search"><i class="fa fa-search"></i></span> <input class="form-control w-100" placeholder="Search by order#, name..."> </div>
        <div class="px-2"> <span>Filters <i class="fa fa-angle-down"></i></span> <i class="fa fa-ellipsis-h ms-3"></i> </div>
    </div>
    <div class="table-responsive">
        <table class="table table-responsive table-borderless">
            <thead>
                <tr class="bg-light">
                    <th scope="col" width="5%"><input class="form-check-input" type="checkbox"></th>
                    <th scope="col" width="5%">#</th>
                    <th scope="col" width="20%">Date</th>
                    <th scope="col" width="10%">Status</th>
                    <th scope="col" width="20%">Customer</th>
                    <th scope="col" width="20%">Purchased</th>
                    <th scope="col" class="text-end" width="20%"><span>Revenue</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><input class="form-check-input" type="checkbox"></th>
                    <td>12</td>
                    <td>1 Oct, 21</td>
                    <td><i class="fa fa-check-circle-o green"></i><span class="ms-1">Paid</span></td>
                    <td><img src="https://i.imgur.com/VKOeFyS.png" width="25"> Althan Travis</td>
                    <td>Wirecard for figma</td>
                    <td class="text-end"><span class="fw-bolder">$0.99</span> <i class="fa fa-ellipsis-h ms-2"></i></td>
                </tr>
                <tr>
                    <th scope="row"><input class="form-check-input" type="checkbox"></th>
                    <td>14</td>
                    <td>12 Oct, 21</td>
                    <td><i class="fa fa-dot-circle-o text-danger"></i><span class="ms-1">Failed</span></td>
                    <td><img src="https://i.imgur.com/nmnmfGv.png" width="25"> Tomo arvis</td>
                    <td>Altroz furry</td>
                    <td class="text-end"><span class="fw-bolder">$0.19</span> <i class="fa fa-ellipsis-h ms-2"></i></td>
                </tr>
                <tr>
                    <th scope="row"><input class="form-check-input" type="checkbox"></th>
                    <td>17</td>
                    <td>1 Nov, 21</td>
                    <td><i class="fa fa-check-circle-o green"></i><span class="ms-1">Paid</span></td>
                    <td><img src="https://i.imgur.com/VKOeFyS.png" width="25"> Althan Travis</td>
                    <td>Apple Macbook air</td>
                    <td class="text-end"><span class="fw-bolder">$1.99</span> <i class="fa fa-ellipsis-h ms-2"></i></td>
                </tr>
                <tr>
                    <th scope="row"><input class="form-check-input" type="checkbox"></th>
                    <td>90</td>
                    <td>19 Oct, 21</td>
                    <td><i class="fa fa-check-circle-o green"></i><span class="ms-1">Paid</span></td>
                    <td><img src="https://i.imgur.com/VKOeFyS.png" width="25"> Travis head</td>
                    <td>Apple Macbook Pro</td>
                    <td class="text-end"><span class="fw-bolder">$9.99</span> <i class="fa fa-ellipsis-h ms-2"></i></td>
                </tr>
                <tr>
                    <th scope="row"><input class="form-check-input" type="checkbox"></th>
                    <td>12</td>
                    <td>1 Oct, 21</td>
                    <td><i class="fa fa-check-circle-o green"></i><span class="ms-1">Paid</span></td>
                    <td><img src="https://i.imgur.com/nmnmfGv.png" width="25"> Althan Travis</td>
                    <td>Wirecard for figma</td>
                    <td class="text-end"><span class="fw-bolder">$0.99</span> <i class="fa fa-ellipsis-h ms-2"></i></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php include '../pipeline/templates/footer.php'; ?>