<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
      body {
    font-family: "Open Sans", sans-serif;
    line-height: 1.6;
}

.add-todo-input,
.edit-todo-input {
    outline: none;
}

.add-todo-input:focus,
.edit-todo-input:focus {
    border: none !important;
    box-shadow: none !important;
}

.view-opt-label,
.date-label {
    font-size: 0.8rem;
}

.edit-todo-input {
    font-size: 1.7rem !important;
}

.todo-actions {
    visibility: hidden !important;
}

.todo-item:hover .todo-actions {
    visibility: visible !important;
}

.todo-item.editing .todo-actions .edit-icon {
    display: none !important;
}

</style>

<script>
    window.onload = function () {
    bootlint.showLintReportForCurrentDocument([], {
        hasProblems: false,
        problemFree: false
    });

    $('[data-toggle="tooltip"]').tooltip();

    function formatDate(date) {
        return (
            date.getDate() +
            "/" +
            (date.getMonth() + 1) +
            "/" +
            date.getFullYear()
        );
    }

    var currentDate = formatDate(new Date());

    $(".due-date-button").datepicker({
        format: "dd/mm/yyyy",
        autoclose: true,
        todayHighlight: true,
        startDate: currentDate,
        orientation: "bottom right"
    });

    $(".due-date-button").on("click", function (event) {
        $(".due-date-button")
            .datepicker("show")
            .on("changeDate", function (dateChangeEvent) {
                $(".due-date-button").datepicker("hide");
                $(".due-date-label").text(formatDate(dateChangeEvent.date));
            });
    });
};

</script>
</head>
<body>
    <div class="container m-5 p-2 rounded mx-auto bg-light shadow">
    <!-- App title section -->
    <div class="row m-1 p-4">
        <div class="col">
            <div class="p-1 h1 text-primary text-center mx-auto display-inline-block">
                <i class="fa fa-check bg-primary text-white rounded p-2"></i>
                <u>My Todo-s</u>
            </div>
        </div>
    </div>
    <!-- Create todo section -->
    <div class="row m-1 p-3">
        <div class="col col-11 mx-auto">
            <div class="row bg-white rounded shadow-sm p-2 add-todo-wrapper align-items-center justify-content-center">
                <div class="col">
                    <input class="form-control form-control-lg border-0 add-todo-input bg-transparent rounded" type="text" placeholder="Add new ..">
                </div>
                <div class="col-auto m-0 px-2 d-flex align-items-center">
                    <label class="text-secondary my-2 p-0 px-1 view-opt-label due-date-label d-none">Due date not set</label>
                    <i class="fa fa-calendar my-2 px-1 text-primary btn due-date-button" data-toggle="tooltip" data-placement="bottom" title="Set a Due date"></i>
                    <i class="fa fa-calendar-times-o my-2 px-1 text-danger btn clear-due-date-button d-none" data-toggle="tooltip" data-placement="bottom" title="Clear Due date"></i>
                </div>
                <div class="col-auto px-0 mx-0 mr-2">
                    <button type="button" class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
    </div>
    <div class="p-2 mx-4 border-black-25 border-bottom"></div>
    <!-- View options section -->
    <div class="row m-1 p-3 px-5 justify-content-end">
        <div class="col-auto d-flex align-items-center">
            <label class="text-secondary my-2 pr-2 view-opt-label">Filter</label>
            <select class="custom-select custom-select-sm btn my-2">
                <option value="all" selected>All</option>
                <option value="completed">Completed</option>
                <option value="active">Active</option>
                <option value="has-due-date">Has due date</option>
            </select>
        </div>
        <div class="col-auto d-flex align-items-center px-1 pr-3">
            <label class="text-secondary my-2 pr-2 view-opt-label">Sort</label>
            <select class="custom-select custom-select-sm btn my-2">
                <option value="added-date-asc" selected>Added date</option>
                <option value="due-date-desc">Due date</option>
            </select>
            <i class="fa fa fa-sort-amount-asc text-info btn mx-0 px-0 pl-1" data-toggle="tooltip" data-placement="bottom" title="Ascending"></i>
            <i class="fa fa fa-sort-amount-desc text-info btn mx-0 px-0 pl-1 d-none" data-toggle="tooltip" data-placement="bottom" title="Descending"></i>
        </div>
    </div>
    <!-- Todo list section -->
    <div class="row mx-1 px-5 pb-3 w-80">
        <div class="col mx-auto">
            <!-- Todo Item 1 -->
            <div class="row px-3 align-items-center todo-item rounded">
                <div class="col-auto m-1 p-0 d-flex align-items-center">
                    <h2 class="m-0 p-0">
                        <i class="fa fa-square-o text-primary btn m-0 p-0 d-none" data-toggle="tooltip" data-placement="bottom" title="Mark as complete"></i>
                        <i class="fa fa-check-square-o text-primary btn m-0 p-0" data-toggle="tooltip" data-placement="bottom" title="Mark as todo"></i>
                    </h2>
                </div>
                <div class="col px-1 m-1 d-flex align-items-center">
                    <input type="text" class="form-control form-control-lg border-0 edit-todo-input bg-transparent rounded px-3" readonly value="Buy groceries for next week" title="Buy groceries for next week" />
                    <input type="text" class="form-control form-control-lg border-0 edit-todo-input rounded px-3 d-none" value="Buy groceries for next week" />
                </div>
                <div class="col-auto m-1 p-0 px-3 d-none">
                </div>
                <div class="col-auto m-1 p-0 todo-actions">
                    <div class="row d-flex align-items-center justify-content-end">
                        <h5 class="m-0 p-0 px-2">
                            <i class="fa fa-pencil text-info btn m-0 p-0" data-toggle="tooltip" data-placement="bottom" title="Edit todo"></i>
                        </h5>
                        <h5 class="m-0 p-0 px-2">
                            <i class="fa fa-trash-o text-danger btn m-0 p-0" data-toggle="tooltip" data-placement="bottom" title="Delete todo"></i>
                        </h5>
                    </div>
                    <div class="row todo-created-info">
                        <div class="col-auto d-flex align-items-center pr-2">
                            <i class="fa fa-info-circle my-2 px-2 text-black-50 btn" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Created date"></i>
                            <label class="date-label my-2 text-black-50">28th Jun 2020</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Todo Item 2 -->
            <div class="row px-3 align-items-center todo-item rounded">
                <div class="col-auto m-1 p-0 d-flex align-items-center">
                    <h2 class="m-0 p-0">
                        <i class="fa fa-square-o text-primary btn m-0 p-0" data-toggle="tooltip" data-placement="bottom" title="Mark as complete"></i>
                        <i class="fa fa-check-square-o text-primary btn m-0 p-0 d-none" data-toggle="tooltip" data-placement="bottom" title="Mark as todo"></i>
                    </h2>
                </div>
                <div class="col px-1 m-1 d-flex align-items-center">
                    <input type="text" class="form-control form-control-lg border-0 edit-todo-input bg-transparent rounded px-3" readonly value="Renew car insurance" title="Renew car insurance" />
                    <input type="text" class="form-control form-control-lg border-0 edit-todo-input rounded px-3 d-none" value="Renew car insurance" />
                </div>
                <div class="col-auto m-1 p-0 px-3">
                    <div class="row">
                        <div class="col-auto d-flex align-items-center rounded bg-white border border-warning">
                            <i class="fa fa-hourglass-2 my-2 px-2 text-warning btn" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Due on date"></i>
                            <h6 class="text my-2 pr-2">28th Jun 2020</h6>
                        </div>
                    </div>
                </div>
                <div class="col-auto m-1 p-0 todo-actions">
                    <div class="row d-flex align-items-center justify-content-end">
                        <h5 class="m-0 p-0 px-2">
                            <i class="fa fa-pencil text-info btn m-0 p-0" data-toggle="tooltip" data-placement="bottom" title="Edit todo"></i>
                        </h5>
                        <h5 class="m-0 p-0 px-2">
                            <i class="fa fa-trash-o text-danger btn m-0 p-0" data-toggle="tooltip" data-placement="bottom" title="Delete todo"></i>
                        </h5>
                    </div>
                    <div class="row todo-created-info">
                        <div class="col-auto d-flex align-items-center pr-2">
                            <i class="fa fa-info-circle my-2 px-2 text-black-50 btn" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Created date"></i>
                            <label class="date-label my-2 text-black-50">28th Jun 2020</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Todo Item 3 -->
            <div class="row px-3 align-items-center todo-item editing rounded">
                <div class="col-auto m-1 p-0 d-flex align-items-center">
                    <h2 class="m-0 p-0">
                        <i class="fa fa-square-o text-primary btn m-0 p-0" data-toggle="tooltip" data-placement="bottom" title="Mark as complete"></i>
                        <i class="fa fa-check-square-o text-primary btn m-0 p-0 d-none" data-toggle="tooltip" data-placement="bottom" title="Mark as todo"></i>
                    </h2>
                </div>
                <div class="col px-1 m-1 d-flex align-items-center">
                    <input type="text" class="form-control form-control-lg border-0 edit-todo-input bg-transparent rounded px-3 d-none" readonly value="Sign up for online course" title="Sign up for online course" />
                    <input type="text" class="form-control form-control-lg border-0 edit-todo-input rounded px-3" value="Sign up for online course" />
                </div>
                <div class="col-auto m-1 p-0 px-3 d-none">
                </div>
                <div class="col-auto m-1 p-0 todo-actions">
                    <div class="row d-flex align-items-center justify-content-end">
                        <h5 class="m-0 p-0 px-2 edit-icon">
                            <i class="fa fa-pencil text-info btn m-0 p-0" data-toggle="tooltip" data-placement="bottom" title="Edit todo"></i>
                        </h5>
                        <h5 class="m-0 p-0 px-2">
                            <i class="fa fa-trash-o text-danger btn m-0 p-0" data-toggle="tooltip" data-placement="bottom" title="Delete todo"></i>
                        </h5>
                    </div>
                    <div class="row todo-created-info">
                        <div class="col-auto d-flex align-items-center pr-2">
                            <i class="fa fa-info-circle my-2 px-2 text-black-50 btn" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Created date"></i>
                            <label class="date-label my-2 text-black-50">28th Jun 2020</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

    <style>
        body{
    background-color: #f6f6f6;
    margin-top:20px;
}

.card {
    background-color: #fff;
    border-radius: 10px;
    border: none;
    position: relative;
    margin-bottom: 30px;
    box-shadow: 0 0.46875rem 2.1875rem rgba(90,97,105,0.1), 0 0.9375rem 1.40625rem rgba(90,97,105,0.1), 0 0.25rem 0.53125rem rgba(90,97,105,0.12), 0 0.125rem 0.1875rem rgba(90,97,105,0.1);
}

.card .card-header {
    border-bottom-color: #f9f9f9;
    line-height: 30px;
    -ms-grid-row-align: center;
    align-self: center;
    width: 100%;
    padding: 10px 25px;
    display: flex;
    align-items: center;
}

.card .card-header, .card .card-body, .card .card-footer {
    background-color: transparent;
    padding: 20px 25px;
}
.card-header:first-child {
    border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
}
.card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0,0,0,.03);
    border-bottom: 1px solid rgba(0,0,0,.125);
}

.table:not(.table-sm) thead th {
    border-bottom: none;
    background-color: #e9e9eb;
    color: #666;
    padding-top: 15px;
    padding-bottom: 15px;
}

.table .table-img img {
    width: 35px;
    height: 35px;
    border-radius: 50%;
    border: 2px solid #bbbbbb;
    -webkit-box-shadow: 5px 6px 15px 0px rgba(49,47,49,0.5);
    -moz-box-shadow: 5px 6px 15px 0px rgba(49,47,49,0.5);
    -ms-box-shadow: 5px 6px 15px 0px rgba(49,47,49,0.5);
    box-shadow: 5px 6px 15px 0px rgba(49,47,49,0.5);
    text-shadow: 0 0 black;
}

.table .team-member-sm {
    width: 32px;
    -webkit-transition: all 0.25s ease;
    -o-transition: all 0.25s ease;
    -moz-transition: all 0.25s ease;
    transition: all 0.25s ease;
}
.table .team-member {
    position: relative;
    width: 30px;
    white-space: nowrap;
    border-radius: 1000px;
    vertical-align: bottom;
    display: inline-block;
}

.table .order-list li img {
    border: 2px solid #ffffff;
    box-shadow: 4px 3px 6px 0 rgba(0,0,0,0.2);
}
.table .team-member img {
    width: 100%;
    max-width: 100%;
    height: auto;
    border: 0;
    border-radius: 1000px;
}
.rounded-circle {
    border-radius: 50% !important;
}

.table .order-list li+li {
    margin-left: -14px;
    background: transparent;
}
.avatar.avatar-sm {
    font-size: 12px;
    height: 30px;
    width: 30px;
}
.avatar {
    background: #6777ef;
    border-radius: 50%;
    color: #e3eaef;
    display: inline-block;
    font-size: 16px;
    font-weight: 300;
    margin: 0;
    position: relative;
    vertical-align: middle;
    line-height: 1.28;
    height: 45px;
    width: 45px;
}

.table .order-list li .badge {
    background: rgba(228,222,222,0.8);
    color: #6b6f82;
    margin-bottom: 6px;
}

.badge {
    vertical-align: middle;
    padding: 7px 12px;
    font-weight: 600;
    letter-spacing: 0.3px;
    border-radius: 30px;
    font-size: 12px;
}

.progress-bar {
    display: -ms-flexbox;
    display: -webkit-box;
    display: flex;
    -ms-flex-direction: column;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    flex-direction: column;
    -ms-flex-pack: center;
    -webkit-box-pack: center;
    justify-content: center;
    overflow: hidden;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    background-color: #007bff;
    -webkit-transition: width .6s ease;
    transition: width .6s ease;
}

.bg-success {
    background-color: #54ca68 !important;
}

.bg-purple {
    background-color: #9c27b0 !important;
    color: #fff;
}

.bg-cyan {
    background-color: #10cfbd !important;
    color: #fff;
}

.bg-red {
    background-color: #f44336 !important;
    color: #fff;
}

.progress {
    -webkit-box-shadow: 0 0.4rem 0.6rem rgba(0,0,0,0.15);
    box-shadow: 0 0.4rem 0.6rem rgba(0,0,0,0.15);
}

.btn-action {
    color: #fff !important;
    line-height: 25px;
    font-size: 12px;
    min-width: 35px;
    min-height: 35px;
}
</style>
</head>
<body>
<div class="container">
<div class="col-md-12 col-12 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h4>Task Details</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped">
            <tbody><tr>
              <th class="text-center">
                <div class="custom-checkbox custom-checkbox-table custom-control">
                  <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                  <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                </div>
              </th>
              <th>Task Name</th>
              <th>Progress</th>
              <th>Due Date</th>
              <th>Action</th>
            </tr>
            <tr>
              <td class="p-0 text-center">
                <div class="custom-checkbox custom-control">
                  <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                  <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                </div>
              </td>
              <td>Ecommerce website</td>
              <td class="align-middle">
                <div class="progress" data-height="4" data-toggle="tooltip" title="" data-original-title="100%" style="height: 4px;">
                  <div class="progress-bar bg-success" data-width="100" style="width: 100px;"></div>
                </div>
              </td>
              <td>2018-01-20</td>
              <td>
                <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
                <a class="btn btn-danger btn-action" data-toggle="tooltip" title="" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
            <tr>
              <td class="p-0 text-center">
                <div class="custom-checkbox custom-control">
                  <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-4">
                  <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                </div>
              </td>
              <td>Android App</td>
              <td class="align-middle">
                <div class="progress" data-height="4" data-toggle="tooltip" title="" data-original-title="30%" style="height: 4px;">
                  <div class="progress-bar bg-orange" data-width="30" style="width: 30px;"></div>
                </div>
              </td>
              <td>2018-09-11</td>
              <td>
                <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
                <a class="btn btn-danger btn-action" data-toggle="tooltip" title="" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
            <tr>
              <td class="p-0 text-center">
                <div class="custom-checkbox custom-control">
                  <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-5">
                  <label for="checkbox-5" class="custom-control-label">&nbsp;</label>
                </div>
              </td>
              <td>Logo Design</td>
              <td class="align-middle">
                <div class="progress" data-height="4" data-toggle="tooltip" title="" data-original-title="67%" style="height: 4px;">
                  <div class="progress-bar bg-purple" data-width="67" style="width: 67px;"></div>
                </div>
              </td>
              <td>2018-04-12</td>
              <td>
                <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
                <a class="btn btn-danger btn-action" data-toggle="tooltip" title="" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
            <tr>
              <td class="p-0 text-center">
                <div class="custom-checkbox custom-control">
                  <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-6">
                  <label for="checkbox-6" class="custom-control-label">&nbsp;</label>
                </div>
              </td>
              <td>Java Project</td>
              <td class="align-middle">
                <div class="progress" data-height="4" data-toggle="tooltip" title="" data-original-title="43%" style="height: 4px;">
                  <div class="progress-bar bg-success" data-width="43" style="width: 43px;"></div>
                </div>
              </td>
              <td>2018-01-20</td>
              <td>
                <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
                <a class="btn btn-danger btn-action" data-toggle="tooltip" title="" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
          </tbody></table>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>